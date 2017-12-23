# Ovládanie hlasom 
Projekt je zameraný ako ukážkové demo pre ovládanie hlasom pre akýkoľvek mikrokontróler, mikroprocesor, mikropočítač, ktorý vieme napojiť do internetu. Priamo v projekte je aj vzorový kód pre NodeMCU. Riešenie bolo testované pod PHP 5.6, 7.0 a s mikrokontrolérom NodeMCU v3 Lolin. Celé riešenie má výlučne výukový charakter, nejedná sa o profi riešenie. Riešenie nie je možné použiť na firemné (priemyselné) účely!
# Príkazy v SK jazyku
* 1 vyslovujte ako jeden alebo jedna
* možné použiť pre 1-4
* Zapni LED 1
* Zapnúť LED 1 
* Vypnúť LED 1
* Vypni LED 1
* Zapni všetko
* Vypni  všetko
* Zapnúť všetko
* Vypnúť všetko
# Príkazy v SK jazyku
* 1 vyslovujte ako jeden alebo jedna
* možné použiť pre 1-4
* Zapni LED 1
* Zapnout LED 1 
* Vypnout LED 1
* Vypni LED 1
* Zapni všechno
* Vypni všechno
* Zapnout všechno
* Vypnout všechno
* funguje i všechno nahradené s vše

# Technológie v projekte
* jazyk PHP, C, AJAX, Javascript, Webkit, Wiring (pre NodeMCU)
![alt text](http://www.veramate.com/Content/images/VeraMate/voice-control.png)

# Projekt v repozitári je rozdelený na 2 časti
* Časť NodeMCU - .ino súbor + .h knižnice
* Časť servera - PHP, img, AJAX, Webkit

# Pre správne fungovanie budete potrebovať
* Webserver s HTTPS protokolom
* Prehliadač Chrome
* Pripojenie k internetu
* NodeMCU flashnutú na ArduinoIDE (Arduino Core)

# Zmena jazyka 
* Zložka PHP index.php --> recognition.lang
* Slovenčina: recognition.lang = "sk-SK";
* Čeština:  recognition.lang = "cs-CZ";
* Angličtina: recognition.lang = "en-US";

# TIP
* Server php5.sk ponúka freehosting na doméne 3. radu s HTTPS protokolom - na toto riešenie sa výborne hodí
* Projekt sa dá ľahko vložiť aj do projektov inteligetnej domácnosti atď.
* Spoločne s web časťou môžete riešenie využiť aj pre iné procesory, mikropočítače

# PODPORA A KONTAKT
* Ak ma chcete podporiť/kontaktovať, navštívte moju stránku: https://arduino.php5.sk
