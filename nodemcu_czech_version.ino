#include <ESP8266WiFi.h> //kniznica importovana v Arduine core, testovana verzia 2.3.0
#include <WiFiClientSecure.h> //kniznica importovana v Arduine core, testovana verzia 2.3.0
const int led1 = 16;
const int led2 = 5;
const int led3 = 4;
const int led4 = 0;
const char* ssid = "wifimeno";
const char* password = "heslo";
const char* host = "vasastranka.sk"; //bez https a www
const int httpsPort = 443;
const char* fingerprint = "13 9f 87 1d b1 85 be e6 bd 73 c1 8d 04 63 58 99 f0 32 43 92"; // odtlacok certifikatu SHA1
void setup() {
 Serial.begin(115200);
 Serial.println();
 pinMode(led1, OUTPUT);
 pinMode(led2, OUTPUT);
 pinMode(led3, OUTPUT);
 pinMode(led4, OUTPUT);
 Serial.print("pripajam na ");
 Serial.println(ssid);
 WiFi.begin(ssid, password);
 while (WiFi.status() != WL_CONNECTED) {
 delay(500);
 Serial.print(".");
 }
 Serial.println("");
 Serial.println("WiFi pripojene");
 Serial.println("IP adresa: ");
 Serial.println(WiFi.localIP());
}
void loop() {
 WiFiClientSecure client;
 Serial.print("pripajam sa na ");
 Serial.println(host);
 if (!client.connect(host, httpsPort)) {
 Serial.println("pripojenie neuspesne");
 return;
 }
 if (client.verify(fingerprint, host)) {
 Serial.println("certifikat zhodny");
 } else {
 Serial.println("certifikat nezhodny");
 }
String url = "/preklady.txt";
 Serial.print("poziadavka na adresu: ");
 Serial.println(url);
 client.print(String("GET ") + url + " HTTP/1.1\r\n" +
 "Host: " + host + "\r\n" +
 "User-Agent: NodeMCU\r\n" +
 "Connection: close\r\n\r\n");
 Serial.println("poziadavka vykonana");
 while (client.connected()) {
 String line = client.readStringUntil('\n');

 if (line == "\r") {
 Serial.println("Response prijata");
 break;
 }
 }
 String line = client.readStringUntil('\n');
 Serial.println("Vratena premenna: ");
 Serial.println("==========");
 Serial.println(line);
 if(line=="Zapni LED 1"){
 digitalWrite(led1, HIGH);
 }
 if(line=="Vypni LED 1"){
 digitalWrite(led1, LOW);
 }
 if(line=="Zapni LED 2"){
 digitalWrite(led2, HIGH);
 }
 if(line=="Vypni LED 2"){
 digitalWrite(led2, LOW);
 }
 if(line=="Zapni LED 3"){
 digitalWrite(led3, HIGH);
 }
 if(line=="Vypni LED 3"){
 digitalWrite(led3, LOW);
 }
 if(line=="Zapni LED 4"){
 digitalWrite(led4, HIGH);
 }
 if(line=="Vypni LED 4"){
 digitalWrite(led4, LOW);
 }
 if(line=="Vypni"){

 digitalWrite(led1, LOW);
 digitalWrite(led2, LOW);
 digitalWrite(led3, LOW);
 digitalWrite(led4, LOW);
 }
 if(line=="Zapni"){

 digitalWrite(led1, HIGH);
 digitalWrite(led2, HIGH);
 digitalWrite(led3, HIGH);
 digitalWrite(led4, HIGH);
 }
