#!/usr/bin/env python3

import os
import subprocess
import time
import sys
import getopt
import random




dir_path = os.path.dirname(os.path.realpath(__file__))

# get control card ids
file_path = os.path.dirname(__file__)
if file_path != "":
    os.chdir(file_path)


# Speaking function (with cache in GAMES/ folder)
def speak(text, file=""):
    if file == "":
        file = text

    file = config["AUDIOFOLDERSPATH"] +"/GAMES/"+ file +".mp3"
    if not os.path.exists(file):
        subprocess.call(["wget -q -U Mozilla -O \""+ file +"\" \"http://translate.google.com/translate_tts?ie=UTF-8&client=tw-ob&q="+ text +"&tl=fr\""], shell=True)
    subprocess.call(["mpc pause ; mpg123 \""+ file + "\""], shell=True)



# return contents of file
def readFile(file):
    f = ""
    if os.path.exists(file):
        f = (open(file)).read().rstrip('\n')
    return f



same_id_delay = 1


argv = sys.argv[1:] 
folder = ""

try: 
    opts, args = getopt.getopt(argv, "d:") 
except: 
    print("Error") 

folder = ""
for opt, arg in opts:
    if opt in ['-d']:
        folder = arg





# load PhonieBox global conf
config = {}

# open file and read the content in a list
with open('../settings/global.conf', 'r') as filehandle:
    filecontents = filehandle.readlines()

    for line in filecontents:
        cids = (line[:-1]).split('=')
        config[cids[0]] = (cids[1])[1:-1]


# check if folder is set
if folder == "":
    print("Pas de jeu sélectionné")
    speak("Pas de jeu sélectionné")
    exit()



folder_path = config["AUDIOFOLDERSPATH"] +"/GAMES/"+ folder +"/"








# check if folder of game exists, if not, exit
if not os.path.exists(folder_path):
    print("Le dossier "+ folder_path +" n'existe pas")
    speak("Le jeu "+ folder +" n'existe pas")
    exit()



shortcuts_path = config["AUDIOFOLDERSPATH"] +'/../shortcuts/'
shortcuts = os.listdir(shortcuts_path)

# On récupère les items qui ont déjà un cardid associé
items = {}
for shortcut in shortcuts:
    f = readFile(shortcuts_path + shortcut)
    if f != "":
        # check if folder of item exists
        if os.path.dirname(f) == "GAMES/"+ folder and os.path.exists(config["AUDIOFOLDERSPATH"] +"/"+ f):
            items[os.path.basename(f)] = shortcut
        # pour les tests
#        else:
#            items[f] = "998313623"


#print(config)
print(folder_path)
print(shortcuts)
print(items)
print(list(items.values()))
#exit()

speak("Jouons ensemble ! Devine les "+ folder)


from Reader import Reader

reader = Reader()



def playitem():
    previous_id = ""
    previous_time = time.time()

    items_keys = list(items.keys())
    item = random.choice(items_keys)
    item_card_id = items[item]
    print(item)
    print(item_card_id)

    subprocess.call(["mpc clear && mpc add \"GAMES/"+ folder +"/"+ item +"\" && mpc play && mpc next"], shell=True)

    # to delete 0.mp3 from the queue
    # subprocess.call(["mpc clear && mpc add GAMES/"+ folder +"/"+ item +" && mpc del 1 && mpc play"], shell=True)


    while True:
        # reading the card id
        # NOTE: it's been reported that KKMOON Reader might need the following line altered.
        # Instead of:
        # cardid = reader.reader.readCard()
        # change the line to:
        # cardid = reader.readCard()
        # See here for (German ;) details:
        # https://github.com/MiczFlor/RPi-Jukebox-RFID/issues/551
        cardid = reader.reader.readCard()
        try:
            if cardid is not None:

                if cardid != previous_id or (time.time() - previous_time) >= float(same_id_delay):
                    print(cardid)
                    previous_id = cardid

                    if cardid == item_card_id:
                        subprocess.call(["mpc stop ; sudo mpg123 "+ folder_path + item +"/0.mp3"], shell=True)
                        speak("Bravo ! Tu as trouvé ! Passons à dautres "+ folder)
                        return True

                    elif cardid in list(items.values()):
                        speak("Essaye encore !")
                        subprocess.call(["mpc play"], shell=True)

                    elif cardid in shortcuts:
                        print("COMMAND CARD")
                        subprocess.call(["sudo systemctl restart phoniebox-rfid-reader"], shell=True)
                        subprocess.call([dir_path + '/rfid_trigger_play.sh --cardid=' + cardid], shell=True)
                        exit()


                previous_time = time.time()

        except OSError as e:
            logger.error('Execution failed: {e}'.format(e=e))







while True:
    playitem()


