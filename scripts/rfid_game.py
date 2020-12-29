#!/usr/bin/env python3

import logging
import os
import subprocess
import time
import re
from pprint import pprint 


from Reader import Reader

reader = Reader()

same_id_delay = 1
previous_id = ""
previous_time = time.time()

dir_path = os.path.dirname(os.path.realpath(__file__))

# get control card ids
file_path = os.path.dirname(__file__)
if file_path != "":
    os.chdir(file_path)

shorcuts = os.listdir('../shared/shortcuts')

subprocess.call([dir_path + "/userscripts/speech.sh Jouons ensemble"], shell=True)

print(shorcuts)

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
                if cardid in shorcuts:
                    print("COMMAND CARD")
                    subprocess.call(["sudo systemctl restart phoniebox-rfid-reader"], shell=True)
                    subprocess.call([dir_path + '/rfid_trigger_play.sh --cardid=' + cardid], shell=True)
                    exit()


            previous_time = time.time()

    except OSError as e:
        logger.error('Execution failed: {e}'.format(e=e))
