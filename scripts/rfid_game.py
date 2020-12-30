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


def speak(text, file=""):
    if file == "":
        file = text

    file = config["AUDIOFOLDERSPATH"] +"/GAMES/"+ file +".mp3"
    if not os.path.exists(file):
        subprocess.call(["wget -q -U Mozilla -O \""+ file +"\" \"http://translate.google.com/translate_tts?ie=UTF-8&client=tw-ob&q="+ text +"&tl=fr\""], shell=True)
    subprocess.call(["mpc pause ; mpg123 \""+ file + "\""], shell=True)



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


# check if folder is set
if folder == "":
    print("Pas de jeu sélectionné")
    speak("Pas de jeu sélectionné")
    exit()



# load PhonieBox global conf
config = {}

# open file and read the content in a list
with open('../settings/global.conf', 'r') as filehandle:
    filecontents = filehandle.readlines()

    for line in filecontents:
        cids = (line[:-1]).split('=')
        config[cids[0]] = (cids[1])[1:-1]



folder_path = config["AUDIOFOLDERSPATH"] +"/GAMES/"+ folder +"/"








# check if folder of game exists, if not, exit
if not os.path.exists(folder_path):
    print("Le dossier "+ folder_path +" n'existe pas")
    speak("Le jeu "+ folder +" n'existe pas")
    exit()



system_shortcuts = os.listdir(config["AUDIOFOLDERSPATH"] +'/../shortcuts')


# list all folders as a folder is an item
items_import = os.listdir(folder_path)
items_import = [s for s in items_import if os.path.isdir(folder_path + s)]


# On récupère les items qui ont un cardid associé (sinon impossible de le trouver)
items = {}
for item_import in items_import:
    if os.path.exists(folder_path + item_import +"/cardid"):
        f = (open(folder_path + item_import +"/cardid")).read()
        items[item_import] = f
    # pour les tests
    else:
        items[item_import] = "998313623"


#print(config)
print(folder_path)
#print(system_shortcuts)
print(items)


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

                    elif cardid in system_shortcuts:
                        print("COMMAND CARD")
                        subprocess.call(["sudo systemctl restart phoniebox-rfid-reader"], shell=True)
                        subprocess.call([dir_path + '/rfid_trigger_play.sh --cardid=' + cardid], shell=True)
                        exit()

                    else:
                        speak("Essaye encore !")
                        subprocess.call(["mpc play"], shell=True)



                previous_time = time.time()

        except OSError as e:
            logger.error('Execution failed: {e}'.format(e=e))







while True:
    playitem()


