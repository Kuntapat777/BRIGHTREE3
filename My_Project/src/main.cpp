#include <WiFi.h>
#include <HTTPClient.h>

const char* ssid = "Apinya"; // เปลี่ยนเป็น SSID ของคุณ
const char* password = "25452545"; // เปลี่ยนเป็นรหัสผ่าน WiFi ของคุณ
const char* serverName = "http://192.168.1.7/My_Project/data/save_data.php"; // เปลี่ยนเป็นที่อยู่ IP ของเซิร์ฟเวอร์ XAMPP

#define MOISTURE_PIN_1 34 // ขาเชื่อมต่อของเซ็นเซอร์วัดความชื้นในดินตัวที่ 1
#define MOISTURE_PIN_2 35 // ขาเชื่อมต่อของเซ็นเซอร์วัดความชื้นในดินตัวที่ 2
#define MOISTURE_PIN_3 32 // ขาเชื่อมต่อของเซ็นเซอร์วัดความชื้นในดินตัวที่ 3

float calculateMoisturePercentage(int moistureValue) {
    float moisturePercentage;

    if (moistureValue >= 3000) {
        moisturePercentage = map(moistureValue, 3000, 4095, 20, 0); // ความชื้นต่ำมาก
    } else if (moistureValue >= 2000) {
        moisturePercentage = map(moistureValue, 2000, 2999, 40, 21); // ความชื้นต่ำ
    } else if (moistureValue >= 1000) {
        moisturePercentage = map(moistureValue, 1000, 1999, 70, 41); // ความชื้นปานกลาง
    } else {
        moisturePercentage = map(moistureValue, 0, 999, 100, 71); // ความชื้นสูง
    }

    // ให้ค่าเปอร์เซ็นต์เป็น 0 ถึง 100%
    return constrain(moisturePercentage, 0, 100);
}

void setup() {
    Serial.begin(115200);
    WiFi.begin(ssid, password);

    while (WiFi.status() != WL_CONNECTED) {
        delay(1000);
        Serial.println("Connecting to WiFi...");
    }
    Serial.println("Connected to WiFi");
}

void loop() {
    if (WiFi.status() == WL_CONNECTED) {
        HTTPClient http;
        http.begin(serverName);

        // อ่านค่าจากเซ็นเซอร์แต่ละตัว
        int moistureValue1 = analogRead(MOISTURE_PIN_1);
        int moistureValue2 = analogRead(MOISTURE_PIN_2);
        int moistureValue3 = analogRead(MOISTURE_PIN_3);

        Serial.println("Raw moisture value 1: " + String(moistureValue1));
        Serial.println("Raw moisture value 2: " + String(moistureValue2));
        Serial.println("Raw moisture value 3: " + String(moistureValue3));

        // แปลงค่าจาก 0-4095 เป็นเปอร์เซ็นต์ตามช่วงที่กำหนด
        float moisturePercentage1 = calculateMoisturePercentage(moistureValue1);
        float moisturePercentage2 = calculateMoisturePercentage(moistureValue2);
        float moisturePercentage3 = calculateMoisturePercentage(moistureValue3);

        Serial.println("Calculated moisture percentage 1: " + String(moisturePercentage1));
        Serial.println("Calculated moisture percentage 2: " + String(moisturePercentage2));
        Serial.println("Calculated moisture percentage 3: " + String(moisturePercentage3));

        String postData = "moisture_value_1=" + String(moisturePercentage1) +
                          "&moisture_value_2=" + String(moisturePercentage2) +
                          "&moisture_value_3=" + String(moisturePercentage3);

        http.addHeader("Content-Type", "application/x-www-form-urlencoded");
        int httpResponseCode = http.POST(postData);

        if (httpResponseCode > 0) {
            // แสดงเฉพาะข้อความตอบกลับจากเซิร์ฟเวอร์
            String response = http.getString();
            Serial.println("Response: " + response);
        } else {
            Serial.print("Error on sending POST: ");
            Serial.println(httpResponseCode);
        }

        http.end();
    } else {
        Serial.println("WiFi Disconnected");
    }

    delay(10000);  // ส่งข้อมูลทุก ๆ 10 วินาที
}
