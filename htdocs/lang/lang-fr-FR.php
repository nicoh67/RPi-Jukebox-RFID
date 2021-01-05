<?php
$lang = array();

$lang['globalEdit'] = "Editer";
$lang['globalResume'] = "Reprise";
$lang['globalPassword'] = "Mot de passe";
$lang['globalOff'] = "OFF";
$lang['globalOn'] = "ON";
$lang['globalSingle'] = "Single";
$lang['globalTrack'] = "Piste";
$lang['globalList'] = "Liste";
$lang['globalPlaylist'] = "Playlist";
$lang['globalCardId'] = "ID Carte RFID";
$lang['globalRFIDCard'] = "Carte RFID";
$lang['globalRFIDCards'] = "Cartes RFID";
$lang['globalCardIdPlaceholder'] = "ex. '1234567890'";
$lang['globalCardIdHelp'] = "L'ID est souvent imprimé sur la carte ou le badge. Une liste des IDs utilisés se trouve sur la page d'accueil.";
$lang['globalRegisterCard'] = "Enregistrer un nouvel ID de carte";
$lang['globalRegisterCardShort'] = "ID Carte";
$lang['globalLastUsedCard'] = "Dernier ID de carte utilisé";
$lang['globalClose'] = "Fermer";
$lang['globalPlay'] = "Play";
$lang['globalVolume'] = "Volume";
$lang['globalVolumeSettings'] = "Paramètres Volume";
$lang['globalWifi'] = "WiFi";
$lang['globalWifiSettings'] = "Paramètres WiFi";
$lang['globalWifiNetwork'] = "Paramètres WiFi";
$lang['globalSSID'] = "SSID";
$lang['globalSet'] = "Définir";
$lang['globalSettings'] = "Paramètres";
$lang['globalFolder'] = "Dossier";
$lang['globalFolderName'] = "Nom du dossier";
$lang['globalFilename'] = "Nom du fichier";
$lang['globalStream'] = "Stream";
$lang['globalSubmit'] = "Valider";
$lang['globalUpload'] = "Transférer";
$lang['globalUpdate'] = "Mettre à jour";
$lang['globalCancel'] = "Annuler";
$lang['globalDelete'] = "Supprimer";
$lang['globalCreate'] = "Créer";
$lang['globalMove'] = "Déplacer";
$lang['globalJumpTo'] = "Aller à";
$lang['globalAutoShutdown'] = "Arrêt Auto";
$lang['globalIdleShutdown'] = "Veille après X min d'inactivité";
$lang['globalAutoStopPlayout'] = "Minuterie Arrêt lecture";
$lang['globalStopTimer'] = "Minuterie Arrêt lecture";
$lang['globalSleepTimer'] = "Minuterie d'arrêt (Shutdown)";
$lang['globalExternalInterfaces'] = "Appareils & Interfaces externes";
$lang['globalIdleTime'] = "Inactif depuis";
$lang['globalNotIdle'] = "Actif";
$lang['globalGpioButtons'] = "Boutons GPIO";
$lang['globalRotaryKnob'] = "Potentiomètre (Rotary Knob)";
$lang['globalRfidReader'] = "Lecteur RFID";
$lang['globalEnabled'] = "Activé";
$lang['globalDisabled'] = "Désactivé";
$lang['globalSwitchOn'] = "Activer";
$lang['globalSwitchOff'] = "Désactiver";
$lang['globalSystem'] = "Système";
$lang['globalVersion'] = "Version";
$lang['globalDescription'] = "Description";
$lang['globalRelease'] = "Release";
$lang['globalStorage'] = "Stockage";
$lang['globalShuffle'] = "Aléatoire";
$lang['globalReplay'] = "Replay";
$lang['globalRepeat'] = "Répéter";
$lang['globalLoop'] = "Boucle";
$lang['globalLang'] = "Langue";
$lang['globalLanguageSettings'] = "Paramètres de Langue";
$lang['globalPriority'] = "Priorité";
$lang['globalEmail'] = "Adresse email";
$lang['globalAudioOutputs'] = "Sorties Audio";

// Player title HTML
$lang['playerSeekBack'] = "- 20 secondes";
$lang['playerSeekAhead'] = "+ 20 secondes";
$lang['playerSkipPrev'] = "Piste précédente";
$lang['playerSkipNext'] = "Piste suivante";
$lang['playerPlayPause'] = "Lecture / Pause";
$lang['playerReplay'] = "Rejouer la piste";
$lang['playerLoop'] = "En boucle";
$lang['playerStop'] = "Arrêter de jouer";
$lang['playerVolDown'] = "volume bas";
$lang['playerVolUp'] = "volume haut";
$lang['playerMute'] = "Basculer silence (mute)";
$lang['playerFilePlayed'] = "en lecture";
$lang['playerFileAdded'] = "ajouté à la playlist";
$lang['playerFileDeleted'] = "supprimé";


// Edition (classic, +spotify)
$lang['globalEdition'] = "Édition";
$lang['classic'] = "Classic edition (barebones)";
$lang['plusSpotify'] = "Plus edition (feat. Spotify integration)";

$lang['navEditionClassic'] = "Classic";
$lang['navEditionPlusSpotify'] = "+Spotify";

$lang['navBrand'] = "Phoniebox";
$lang['navHome'] = "Lecteur";
$lang['navSearch'] = "Recherche";
$lang['navSettings'] = "Paramètres";
$lang['navAudio'] = "Audio";
$lang['navInfo'] = "Info";
$lang['navShutdown'] = "Éteindre";
$lang['navReboot'] = "Redémarrer";

$lang['indexAvailAudio'] = "Médias disponibles";
$lang['indexContainsFiles'] = "Contient le(s) fichier(s) suivants :";
$lang['indexShowFiles'] = "Afficher les fichiers";
$lang['indexManageFilesChips'] = "Géstion des fichiers et des cartes";

$lang['Spotify'] = "Spotify";

/*
* Register & Edit Cards
*/
$lang['cardRegisterTitle'] = "Ajouter une carte";
$lang['cardEditTitle'] = "Editer ou ajouter une carte";
$lang['cardRegisterAnchorLink'] = "Enregistrement RFID Interactive";
$lang['cardRegisterMessageDefault'] = "La valeur de 'Dernière carte RFID' dans le formulaire est mise à jour en temps réel quand vous passez une carte RFID sur le lecteur.<br/>(Nécessite Javascript activé dans le navigateur)";
$lang['cardEditMessageDefault'] = "Les IDs de cartes utilisées dans ce système sont listées dans <a href='index.php' class='mainMenu'><i class='mdi mdi-home'></i> la page d'accueil</a>.";
$lang['cardRegisterMessageSwipeNew'] = "Glissez une autre carte, si vous voulez enregistrer d'autres cartes.";
$lang['cardEditMessageInputNew'] = "Entrez un autre ID de carte en choisissant dans la liste de la <a href='index.php' class='mainMenu'><i class='mdi mdi-home'></i> page d'accueil</a>.";
$lang['cardRegisterErrorTooMuch'] = "<p>C'est trop ! Merci de sélectionner seulement un dossier audio. Décidez-vous.</p>";
$lang['cardRegisterErrorStreamAndAudio'] = "<p>C'est trop ! Veuillez spécifier un stream ou sélectionner un dossier audio ou une commande système. Décidez-vous.</p>";
$lang['cardRegisterErrorStreamOrAudio'] = "<p>Il semble que vous n'ayez rien sélectionné ! Ajoutez une URL et un type de flux, sélectionnez un dossier ou une commande système. Ou 'Annuler' pour revenir à la page d'accueil";
$lang['cardRegisterErrorExistingAndNew'] = "<p>C'est trop ! Soit vous choisissez un dossier existant, soit vous en créez un nouveau.</p>";
$lang['cardRegisterErrorExistingFolder'] = "<p>Un dossier du même nom existe déjà ! Choisissez un autre dossier.</p>";
$lang['cardRegisterErrorSuggestFolder'] = "Un nom de dossier pour le flux doit être créé. J'ai fait une suggestion dans le formulaire ci-dessous";
$lang['cardRegisterStream2Card'] = "Le flux est lié à l'ID de la carte.";
$lang['cardRegisterFolder2Card'] = "Le dossier audio est maintenant lié à la carte.";
$lang['cardRegisterDownloadingYT'] = "<p>YouTube audio en téléchargement. Cela peut prendre quelques minutes. Vous pouvez consulter le fichier journal \"youtube-dl.log\" dans le dossier partagé. </p>";
$lang ["cardRegisterSwipeUpdates"] = "Ceci se mettra automatiquement à jour lorsque vous glisserez une carte RFID.";
$lang['cardRegisterManualLinks'] = "<p>Vous pouvez également connecter les cartes aux dossiers manuellement. Le manuel explique comment <a href='https://github.com/MiczFlor/RPi-Jukebox-RFID/wiki/MANUAL#connecting-to-the-phoniebox-to-add-files' target='_blank'>se connecter à la phoniebox</a> et <a href='https://github.com/MiczFlor/RPi-Jukebox-RFID/wiki/MANUAL#registering-cards-manually-through-samba-without-the-web-app' target='_blank'>enregister les cartes</a>.</p>" ;
$lang['cardRegisterTriggerSuccess'] = "La carte est maintenant liée pour déclencher la commande :";

/*
* Formulaire d'édition de carte
*/
$lang ['cardFormFolderLegend'] = "Lier RFID à :";
$lang['cardFormFolderLabel'] = "Lier la carte à un dossier audio existant" ;
$lang['cardFormFolderSelectDefault'] = "Aucun (cliquer pour sélectionner un dossier)" ;
$lang['cardFormFolderHelp'] = "Contient des fichiers locaux ou ajoute du contenu YouTube (préciser ci-dessous)." ;
$lang['cardFormNewFolderLabel'] = "... ou lier un nouveau dossier" ;
$lang['cardFormNewFolderHelp'] = "Toujours utiliser un nouveau dossier pour les flux (voir ci-dessous) et éventuellement pour YouTube." ;
$lang['cardFormNewFolderPlaceholder'] = "par exemple 'Nom de l'artiste/Album'" ;
$lang['cardFormTriggerLegend'] = "Déclencher une commande système" ;
$lang['cardFormTriggerLabel'] = "... ou lien vers une commande système" ;
$lang['cardFormTriggerHelp'] = "Sélectionner les commandes système (comme 'pause', 'volume haut', 'arrêt') dans la liste des commandes disponibles. Si une carte RFID est déjà liée à une fonction, l'ID est affiché dans le menu déroulant" ;
$lang['cardFormTriggerSelectDefault'] = "Sélectionner la commande à lier" ;

$lang['cardFormStreamLegend'] = "Lien du flux" ;
$lang['cardFormStreamLabel'] = "Stream URL (nécessite toujours un nouveau dossier ci-dessus)" ;
$lang['cardFormStreamPlaceholderClassic'] = "http(...).mp3 / .m3u / .ogg / .rss / .xml / ..." ;
$lang['cardFormStreamPlaceholderPlusSpotify'] = "spotify:album/artist/playlist/track:### / Stream/Podcast comme http....mp3 .xml .rss .ogg" ;
$lang['cardFormStreamHelp'] = "Ajouter l'URL de spotify, podcast, web radio, stream ou autre média en ligne" ;
$lang['cardFormStreamTypeSelectDefault'] = "Sélectionner le type" ;
$lang['cardFormStreamTypeHelp'] = "Sélectionnez le type que vous ajoutez" ;

$lang['cardFormYTLegend'] = "Téléchargement YouTube" ;
$lang['cardFormYTLabel'] = "URL YouTube (clip unique ou playlist)" ;
$lang['cardFormYTPlaceholder'] = "par exemple https://www.youtube.com/watch?v=7GI0VdPehQI" ;
$lang['cardFormYTSelectDefault'] = "Cliquer pour sélectionner un dossier ou créer un nouveau ci-dessous" ;
$lang['cardFormYTHelp'] = "URL YouTube de la vidéo ou de la playlist. Sera téléchargé dans le dossier spécifié ci-dessus ou dans le nouveau dossier si spécifié" ;
$lang['cardFormRemoveCard'] = "Supprimer l'ID de la carte" ;

// Exporter les ID de carte sous forme de fichier .csv
$lang['cardExportAnchorLink'] = "Exporter tous les liens RFID (lecture audio et commandes)" ;
$lang['cardExportButtonLink'] = "Créer un fichier .csv des liens RFID disponibles" ;

// Importation de cartes d'identité sous forme de fichier .csv
$lang['cardImportAnchorLink'] = "Importer des liens RFID à partir d'un fichier .csv" ;
$lang['cardImportFileLabel'] = "Sélectionner le fichier .csv pour créer des liens RFID" ;
$lang['cardImportFileSuccessUpload'] = "Téléchargement réussi du fichier : " ;
$lang['cardImportFileErrorUpload'] = "<p>Il y a eu une erreur lors du téléchargement du fichier, veuillez réessayer !</p>";
$lang['cardImportFileErrorFiletype'] = "<p>Type de fichier erroné ! Le fichier doit être un <em>.csv</em>.</p>" ;
$lang['cardImportFormOverwriteLabel'] = "Sélectionner l'action d'importation" ;
$lang['cardImportFormOverwriteHelp'] = "Spécifier ce qu'il faut faire avec les liens RFID téléchargés" ;
$lang['cardImportFormOverwriteAll'] = "Écraser les deux : audio ET commandes" ;
$lang['cardImportFormOverwriteAudio'] = "Écraser SEULEMENT les déclencheurs audio" ;
$lang['cardImportFormOverwriteCommands'] = "Écraser SEULEMENT les commandes système" ;
$lang['cardImportFileOverwriteMessageCommands'] = "<p><i class='mdi mdi-check'></i> Les <strong>commandes système</strong> ont été écrasées par les IDs RFID téléchargés.</p>" ;
$lang['cardImportFileOverwriteMessageAudio'] = "<p><i class='mdi mdi-check'></i> Les liens vers les playlists <strong>audio</strong> etc. ont été écrasés par les IDs RFID téléchargés.</p>" ;
$lang['cardImportFormDeleteLabel'] = "Supprimer ou conserver d'autres liens RFID ?";
$lang['cardImportFormDeleteNone'] = "Conserver tous les liens existants : audio ET commandes" ;
$lang['cardImportFormDeleteAll'] = "Supprimer les deux : audio ET commandes" ;
$lang['cardImportFormDeleteAudio'] = "Supprimer SEULEMENT les déclencheurs audio" ;
$lang['cardImportFormDeleteCommands'] = "Supprimer SEULEMENT les commandes système" ;
$lang['cardImportFormDeleteHelp'] = "Quels liens RFID existants doivent être conservés, lesquels doivent être supprimés ?";
$lang['cardImportFileDeleteMessageCommands'] = "<p><i class='mdi mdi-delete'></i> <strong>Commandes système</strong> supprimées.</p>" ;
$lang['cardImportFileDeleteMessageAudio'] = "<p><i class='mdi mdi-delete'></i> <strong>Liens Audio</strong> supprimés.</p>" ;

/*
* Formulaire d'édition des pistes
*/
$lang ['trackEditTitle'] = "Gestion des pistes" ;
$lang['trackEditInformation'] = "Informations de la piste" ;
$lang['trackEditMove'] = "Déplacer la piste" ;
$lang['trackEditMoveSelectLabel'] = "Sélectionner un nouveau dossier" ;
$lang['trackEditMoveSelectDefault'] = "Ne pas déplacer le fichier" ;
$lang['trackEditDelete'] = "Effacer la piste" ;
$lang['trackEditDeleteLabel'] = "Vous êtes sûr de vouloir supprimer ?";
$lang['trackEditDeleteHelp'] = "Il n'y a pas d'annulation pour les fichiers supprimés. Ils auront disparu ! Vous êtes sûr ?";
$lang['trackEditDeleteNo'] = "Ne supprimez PAS cette piste" ;
$lang['trackEditDeleteYes'] = "Oui, SUPPRIMER cette piste" ;

/*
* Paramètres
*/
$lang [settingsVolChangePercent] = "Vol. Change %" ;
$lang['settingsMaxVol'] = "Volume Maximum" ;
$lang['settingsStartupVol'] = "Volume au démarrage" ;
$lang['settingsWifiRestart'] = "Les modifications appliquées à votre connexion WiFi nécessitent un redémarrage pour être effectives" ;
$lang['settingsWifiSsidPlaceholder'] = "par ex. : PhonieHomie" ;
$lang['settingsWifiSsidHelp'] = "Le nom sous lequel votre WiFi apparaît comme 'réseau disponible'" ;
$lang['settingsWifiPassHelp'] = "Le mot de passe de votre WiFi (8 caractères au moins)" ;
$lang['settingsWifiPrioHelp'] = "La priorité de votre WiFi (0-100). Si plus d'un WiFi est trouvé, la boîte se connectera à celui qui a la priorité la plus élevée" ;
$lang['settingsSecondSwipe'] = "Second Swipe" ;
$lang['settingsSecondSwipeInfo'] = "Que se passe-t-il lorsque vous faites passer le même code RFID une deuxième fois ? Redémarrer la playlist ? Basculer pause et lecture ?";
$lang['settingsSecondSwipeRestart'] = "Redémarrer la playlist" ;
$lang['settingsSecondSwipeSkipnext'] = "Passer à la piste suivante" ;
$lang['settingsSecondSwipePause'] = "Basculer entre pause et lecture" ;
$lang['settingsSecondSwipePlay'] = "Reprendre la lecture" ;
$lang['settingsSecondSwipeNoAudioPlay'] = "Ignorer les déclencheurs de lecture audio, uniquement les commandes système" ;
$lang['settingsSecondSwipePauseInfo'] = "Ignorer le reswipe de la même carte pour :";
$lang['second'] = "seconde" ;
$lang['seconds'] = "secondes" ;
$lang['settingsSecondSwipePauseControlsInfo'] = "Certaines cartes de fonction (par exemple, volume haut / bas, piste suivante / précédente, avance / retour) ne doivent pas avoir de délai (comme défini dans le réglage précédemment) :";
$lang['settingsSecondSwipePauseControlsOn'] = "Cartes de fonction sans délai" ;
$lang['settingsSecondSwipePauseControlsOff'] = "Cartes de fonction avec retard (secondes comme précédemment)" ;
$lang['settingsWebInterface'] = "Interface Web" ;
$lang['settingsCoverInfo'] = "Voulez-vous afficher les couvertures à côté des albums et des listes de lecture sur la page principale ?";
$lang['settingsShowCoverON'] = "Afficher la couverture" ;
$lang['settingsShowCoverOFF'] = "Ne pas montrer la couverture" ;
$lang['settingsMessageLangfileNewItems'] = "Il y a de nouveaux éléments de langue dans le fichier original <em>lang-fr-UK.php</em>. Votre fichier de langue a été mis à jour et contient maintenant ces éléments (en anglais). Vous pouvez mettre à jour votre fichier de langue et enregistrer vos modifications dans le code de la Phoniebox :)" ;
$lang['settingsWlanSendNav'] = "Mail Wlan IP" ;
$lang['settingsWlanSendInfo'] = "Envoyer l'IP Wlan par email au démarrage ? (utile si vous connectez votre Phoniebox à un nouveau réseau Wlan avec une IP dynamique)" ;
$lang['settingsWlanSendQuest'] = "Envoyer l'IP Wlan ?";
$lang['settingsWlanSendEmail'] = "Addr. email.";
$lang['settingsWlanSendON'] = "Oui, envoyer l'email." ;
$lang['settingsWlanSendOFF'] = "Non, ne pas envoyer d'email." ;

$lang['settingsVolumeManager'] = "Sélectionner le gestionnaire de volume" ;

$lang['settingsWlanReadNav'] = "Lire l'IP Wlan" ;
$lang['settingsWlanReadInfo'] = "Lire l'adresse IP du Wlan (wifi) à chaque fois après le démarrage ? (utile si vous connectez votre Phoniebox à un nouveau réseau wlan avec une adresse IP dynamique)" ;
$lang['settingsWlanReadQuest'] = "Lire l'adresse IP du wlan ?";
$lang['settingsWlanReadON'] = "Oui, lire l'IP du wlan." ;
$lang['settingsWlanReadOFF'] = "Non, ne pas lire l'IP du wlan." ;


/*
* System info
*/
$lang['infoOsDistrib'] = "Distribution OS";
$lang['infoOsCodename'] = "Nom de code";
$lang['infoOsTemperature'] = "Température";
$lang['infoOsThrottle'] = "Accélération";
$lang['infoStorageUsed'] = "Utilisation du stockage";
$lang['infoMopidyStatus'] = "Statut du serveur Mopidy";
$lang['infoMPDStatus'] = "Statut du serveur MPD";
$lang['infoDebugLogTail'] = "<b>Fichier de DEBUG log</b>: Dernières 40 lignes";
$lang['infoDebugLogClear'] = "Effacer tout le contenu du fichier debug.log" ;
$lang['infoDebugLogSettings'] = "Paramètres du journal de débogage" ;

/*
* Gestion des dossiers et téléchargement de fichiers
*/
$lang['manageFilesFoldersTitle'] = "Dossiers &amp; Fichiers" ;
$lang['manageFilesFoldersUploadFilesLabel'] = "Sélectionnez les fichiers de votre disque" ;
$lang['manageFilesFoldersUploadLegend'] = "Uploadez des fichiers" ;
$lang['manageFilesFoldersUploadLabel'] = "Sélectionner et/ou créer un nouveau dossier" ;
$lang['manageFilesFoldersUploadFolderHelp'] = "Si vous sélectionnez ET nommez un nouveau dossier, le nouveau dossier sera créé à l'intérieur du dossier sélectionné" ;
$lang['manageFilesFoldersNewFolderTitle'] = "Créer un nouveau dossier" ;
$lang['manageFilesFoldersNewFolderPositionLegend'] = "Position du dossier" ;
$lang['manageFilesFoldersNewFolderPositionDefault'] = "Le nouveau dossier sera au niveau de la racine ou à l'intérieur (choisir ci-dessous)" ;
$lang['manageFilesFoldersErrorNewFolderName'] = "<p>Pas de nom de dossier valide donné.</p>" ;
$lang['manageFilesFoldersErrorNewFolder'] = "<p>Pas de dossier sélectionné ni de nouveau dossier valide indiqué.</p>" ;
$lang['manageFilesFoldersErrorNoNewFolder'] = "<p>Aucun dossier sélectionné ni aucun nouveau dossier valide spécifié.</p>" ;
$lang['manageFilesFoldersErrorNewFolderExists'] = "<p>Un dossier de ce nom existe déjà. Soyez original, tapez un nouveau nom.</p>" ;
$lang['manageFilesFoldersErrorNewFolderNotParent'] = "<p>Le dossier parent n'existe pas.</p>" ;
$lang['manageFilesFoldersSuccessNewFolder'] = "Nouveau dossier créé : " ;
$lang['manageFilesFoldersSelectDefault'] = "Sélectionner un dossier et/ou créer un nouveau dossier enfant en dessous" ;

$lang['manageFilesFoldersRenewDB'] = "Renouveler la base de données" ;
$lang['manageFilesFoldersLocalScan'] = "Scanner la Bibliothèque de Musiques" ;
$lang['manageFilesFoldersRenewDBinfo'] = "Veuillez scanner votre bibliothèque musicale après avoir téléchargé de nouveaux fichiers ou déplacé des dossiers. Le scan n'est pas nécessaire pour écouter de la musique, mais il est nécessaire pour voir les informations sur les pistes dans l'interface utilisateur Web. Seuls les nouveaux fichiers ou les dossiers déplacés seront scannés. Pendant que le balayage est en cours, le mopidy sera arrêté. Une fois l'analyse terminée, le mopidy démarre automatiquement. Vous pouvez voir l'état du serveur dans la section Info" ;

/*
* Recherche de fichiers
*/
$lang['searchTitle'] = "Recherche de fichiers audio";
$lang['searchExample'] = "par ex. Moonlight";
$lang['searchSend'] = "Recherche";
$lang['searchResult'] = "Résultats de la recherche :";

/*
* Filter
*/
$lang['filterall'] = "Tout voir";
$lang['filterfile'] = "Fichiers";
$lang['filterlivestream'] = "Livestream";
$lang['filterpodcast'] = "Podcast";
$lang['filterspotify'] = "Spotify";
$lang['filteryoutube'] = "YouTube";
?>
