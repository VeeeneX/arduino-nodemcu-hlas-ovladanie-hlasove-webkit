#include <SPI.h>
#include <Ethernet.h>
int led = 6;
byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED }; //physical mac address
char serverName[] = "www.mywebsite.com"; // zoomkat's test web page server
IPAddress ip(192, 168, 2, 40);
EthernetClient client;
String readString;
int x=0; //for counting line feeds
char lf=10; //line feed character
void setup(){
pinMode(led, OUTPUT);
 if (Ethernet.begin(mac) == 0) {
    Serial.println("Failed to configure Ethernet using DHCP");
    Ethernet.begin(mac, ip);
  }
  Serial.begin(9600); 
}
void loop(){
if (client.connect(serverName, 80)) {  //starts client connection, checks for connection
    Serial.println("connected");
    client.println("GET /PHP_sk/preklady.txt HTTP/1.1"); //download text
    client.println("Host: www.mywebsite.com");
    client.println("Connection: close");  //close 1.1 persistent connection  
    client.println(); //end of get request
  } 
  else {
    Serial.println("connection failed"); //error message if no client connect
    Serial.println();
  }
  while(client.connected() && !client.available()) delay(1); //waits for data
  while (client.connected() || client.available()) { //connected or data available
    char c = client.read(); //citaj bity z bufferu
    Serial.print(c); //raw feed z webu vratane hlavicky
    if (c==lf) x=(x+1); //pocitaj riadky
    else if (x==12) readString += c; //zostav readstring
   } 
if(readString=="Zapni LED 1"){
 digitalWrite(led1, HIGH);
 }
 if(readString=="Vypni LED 1"){
 digitalWrite(led1, LOW);
 }
 if(readString=="Zapni LED 2"){
 digitalWrite(led2, HIGH);
 }
 if(readString=="Vypni LED 2"){
 digitalWrite(led2, LOW);
 }
 if(readString=="Zapni LED 3"){
 digitalWrite(led3, HIGH);
 }
 if(readString=="Vypni LED 3"){
 digitalWrite(led3, LOW);
 }
 if(readString=="Zapni LED 4"){
 digitalWrite(led4, HIGH);
 }
 if(readString=="Vypni LED 4"){
 digitalWrite(led4, LOW);
 }
 if(readString=="Vypni"){

 digitalWrite(led1, LOW);
 digitalWrite(led2, LOW);
 digitalWrite(led3, LOW);
 digitalWrite(led4, LOW);
 }
 if(readString=="Zapni"){

 digitalWrite(led1, HIGH);
 digitalWrite(led2, HIGH);
 digitalWrite(led3, HIGH);
 digitalWrite(led4, HIGH);
 }
  readString = ("");
  x=0;
  client.stop(); //ukonc spojenie
  delay(5000);
} 

