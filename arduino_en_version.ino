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
    client.println("GET /PHP_en/translations.txt HTTP/1.1"); //download text
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
    char c = client.read(); //gets byte from ethernet buffer
    Serial.print(c); //prints raw feed for testing
    if (c==lf) x=(x+1); //counting line feeds
    else if (x==12) readString += c; //building readString
   } 
if(readString=="Turn on light"){
  digitalWrite(led, HIGH); 
  }else if(readString=="Turn off light"){
  digitalWrite(led, LOW);  
    }
    else{
 Serial.println("Unsupported string/variable. Cannot do action. Please repeat your request on site.");
 }
  readString = ("");
  x=0;
  client.stop(); //stop client
  delay(5000);
} 

