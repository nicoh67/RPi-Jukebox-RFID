#!/usr/bin/env python3

import os
import subprocess
import time
import sys

import functions

BTDEVICES = functions.getBluetoothDevicesFilter("Trusted")
print(BTDEVICES)
for BTDEVICE in BTDEVICES.values():
    print(BTDEVICE['name'] +" => "+ BTDEVICE['Connected'])


#sudo service mpd restart

#mpc enable 3 && mpc disable 1