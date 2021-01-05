import os
import subprocess
import sys

# load PhonieBox global conf
config = {}

# open file and read the content in a list
with open('../settings/global.conf', 'r') as filehandle:
    filecontents = filehandle.readlines()

    for line in filecontents:
        cids = (line[:-1]).split('=')
        config[cids[0]] = (cids[1])[1:-1]



# Speaking function (with cache in audiofolders/ folder)
def speak(text, file="", lang="fr"):
    if file == "":
        file = config["AUDIOFOLDERSPATH"] +"/"+ text +".mp3"

    if not os.path.exists(file):
        subprocess.call(["wget -q -U Mozilla -O \""+ file +"\" \"http://translate.google.com/translate_tts?ie=UTF-8&client=tw-ob&q="+ text +"&tl="+ lang +"\""], shell=True)
    subprocess.call(["mpc pause ; mpg123 \""+ file + "\""], shell=True)


# return contents of file
def readFile(file):
    f = ""
    if os.path.exists(file):
        f = (open(file)).read().rstrip('\n')
    return f

def readCommand(cmd):
     ret = []
     process = subprocess.Popen(cmd,shell=True,stdin=None,stdout=subprocess.PIPE,stderr=subprocess.PIPE)
     # The output from your shell command
     result = process.stdout.readlines()
     if len(result) >= 1:
         for line in result:
             ret.append(line.decode("utf-8").rstrip('\n').lstrip('\t'))
     return ret


# Get Bluetooth devices list
def getBluetoothDevices():
    output = readCommand('/usr/bin/bluetoothctl -- power on && /usr/bin/bluetoothctl -- agent on')

    outputs = readCommand('/usr/bin/bluetoothctl -- devices')
    
    BTDEVICES = {}
    for output in outputs:
        f = output.replace("Device ", "").split(" ")
        mac_addr = f[0]
        f.pop(0)
        name = " ".join(f)
        BTDEVICES[mac_addr] = {'name' : name}
    
        # Get Bluetooth device info
        status = {}
        status_outputs = readCommand('/usr/bin/bluetoothctl -- info '+ mac_addr +' | grep ": " ')
        for status_output in status_outputs:
            f = status_output.split(": ")
            key = f[0]
            f.pop(0)
            value = " ".join(f)
            BTDEVICES[mac_addr][key] = value
    return BTDEVICES


# Get Bluetooth devices filtered by info attribute
def getBluetoothDevicesFilter(filter_key, filter_value="yes"):
    BTDEVICES = getBluetoothDevices()
    ret = {}
    for key in BTDEVICES.keys():
       if BTDEVICES[key][filter_key] == filter_value:
           ret[key] = BTDEVICES[key]
    return ret



# Get Bluetooth connected devices
def getBluetoothConnectedDevices():
    BTDEVICES = getBluetoothDevicesFilter("Trusted")
    ret = {}
    for mac_addr in BTDEVICES.keys():
       readCommand('/usr/bin/bluetoothctl -- connect '+ mac_addr +'')
       output = readCommand('/usr/bin/bluetoothctl -- info '+ mac_addr +'')
       if BTDEVICES[mac_addr][filter_key] == "yes":
           ret[mac_addr] = BTDEVICES[mac_addr]

    return getBluetoothDevicesFilter("Connected", "yes")
