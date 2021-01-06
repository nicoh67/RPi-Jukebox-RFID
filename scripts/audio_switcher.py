#!/usr/bin/env python3

import os
import subprocess
import time
import sys
import getopt

import functions

try: 
    opts, args = getopt.getopt( (sys.argv[1:]), "s:") 
except: 
    print("Error") 

source = ""
for opt, arg in opts:
    if opt in ['-s']:
        source = arg





BTDEVICES = functions.getBluetoothDevicesFilter("Trusted")
print(BTDEVICES)
for BTDEVICE in BTDEVICES.values():
    print(BTDEVICE['name'] +" => "+ BTDEVICE['Connected'])


#sudo service mpd restart

#mpc enable 3 && mpc disable 1