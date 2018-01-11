// Author: Martin Chlebovec alias: martinius96
// Support: https://www.paypal.me/Chlebovec
// Personal web: https://arduino.php5.sk
// Email contact: martinius96@gmail.com
// Facebook contact: 100001242570317
// Use under license!
#include <ESP8266WiFi.h> //library included in Arduino core, tested under 2.3.0
#include <WiFiClientSecure.h> //library included in Arduino core, tested under 2.3.0 for HTTPS connections
const int led = 16; //GPIO 16 = D0 on NodeMCU board
const char* ssid = "wifi ssid";
const char* password = "password";
const char* host = "arduino.php5.sk"; //without https and www
const int httpsPort = 443; //https port
const char* fingerprint = "13 9f 87 1d b1 85 be e6 bd 73 c1 8d 04 63 58 99 f0 32 43 92"; // SHA1 fingerprint
void setup() {
 Serial.begin(115200);
 Serial.println();
 pinMode(led, OUTPUT);
 Serial.print("connecting to wifi network: ");
 Serial.println(ssid);
 WiFi.begin(ssid, password);
 while (WiFi.status() != WL_CONNECTED) {
 delay(500);
 Serial.print(".");
 }
 Serial.println("");
 Serial.println("WiFi connected sucesfully");
 Serial.println("IP address: ");
 Serial.println(WiFi.localIP());
}
void loop() {
 WiFiClientSecure client; //function for HTTPS connections
 Serial.print("connecting to webserver ");
 Serial.println(host);
 if (!client.connect(host, httpsPort)) {
 Serial.println("connection was not successful");
 return;
 }
 if (client.verify(fingerprint, host)) {
 Serial.println("certificate match");
 } else {
 Serial.println("certificate didnt match");
 }
String url = "/PHP_en/translations.txt";
 Serial.print("request to address: ");
 Serial.println(url);
 client.print(String("GET ") + url + " HTTP/1.1\r\n" +
 "Host: " + host + "\r\n" +
 "User-Agent: NodeMCU\r\n" +
 "Connection: close\r\n\r\n");
 Serial.println("request sent");
 while (client.connected()) {
 String line = client.readStringUntil('\n');

 if (line == "\r") {
 Serial.println("Response from webserver");
 break;
 }
 }
 String line = client.readStringUntil('\n');
 Serial.println("Our variable from .txt file: ");
 Serial.println(line);
 if(line=="Turn on"){ //turn on output (relay or LED)
 digitalWrite(led, HIGH);
 }
 else if(line=="Turn off"){ //turn off output (relay or LED)
 digitalWrite(led, LOW);
 }else{
 Serial.println("Unsupported command! Try again online change your voice/text command.");
 }
}
