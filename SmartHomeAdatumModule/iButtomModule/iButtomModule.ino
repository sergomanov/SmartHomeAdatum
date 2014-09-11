#include <OneWire.h>

char serianname[] = "Z564FGYY" ;      // серийный номер устройства в сети
#define SerialTxControl 10   //RS485 Direction control
#define RS485Transmit    HIGH
#define RS485Receive     LOW  
char buffer[100];
char mode[4];                                 // Переменные для разбора буфера
char addres[10];                                // Переменные для разбора буфера
char vale1[14];                               // Переменные для разбора буфера
char vale2[14];                               // Переменные для разбора буфера
char vale3[14];                               // Переменные для разбора буфера
char vale4[4];                                // Переменные для разбора буфера
char modecontrol[4];                          // Переменные для разбора буфера

OneWire  ds(12);  // на  digital pin 12

void setup(void) {
  Serial.begin(9600);
   pinMode(SerialTxControl, OUTPUT);    

 
  digitalWrite(SerialTxControl, RS485Transmit); 
  Serial.print("TST,");   Serial.print(serianname); Serial.println(",0,0,0,iBN,TST");
  delay(100); 
  digitalWrite(SerialTxControl, RS485Receive); 
}

void loop(void) {
  
      digitalWrite(SerialTxControl, RS485Receive);  
  
  
   int x=0; if(Serial.available()){delay(100);
  while( Serial.available() && x< 99) { buffer[x++] = Serial.read();} buffer[x++]='\0';}
  if(x>0)
  {
  
//  Serial.println(buffer);


  
     sscanf(buffer, "%[^','],%[^','],%[^','],%[^','],%[^','],%[^','],%s", &mode, &addres, &vale1, &vale2, &vale3, &vale4, &modecontrol);          
  
     
  
     if ((String)addres == serianname) {
     if ((String)mode == (String)modecontrol) {
       
       
     if ((String)mode == "TST")   
      {
  digitalWrite(SerialTxControl, RS485Transmit); 
 Serial.print("TST,");   Serial.print(serianname); Serial.println(",0,0,0,iBN,TST");
  delay(100); 
  digitalWrite(SerialTxControl, RS485Receive);   
      
     }
     }
     }
  }




  byte i;  byte present = 0;  byte data[12];  byte addr[8];
  if ( !ds.search(addr)) {      ds.reset_search();     return; }
  
  digitalWrite(SerialTxControl, RS485Transmit); 
  Serial.print("iBN,"); Serial.print(serianname);  Serial.print(","); Serial.print("DS1990A");Serial.print(","); Serial.print(addr[0]); Serial.print(addr[1]); Serial.print(addr[2]); Serial.print(addr[3]); Serial.print(addr[4]); Serial.print(addr[5]); Serial.print(addr[6]); Serial.print(addr[7]); Serial.println(",0,0,iBN");
  delay(100); 
  digitalWrite(SerialTxControl, RS485Receive); 
  
  
  if ( OneWire::crc8( addr, 7) != addr[7]) {      Serial.println("CRC is not valid!\n");      return;  }
  if ( addr[0] != 0x01) {      Serial.println("Device is not a DS1990A family device.\n");      return;  }
  ds.reset();
  delay(1000);

}
