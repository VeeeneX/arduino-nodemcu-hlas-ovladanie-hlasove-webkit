// Author: Martin Chlebovec alias: martinius96
// Donate: https://www.paypal.me/Chlebovec 
// Personal website: https://arduino.php5.sk
// Email contact: martinius96@gmail.com
// Facebook contact: 100001242570317
// Use under LICENSE 
#include <ESP8266WiFi.h> //Arduino Core library
#include <WiFiClientSecure.h> //Library Secure library for HTTPS connections (TLS) 
const int led = 16; //pin D0 on NodeMCU board
const char* ssid = "wifiname"; //wifi SSID name
const char* password = "wifipassword"; //Wifi Password
const char* host = "mywebsite.com"; //without https and www
const int httpsPort = 443; //HTTPS port
const char* fingerprint = "18 9f 6 1d b1 85 be e6 bd 73 c1 8d 04 63 58 99 f2 32 43 92"; // SHA1 fingerprint HTTPS of webserver
void setup() {
 Serial.begin(115200); //serial read speed
 Serial.println();
 pinMode(led, OUTPUT);
 Serial.print("Connecting to wifi spot: ");
 Serial.println(ssid);
 WiFi.begin(ssid, password);
 while (WiFi.status() != WL_CONNECTED) {
 delay(500);
 Serial.print(".");
 }
 Serial.println("");
 Serial.println("WiFi connected");
 Serial.println("IP address: ");
 Serial.println(WiFi.localIP()); //Print IP address that NodeMCU get from DHCP server
}
void loop() {
 WiFiClientSecure client;
 Serial.print("Connecting to ");
 Serial.println(host);
 if (!client.connect(host, httpsPort)) {
 Serial.println("connection refused/unsucess");
 return;
 }
 if (client.verify(fingerprint, host)) {
 Serial.println("certificate matches");
 } else {
 Serial.println("certifficate didnt match");
 }
String url = "/PHP/translations.txt"; //connect to that url of your webpage, link after host.
 Serial.print("Request to address: ");
 Serial.println(url);
 client.print(String("GET ") + url + " HTTP/1.1\r\n" +
 "Host: " + host + "\r\n" +
 "User-Agent: NodeMCU\r\n" +
 "Connection: close\r\n\r\n");
 Serial.println("Request taken");
 while (client.connected()) {
 String line = client.readStringUntil('\n');

 if (line == "\r") {
 Serial.println("Response accepted");
 break;
 }
 }
 String line = client.readStringUntil('\n');
 Serial.println("Response variable: ");
 Serial.println("==========");
 Serial.println(line);
 if(line=="Turn on light"){ //if variable is Turn on light turn on LED! (light)
 digitalWrite(led, HIGH);
 }else if(line=="Turn off light"){
 digitalWrite(led, LOW);
 }else{
 Serial.println("Unsupported string/variable. Cannot do action. Please repeat your request on site.");
 }
 }
