#include "WiFi.h" // ESP32 WiFi include
#include <FastLED.h>
#include <Arduino.h>
#include <analogWrite.h>

const char* ssid     = "jakku";
const char* password = "kamasutra";

const char* host = "192.168.90.33";
String url = "/cle3_interactive_design_webapp/backend/color.php";

#if defined(FASTLED_VERSION) && (FASTLED_VERSION < 3001000)
#warning "Requires FastLED 3.1 or later; check github for latest code."
#endif

#define DATA_PIN    13
//#define CLK_PIN   4
#define LED_TYPE    WS2812
#define COLOR_ORDER RGB
#define NUM_LEDS    15
CRGB leds[NUM_LEDS];

#define BRIGHTNESS          96
#define FRAMES_PER_SECOND  120

// ports of your RGB led
//int rpin = A6;
//int gpin = A11;
//int bpin = A12;

// if anode rgb led, connect long pin to 3V and reverse r,g,b values
// if cathode rgb led, connect long pin to GND
//bool anode = false;

//int valueR = 0;
//int valueG = 0;
//int valueB = 0;

void setup() {
//  pinMode(rpin, OUTPUT);
//  pinMode(gpin, OUTPUT);
//  pinMode(bpin, OUTPUT);
  FastLED.addLeds<WS2812, DATA_PIN, GRB>(leds, NUM_LEDS);
  FastLED.setBrightness(BRIGHTNESS);

  Serial.begin(115200);
  delay(100);

  // We start by connecting to a WiFi network

  Serial.println();
  Serial.println();
  Serial.print("Connecting to ");
  Serial.println(ssid);

  WiFi.begin(ssid, password);

  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  Serial.print("WiFi connected. IP address: ");
  Serial.println(WiFi.localIP());
}

void loop() {
  FastLED.show();  
  FastLED.delay(1000/FRAMES_PER_SECOND); 
  
  delay(3000); // wait n seconds before calling url again

  Serial.print("connecting to ");
  Serial.println(host);

  // Use WiFiClient class to create TCP connections
  WiFiClient client;
  const int httpPort = 80;
  if (!client.connect(host, httpPort)) {
    Serial.println("connection failed");
    return;
  }

  // We now create a URI for the request
  Serial.print("Requesting URL: ");
  Serial.println(url);

  // This will send the request to the server
  client.print(String("GET ") + url + " HTTP/1.1\r\n" +
               "Host: " + host + "\r\n" +
               "Connection: close\r\n\r\n");
  delay(500);

  // Read all the lines of the reply from server and print them to Serial
  String line = "";
  while (client.available()) {
    line = client.readStringUntil('\r');
    // comment out the next line to get less debug information
//    Serial.print(line);
  }

  Serial.println("closing connection.. total value is:");
  Serial.println(line);
  updateRGBLed(line);
}

// Verwijder spaties en return characters (/r /n) uit RGB string
void updateRGBLed(String webColor) {
//  webColor.replace(" ", "");
//  webColor.replace("\n", "");
//  int firstComma = webColor.indexOf(",");
//  int secondComma = webColor.indexOf(",", firstComma + 1);
//  String r = webColor.substring(0, firstComma);
//  String g = webColor.substring(firstComma + 1, secondComma);
//  String b = webColor.substring(secondComma + 1);
//  // feather analog values go from 0 to 1024 instead of 0 to 255
//  valueR = r.toInt() * 4;
//  valueG = g.toInt() * 4;
//  valueB = b.toInt() * 4;
  // if anode type RGB led, reverse the color values
//  if(anode){
//    valueR = 1024 - valueR;
//    valueG = 1024 - valueG;
//    valueB = 1024 - valueB;
//  }
  Serial.println("in the loop webColor:" + webColor);
  String color = AlfaOnly(webColor);
  color.toUpperCase();

  if (color == "RED") {
    changeLedStripColor(CRGB::Red, 1);
  } else if (color == "PURPLE") {
    changeLedStripColor(CRGB::Purple, 1);
  } else if (color == "DARKBLUE") {
    changeLedStripColor(CRGB::DarkBlue, 1);
  } else if (color == "BLUE") {
    changeLedStripColor(CRGB::Blue, 1);
  } else if (color == "CYAN") {
    changeLedStripColor(CRGB::Cyan, 1);
  } else if (color == "TURQUOISE") {
    changeLedStripColor(CRGB::Turquoise, 1);
  } else if (color == "GREEN") {
    changeLedStripColor(CRGB::Green, 1);
  } else if (color == "YELLOW") {
    changeLedStripColor(CRGB::Yellow, 1);
  } else if (color == "ORANGE") {
    changeLedStripColor(CRGB::Orange, 1);
  } 

}

void changeLedStripColor (uint32_t c, uint8_t wait) {
//  int led_number = 0;
//  for(led_number = 0; led_number < NUM_LEDS; led_number++)
//  {
//  delay(wait);
//  leds[led_number] = c;
//  FastLED.show();
//  FastLED.setBrightness(100);
//  }
//  return;

  fill_solid( leds, NUM_LEDS, c);
}


// Remove all non-alfa ncharacters from inputString
String AlfaOnly(String inputString) {
  String returnValue = "";

  for(int charRunner = 0; charRunner < inputString.length(); charRunner++) {
    if(isAlpha(inputString.charAt(charRunner))) {
      returnValue = String(returnValue + inputString.charAt(charRunner));
    }
  }

  return returnValue;
}
