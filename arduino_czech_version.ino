// nepouzivajte piny 4, 11, 12, 13
#include <SPI.h> //knižnica pre SPI pripojenie, ktore Ethernet shield využiva
#include <Ethernet.h>
const int led1 = 5;
const int led2 = 6;
const int led3 = 7;
const int led4 = 8;
byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED }; //MAC adresa zariadenia, 0x nemenit
char serverName[] = "www.mywebsite.com"; // webstranka, kam sa zariadenie pripaja (HTTP only)
IPAddress ip(192, 168, 2, 40); //IP adresa vramci lokalnej siete
EthernetClient client; //klient rezim pre Ethernet shield
String readString; //premenna, ktoru budeme citat
int x=0; //pocitadlo riadkov
char lf=10; //line feed
void setup(){
 pinMode(led1, OUTPUT);
 pinMode(led2, OUTPUT);
 pinMode(led3, OUTPUT);
 pinMode(led4, OUTPUT);
 if (Ethernet.begin(mac) == 0) {
    Serial.println("Nepodarilo sa nakonfigurovat po DHCP");
    Ethernet.begin(mac, ip); //skusime s nasou IP
  }
  Serial.begin(9600); 
}
void loop(){
if (client.connect(serverName, 80)) { //Arduino vyskusa pripojenie, ak je uspesne, pokracuje
    Serial.println("Pripojene");
    client.println("GET /PHP_cz/preklady.txt HTTP/1.1"); //stiahni text zo suboru
    client.println("Host: www.mywebsite.com"); //host --> rovnako ako v serverName
    client.println("Connection: close");  //ukonc pripojenie
    client.println(); //koniec requestu
  } 
  else {
    Serial.println("Pripojenie neuspesne"); //Chybova hlaska o neuspesnom pripojeni na webserver
    Serial.println();
  }
  while(client.connected() && !client.available()) delay(1); //pockaj na data 1ms
  while (client.connected() || client.available()) { //ak sme pripojeny, a klient je dostupny (vieme s nim pracovat)
    char c = client.read(); //citaj bity z bufferu
    Serial.print(c); //raw feed z webu vratane hlavicky
    if (c==lf) x=(x+1); //pocitaj riadky
    else if (x==12) readString += c; //zostav readstring
   } 
if(readString=="Zapni LED 1"){
 digitalWrite(led1, HIGH);
 }
 else if(readString=="Vypni LED 1"){
 digitalWrite(led1, LOW);
 }
 else if(readString=="Zapni LED 2"){
 digitalWrite(led2, HIGH);
 }
 else if(readString=="Vypni LED 2"){
 digitalWrite(led2, LOW);
 }
 else if(readString=="Zapni LED 3"){
 digitalWrite(led3, HIGH);
 }
 else if(readString=="Vypni LED 3"){
 digitalWrite(led3, LOW);
 }
 else if(readString=="Zapni LED 4"){
 digitalWrite(led4, HIGH);
 }
 else if(readString=="Vypni LED 4"){
 digitalWrite(led4, LOW);
 }
 else if(readString=="Vypni"){

 digitalWrite(led1, LOW);
 digitalWrite(led2, LOW);
 digitalWrite(led3, LOW);
 digitalWrite(led4, LOW);
 }
 else if(readString=="Zapni"){
 digitalWrite(led1, HIGH);
 digitalWrite(led2, HIGH);
 digitalWrite(led3, HIGH);
 digitalWrite(led4, HIGH);
 }
 else{
 Serial.println("Neplatny retazec pre podmienky hlasoveho ovladania."); //hlaska o neidentifikovanom retazci
Serial.println(readString); //vypiseme retazec
 }
  readString = ("");
  x=0;
  client.stop(); //ukonc spojenie
  delay(5000); //opakuj slucku loop po piatich sekundach
} 
