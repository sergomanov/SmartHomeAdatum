#include "DHT.h"                              // DHT
#include <IRremote.h>                         // Ir управление
#include <RCSwitch.h>                         // RF подключаем библиатеку
RCSwitch mySwitch = RCSwitch();               // RF  приёмник
DHT dht(6, DHT11);                            // DHT
const int analogPin = 2;
long interval = 10000;                        // интервал между включение/выключением светодиода (1 секунда)
long previousMillis = 0;                      // храним время последнего переключения светодиода
long previousMillis2 = 0;                     // храним время последнего переключения светодиода
long beepprevious = 0;  
unsigned long beepcurrent =0;
long beeptone;

int ledPin  = 13;
int pirPin = 11; 
int ledState = LOW;   
long ledpreviousMillis = 0;        // храним время последнего переключения светодиода
long ledinterval = 0;           // интервал между включение/выключением светодиода (1 секунда)
int ledcol=0;

IRrecv irrecv(8);                             // pin инфракрастный приёмсник
decode_results results;
unsigned long ir_dt, old_ir; 
unsigned long rf_dt, old_rf; 
int speakerOut = 4;
long previousMillis3 = 0;                     // храним время последнего переключения светодиода

long dalaypir = 0;                     // Задержка дачтика двидения


char mode[4];                                 // Переменные для разбора буфера
char addr[10];                                // Переменные для разбора буфера
char vale1[14];                               // Переменные для разбора буфера
char vale2[14];                               // Переменные для разбора буфера
char vale3[14];                               // Переменные для разбора буфера
char vale4[4];                                // Переменные для разбора буфера
char modecontrol[4];                          // Переменные для разбора буфера
IRsend irsend;                                // Ir управление
int sensorPin = A0;                           // устанавливаем входную ногу для АЦП
unsigned int sensorValue = 0;                 // цифровое значение фоторезистора
char serianname[] = "T6DNAE0S" ;              // серийный номер устройства в сети     
char buffer[100];
int d = 0;
int lum;//глобальная переменная силы света
long beep=0;  

int lumsend;//глобальная переменная силы света
#define SerialTxControl 10   //RS485 Direction control
#define RS485Transmit    HIGH
#define RS485Receive     LOW  

#include <Wire.h> 
#include <BMP085.h>

BMP085 dps = BMP085();    

long Temperature = 0, Pressure = 0, Altitude = 0;



void setup(void) {
  Serial.begin(9600);
   pinMode(SerialTxControl, OUTPUT);  

  
  Wire.begin(); 
  delay(1000);

  dps.init();  
  pinMode(speakerOut, OUTPUT);
 pinMode(ledPin, OUTPUT);  
 pinMode (pirPin, INPUT);
 
  digitalWrite(SerialTxControl, RS485Transmit); 
  Serial.print("TST,");   Serial.print(serianname); Serial.println(",0,0,0,STAT,TST");
  delay(100); 
  digitalWrite(SerialTxControl, RS485Receive);                    
 
 
    pinMode(4, OUTPUT);                       // Musik
    mySwitch.enableReceive(0);                // Приемник RF 0 => это pin #2 
    dht.begin();                              // DHT
    irrecv.enableIRIn();                      // Start the receiver
    mySwitch.enableTransmit(7);               // Передатчик RF is connected
    mySwitch.setRepeatTransmit(5);            // Передатчик RF setRepeatTransmit
    
    
  
}
 
void loop(void) {
  
  
  
  
  //Функция мигания диодом
 unsigned long ledcurrentMillis = millis();
 if(ledcurrentMillis - ledpreviousMillis > ledinterval && ledcol > 0) {
    ledpreviousMillis = ledcurrentMillis; 
    if (ledState == LOW)      ledState = HIGH;
    else{      ledState = LOW;       ledcol=ledcol-1;}
  digitalWrite(ledPin, ledState);
  }
//Функция мигания диодом
  
 // пищалка 
   unsigned long beepcurrent = millis(); 
 if(beepcurrent < beepprevious) 
      {        
    digitalWrite(speakerOut,HIGH);  
    delayMicroseconds(beeptone / 2);   
    digitalWrite(speakerOut, LOW);   
    delayMicroseconds(beeptone / 2);
    
           }
  // пищалка  
  
  
    int val = analogRead(analogPin);
  if(val>130){
  digitalWrite(SerialTxControl, RS485Transmit); 
  Serial.print("BEEP,");   Serial.print(serianname); Serial.print(",");     Serial.print(val);    Serial.println(",0,0,0,BEEP");
  delay(100); 
  digitalWrite(SerialTxControl, RS485Receive);  }
  
  
  
  
   
  digitalWrite(SerialTxControl, RS485Receive);  // читаем данные с порта
   
 int i=0; if(Serial.available()){delay(100);
while( Serial.available() && i< 99) 
{ buffer[i++] = Serial.read();} buffer[i++]='\0';}
  if(i>0)
  {
    
       sscanf(buffer, "%[^','],%[^','],%[^','],%[^','],%[^','],%[^','],%s", &mode, &addr, &vale1, &vale2, &vale3, &vale4, &modecontrol);        
    
   if ((String)addr == serianname) {
     if ((String)mode == (String)modecontrol) {
       
       
     if ((String)mode == "TST")   //TST,T6DNAE0S,0,0,0,0,TST 
      {
 digitalWrite(SerialTxControl, RS485Transmit); 
   Serial.print("TST,");   Serial.print(serianname); Serial.println(",0,0,0,STAT,TST");
  delay(100); 
  digitalWrite(SerialTxControl, RS485Receive);   
     }
     
     
      if ((String)mode == "QA")   //QA,T6DNAE0S,0,0,0,0,QA
      {
     int l = analogRead(sensorPin);
      int h = dht.readHumidity(); 
      int t = dht.readTemperature(); 
        dps.getPressure(&Pressure); 
  dps.getTemperature(&Temperature);
      
  digitalWrite(SerialTxControl, RS485Transmit); 
  Serial.print("LUM,");   Serial.print(serianname);Serial.print(","); Serial.print(l); Serial.println(",0,0,0,LUM");
  delay(100); 
  Serial.print("HUM,");   Serial.print(serianname);Serial.print(","); Serial.print(h); Serial.println(",0,0,0,HUM");
  delay(100); 
 // Serial.print("TEM,");   Serial.print(serianname);Serial.print(","); Serial.print(t); Serial.println(",0,0,0,TEM");
 // delay(100); 
   Serial.print("BEEP,");   Serial.print(serianname);Serial.print(","); Serial.print(val); Serial.println(",0,0,0,BEEP");
  delay(100); 
     Serial.print("TEM,");   Serial.print(serianname);Serial.print(","); Serial.print(Temperature*0.1); Serial.println(",0,0,0,TEM");
  delay(100); 
      Serial.print("PRS,");   Serial.print(serianname);Serial.print(","); Serial.print(Pressure/133.3); Serial.println(",0,0,0,PRS");
  delay(100);  
  
   Serial.print("SEND,");  Serial.print(serianname);   Serial.println("0,0,0,0,QA,SEND");       
   delay(100); 
  digitalWrite(SerialTxControl, RS485Receive); 
      
     }
     
     
      if ((String)mode == "LED")   //LED,T6DNAE0S,100,15,0,0,LED

      {
ledinterval = atoi(vale1);          
ledcol=atoi(vale2);
  digitalWrite(SerialTxControl, RS485Transmit); 
  Serial.print("SEND,");   Serial.print(serianname); Serial.println(",0,0,0,LED,SEND");
  delay(100); 
  digitalWrite(SerialTxControl, RS485Receive);   
     }
     
      if ((String)mode == "RF")   //RF,T6DNAE0S,11229962,24,293,0,RF
      {
      mySwitch.setPulseLength(atol(vale3)-64); 
      mySwitch.send(atol(vale1), atol(vale2));    
      mySwitch.resetAvailable();  
    
       digitalWrite(SerialTxControl, RS485Transmit); 
       
      Serial.print("SEND,");  Serial.print(serianname);   Serial.print(",");    Serial.print(vale1);   Serial.print(","); Serial.print(vale2);   Serial.print(",");Serial.print(vale3);   Serial.println(",RF,SEND");         
     
       delay(100); 
      digitalWrite(SerialTxControl, RS485Receive); 
      
     }

    if ((String)mode == "IR")    //IR,T6DNAE0S,PAN,16825533,16388,0,IR

      {
       if ((String)vale1 == "NEC") {     int long bits2 = atol(vale2); int long value2 = atol(vale3); irsend.sendNEC(bits2, value2);     } 
       if ((String)vale1 == "SONY"){     int long bits4 = atol(vale2); int long value4 = atol(vale3); irsend.sendSony(bits4, value4);    }      
       if ((String)vale1 == "RC5") {     int long bits5 = atol(vale2); int long value5 = atol(vale3); irsend.sendRC5(bits5, value5);     }     
       if ((String)vale1 == "RC6") {     int long bits6 = atol(vale2); int long value6 = atol(vale3); irsend.sendRC6(bits6, value6);     }  
       if ((String)vale1 == "JVC") {     int long bits7 = atol(vale2); int long value7 = atol(vale3); irsend.sendJVC(bits7, value7, 0);  }     
       if ((String)vale1 == "PAN") {     int long bits3 = atol(vale2); int long value3 = atol(vale3); irsend.sendPanasonic(value3,bits3);}   
  //     irrecv.enableIRIn();
        digitalWrite(SerialTxControl, RS485Transmit); 
       Serial.print("SEND,"); Serial.print(serianname);   Serial.print(","); Serial.print(vale1);   Serial.print(","); Serial.print(vale2);   Serial.print(",");Serial.print(vale3);   Serial.println(",IR,SEND");  
              delay(100); 
      digitalWrite(SerialTxControl, RS485Receive); 
     }
      irrecv.enableIRIn();
      
    if ((String)mode == "MU")     // MU,T6DNAE0S,100,100,0,0,MU  
    {  
         digitalWrite(SerialTxControl, RS485Transmit); 
      Serial.print("SEND,"); Serial.print(serianname);   Serial.print(",");  Serial.print(vale1);   Serial.print(","); Serial.print(vale2);   Serial.print(",");Serial.print(vale3);   Serial.println(",MU,SEND");        
             delay(100); 
      digitalWrite(SerialTxControl, RS485Receive); 
      beeptone=atoi(vale1);
      beepprevious = millis()+atoi(vale2); 
    } 
    
    
     }}
    
//  Serial.println(buffer); // Выводим что приняли с других устройств
  }
  
  
  
  
// Датчик движения
int pirVal = digitalRead (pirPin);
dalaypir=dalaypir-1;
if (pirVal == HIGH && dalaypir <0){
digitalWrite(SerialTxControl, RS485Transmit); 
Serial.print("PIR,");   Serial.print(serianname);Serial.print(","); Serial.println("1,0,0,0,PIR");
delay(100); digitalWrite(SerialTxControl, RS485Receive);  
dalaypir=5000;}
// Датчик движения  
  
// Радио датчик
if (mySwitch.available()>0 ) 
{  rf_dt = mySwitch.getReceivedValue();  unsigned long currentMillis2 = millis();                                                                                                                                     // Приемник RF
   if ((old_rf != rf_dt) || (currentMillis2 - previousMillis2 > 300)) 
     { previousMillis2 = currentMillis2; old_rf=rf_dt; 
     
    
     
  digitalWrite(SerialTxControl, RS485Transmit); 
  Serial.print("RF,");   Serial.print(serianname);Serial.print(","); Serial.print(mySwitch.getReceivedValue());Serial.print(",");Serial.print(mySwitch.getReceivedBitlength());Serial.print(",");Serial.print( mySwitch.getReceivedDelay() ); Serial.println(",0,RF");
  delay(100); 
  digitalWrite(SerialTxControl, RS485Receive); 
     
            mySwitch.resetAvailable();
     } 
   mySwitch.resetAvailable(); 
}
// Радио датчик  
  
  
//Датчик света    
    if(lum > 0){
    int l = analogRead(sensorPin);
    if (abs((lum-l)/10)>10){   lum = analogRead(sensorPin); lumsend=lum; }
    }
    else    {      lum = analogRead(sensorPin);    }
    
    if(lumsend > 0){
  digitalWrite(SerialTxControl, RS485Transmit); 
  Serial.print("LUM,");   Serial.print(serianname);Serial.print(","); Serial.print(lumsend); Serial.println(",0,0,0,LUM");
  delay(100);   digitalWrite(SerialTxControl, RS485Receive);       lumsend=0;
    }  
//Датчик света      
  
  
  
if (irrecv.decode(&results)) {
  if (results.value > 0 && results.value < 0xFFFFFFFF)     {  
    
  int count = results.rawlen;
  
        if (results.decode_type == NEC)      
                { 
                char text2[100]; sprintf(text2, "IR,%s,NEC,%ld,%d,0,IR",  serianname, results.value, results.bits);                
                digitalWrite(SerialTxControl, RS485Transmit); 
                Serial.println(text2); 
                delay(100); 
                digitalWrite(SerialTxControl, RS485Receive);  
                }
                
   else if (results.decode_type == SONY)     
             { char text4[100]; sprintf(text4, "IR,%s,SONY,%ld,%d,0,IR", serianname, results.value, results.bits);             
             digitalWrite(SerialTxControl, RS485Transmit); 
                Serial.println(text4); 
                delay(100); 
                digitalWrite(SerialTxControl, RS485Receive);     } 
                
   else if (results.decode_type == RC5)      { char text5[100]; sprintf(text5, "IR,%s,RC5,%ld,%d,0,IR",  serianname, results.value, results.bits);            
   digitalWrite(SerialTxControl, RS485Transmit); 
      Serial.println(text5); 
      delay(100); 
      digitalWrite(SerialTxControl, RS485Receive);     } 
      
      
   else if (results.decode_type == RC6)      { char text6[100]; sprintf(text6, "IR,%s,RC6,%ld,%d,0,IR",  serianname, results.value, results.bits);      
   digitalWrite(SerialTxControl, RS485Transmit); 
      Serial.println(text6); 
      delay(100); 
      digitalWrite(SerialTxControl, RS485Receive);  
 }
   else if (results.decode_type == JVC)      { char text7[100]; sprintf(text7, "IR,%s,JVC,%ld,%d,0,IR",  serianname, results.value, results.bits);  
   digitalWrite(SerialTxControl, RS485Transmit); 
      Serial.println(text7); 
      delay(100); 
      digitalWrite(SerialTxControl, RS485Receive);  
 
 
   }
   else if (results.decode_type == PANASONIC){ char text3[100]; sprintf(text3, "IR,%s,PAN,%ld,%d,0,IR",  serianname, results.value, results.panasonicAddress);  
   digitalWrite(SerialTxControl, RS485Transmit); 
      Serial.println(text3); 
      delay(100); 
      digitalWrite(SerialTxControl, RS485Receive);  
 
 
   }  

 }
    irrecv.enableIRIn();
}  
  
  
  
 
}
