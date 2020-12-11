#!/bin/bash

PATHROOT=/home/pi/RPi-Jukebox-RFID
PATHDATA="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

. ${PATHDATA}/../settings/backup2network.conf


if [ "$(id -nu)" != "root" ]; then
	echo "sudo is needed"
	exit 1
fi

mpg123 $PATHROOT/misc/backup_start.mp3


if [ -f "$VOLUME_BACKUP" ]; then
	mkdir $VOLUME_BACKUP
	chmod 0775 $VOLUME_BACKUP
fi


if [ $LIMIT_TO_NETWORK ]; then
	echo "Limit to SSID $LIMIT_TO_NETWORK";

	ssid=$(iwgetid)
	ssid=${ssid##*:}
	
	if [ \"$LIMIT_TO_NETWORK\" != "$ssid" ]; then
		echo "ERROR ! Not connected to limited network"
		mpg123 $PATHROOT/misc/backup_incorrect_ssid.mp3
		exit 0
	fi
fi


RET=$(mount -o timeo=1 -t nfs $NFS_SERVER:$NFS_VOLUME $VOLUME_BACKUP 2>&1)

if [[ "$RET" =~ "Connection timed out" ]]; then
	echo "ERROR ! Unable to connect to backup server"
	mpg123 $PATHROOT/misc/backup_unable_to_connect_to_server.mp3
	exit 0
fi


echo "Backuping data"

rsync -avz $PATHROOT $VOLUME_BACKUP


umount $VOLUME_BACKUP


mpg123 $PATHROOT/misc/backup_ended.mp3

