# TS Group Assigner

Aufgrund einer Anfrage habe ich diesen Group Assigner mal programmiert und seit 2016 liegt der nun auf meiner Festplatte rum, weshalb ich ihn auf Github veröffentliche.
Damit andere was damit anfangen können.

Der Gruppenzuweiser funktioniert auf der Basis vom [TeamSpeak 3 PHP Framework](https://github.com/planetteamspeak/ts3phpframework)

## Funktionen
- Einfache Einbindung in vorhandene Webseite
- Zuweisung einzelner Gruppen
- Automatischer Abruf der Servergruppen Namen
- Klein gehaltene conf.php

# Erklärung der conf.php
```$ip = "";``` Teamspeak Server IP

```$port = "";``` Teamspeak Server Port (nicht zu verwechseln mit Teamspeak Query Port)

```$username = ""; ``` Teamspeak Query Benutzername 

```$password = "";``` Teamspeak Query Passwort

```$queryport = "";``` Teamspeak Query Port

```$tsname = urlencode("");``` Teamspeak Benutzername (mit welchem er im Teamspeak auftritt)

```$groups = array("0","1");``` Server Gruppen IDs welche zur Vergabe bestimmt sind (und im Auswahlmenü angezeigt werden)
 
```$disallowed = array("1","2");``` Server Gruppen IDs welche nicht zur Vergabe bestimmt sind (Vorbeugung von POST Manipulation)

#Information zur Weiterentwicklung
Der Teamspeak Gruppenzuweiser wurde seit 2016 nicht mehr weiterentwickelt, deshalb besteht keine Sicherheit das dieses Skript zu 100% sicher ist.
Fehler können gerne via Issues gemeldet werden, und ich versuche jegliche Fehler zu beheben. Allerdings wird es keine Funktionsupdates zu diesem Skript mehr geben.
