
#define LED1 2  
#define LED2 3   
#define LED3 4  
#define LED4 5   
#define LED5 6  
#define LED6 7   
#define LED7 8
#define LED8 9

#define SerialTxControl 10   //RS485 Direction control

#define BUTTON1 14 
#define BUTTON2 15 
#define BUTTON3 16 
#define BUTTON4 17 
#define BUTTON5 18 
#define BUTTON6 19 
#define BUTTON7 20 
#define BUTTON8 21 


int val1 = 0;     
int val2 = 0;   
int val3 = 0;   
int val4 = 0;   
int val5 = 0;     
int val6 = 0;   
int val7 = 0;   
int val8 = 0;  

unsigned long time1 = 0;     
unsigned long time2 = 0; 
unsigned long time3 = 0; 
unsigned long time4 = 0; 
unsigned long time5 = 0; 
unsigned long time6 = 0; 
unsigned long time7 = 0; 
unsigned long time8 = 0; 

unsigned long stime1 = 0;     
unsigned long stime2 = 0; 
unsigned long stime3 = 0; 
unsigned long stime4 = 0; 
unsigned long stime5 = 0; 
unsigned long stime6 = 0; 
unsigned long stime7 = 0; 
unsigned long stime8 = 0; 

int state1 = 0;     
int state2 = 0; 
int state3 = 0; 
int state4 = 0; 
int state5 = 0; 
int state6 = 0; 
int state7 = 0; 
int state8 = 0; 

int ledState1 = HIGH; 
int ledState2 = HIGH; 
int ledState3 = HIGH; 
int ledState4 = HIGH; 
int ledState5 = HIGH; 
int ledState6 = HIGH; 
int ledState7 = HIGH; 
int ledState8 = HIGH; 

int vlu1 = LOW;
int vlu2 = LOW;
int vlu3 = LOW;
int vlu4 = LOW;
int vlu5 = LOW;
int vlu6 = LOW;
int vlu7 = LOW;
int vlu8 = LOW;

int text = 0;
char buffer[100];
char mode[10];                               // Переменные для разбора буфера
char addr[50];                               // Переменные для разбора буфера
char vale1[20];                              // Переменные для разбора буфера
char vale2[20];                              // Переменные для разбора буфера
char vale3[20];                              // Переменные для разбора буфера
char vale4[10];                              // Переменные для разбора буфера
char modecontrol[10];                        // Переменные для разбора буфера
char serianname[] = "EQOX293J" ;              // серийный номер устройства в сети

long pM1 = 0; 
long pM2 = 0;
long pM3 = 0;
long pM4 = 0;
long pM5 = 0;
long pM6 = 0;
long pM7 = 0;
long pM8 = 0;

long pMx1 = 0; 
long pMx2 = 0; 
long pMx3 = 0; 
long pMx4 = 0; 
long pMx5 = 0; 
long pMx6 = 0; 
long pMx7 = 0; 
long pMx8 = 0; 

long brightness1 = 0; 
long brightness2 = 0; 
long brightness3 = 0; 
long brightness4 = 0; 
long brightness5 = 0; 
long brightness6 = 0; 
long brightness7 = 0; 
long brightness8 = 0; 



long PEMillis1 = 0;
long PEMillis2 = 0;
long PEMillis3 = 0;
long PEMillis4 = 0;
long PEMillis5 = 0;
long PEMillis6 = 0;
long PEMillis7 = 0;
long PEMillis8 = 0;




#define RS485Transmit    HIGH
#define RS485Receive     LOW

long previousMillis1 = 0;   
long previousMillis2 = 0;  
long previousMillis3 = 0;  
long previousMillis4 = 0;  
long previousMillis5 = 0;  
long previousMillis6 = 0;  
long previousMillis7 = 0;  
long previousMillis8 = 0;  




void setup() {
  //      KEY,EQOX293J,1,1,0,0,KEY

  pinMode(SerialTxControl, OUTPUT);    

  
  Serial.begin(9600); 
  digitalWrite(SerialTxControl, RS485Transmit); 
  Serial.print("TST,");   Serial.print(serianname);Serial.println(",0,0,0,0,KEY,TST");
  delay(100); 
  digitalWrite(SerialTxControl, RS485Receive); 
              
              
  pinMode(LED1, OUTPUT);   
  pinMode(LED2, OUTPUT);  
  pinMode(LED3, OUTPUT);  
  pinMode(LED4, OUTPUT); 
  pinMode(LED5, OUTPUT);  
  pinMode(LED6, OUTPUT);  
  pinMode(LED7, OUTPUT);  
  pinMode(LED8, OUTPUT);
       
  pinMode(BUTTON1, INPUT); 
  pinMode(BUTTON2, INPUT);  
  pinMode(BUTTON3, INPUT);  
  pinMode(BUTTON4, INPUT); 
  pinMode(BUTTON5, INPUT); 
  pinMode(BUTTON6, INPUT);  
  pinMode(BUTTON7, INPUT);  
  pinMode(BUTTON8, INPUT); 
}

void loop(){
  
  
if(brightness1 !=0)
{ 
if (micros() - pM1 > brightness1) {pM1 = micros();   vlu1 = LOW;   digitalWrite(LED1, vlu1);} 
if (micros() - pMx1 > 10000 ) {pMx1 = micros();   vlu1 = HIGH;    digitalWrite(LED1, vlu1);} 
}

if(brightness2 !=0)
{ 
if (micros() - pM2 > brightness2) {pM2 = micros();   vlu2 = LOW;   digitalWrite(LED2, vlu2);} 
if (micros() - pMx2 > 10000 ) {pMx2 = micros();   vlu2 = HIGH;    digitalWrite(LED2, vlu2);} 
}


  
 unsigned long currentMillis1 = millis();  if(currentMillis1  > time1 && ledState1 == HIGH && stime1!=0) {    previousMillis1 = currentMillis1; time1=0; stime1=0;   ledState1 = LOW;    digitalWrite(LED1, ledState1); }
 unsigned long currentMillis2 = millis();  if(currentMillis2  > time2 && ledState2 == HIGH && stime2!=0) {    previousMillis2 = currentMillis2; time2=0; stime2=0;   ledState2 = LOW;    digitalWrite(LED2, ledState2);  }
 unsigned long currentMillis3 = millis();  if(currentMillis3  > time3 && ledState3 == HIGH && stime3!=0) {    previousMillis3 = currentMillis3; time3=0; stime3=0; ledState3 = LOW;    digitalWrite(LED3, ledState3);  }
 unsigned long currentMillis4 = millis();  if(currentMillis4  > time4 && ledState4 == HIGH && stime4!=0) {    previousMillis4 = currentMillis4; time4=0; stime4=0; ledState4 = LOW;    digitalWrite(LED4, ledState4);   }
 unsigned long currentMillis5 = millis();  if(currentMillis5  > time5 && ledState5 == HIGH && stime5!=0) {    previousMillis5 = currentMillis5; time5=0; stime5=0; ledState5 = LOW;    digitalWrite(LED5, ledState5);   }
 unsigned long currentMillis6 = millis();  if(currentMillis6  > time6 && ledState6 == HIGH && stime6!=0) {    previousMillis6 = currentMillis6; time6=0; stime6=0;  ledState6 = LOW;    digitalWrite(LED6, ledState6);   }
 unsigned long currentMillis7 = millis();  if(currentMillis7  > time7 && ledState7 == HIGH && stime7!=0) {    previousMillis7 = currentMillis7; time7=0; stime7=0;  ledState7 = LOW;    digitalWrite(LED7, ledState7);   }
 unsigned long currentMillis8 = millis();  if(currentMillis8  > time8 && ledState8 == HIGH && stime8!=0) {    previousMillis8 = currentMillis8; time8=0; stime8=0; ledState8 = LOW;    digitalWrite(LED8, ledState8);   }
  
digitalWrite(SerialTxControl, RS485Receive);  
        
    
  
  int i=0; 
  if(Serial.available()){delay(100);
while( Serial.available() && i< 99) { buffer[i++] = Serial.read();} buffer[i++]='\0';}                                       
if(i>0)
{
  

  //Serial.println(buffer);
  
     sscanf(buffer, "%[^','],%[^','],%[^','],%[^','],%[^','],%[^','],%s", &mode, &addr, &vale1, &vale2, &vale3, &vale4, &modecontrol);          
   
     
 if ((String)addr == serianname) {
 if ((String)mode == (String)modecontrol) {
    
        if ((String)mode == "TST")   
      {
  digitalWrite(SerialTxControl, RS485Transmit); 
   Serial.print("TST,");   Serial.print(serianname);Serial.println(",0,0,0,0,KEY,TST");
  delay(100); 
  digitalWrite(SerialTxControl, RS485Receive);   
      
     }
   
     if ((String)mode == "KEY")   
    {
              if ((String)vale2 == "OFF")   
              {
           
                 if ((String)vale1 == "1")  {   analogWrite(LED1, LOW); ledState1=LOW; time1= millis()+atoi(vale3)*1000; stime1= atoi(vale3); } 
                 if ((String)vale1 == "2")  {   analogWrite(LED2, LOW); ledState2=LOW; time2= millis()+atoi(vale3)*1000; stime2= atoi(vale3); } 
                 if ((String)vale1 == "3")  {   digitalWrite(LED3, LOW); ledState3=LOW; time3= millis()+atoi(vale3)*1000; stime3= atoi(vale3);} 
                 if ((String)vale1 == "4")  {   digitalWrite(LED4, LOW); ledState4=LOW; time4= millis()+atoi(vale3)*1000; stime4= atoi(vale3);}  
                 if ((String)vale1 == "5")  {   digitalWrite(LED5, LOW); ledState5=LOW; time5= millis()+atoi(vale3)*1000; stime5= atoi(vale3);} 
                 if ((String)vale1 == "6")  {   digitalWrite(LED6, LOW); ledState6=LOW; time6= millis()+atoi(vale3)*1000; stime6= atoi(vale3);} 
                 if ((String)vale1 == "7")  {   digitalWrite(LED7, LOW); ledState7=LOW; time7= millis()+atoi(vale3)*1000; stime7= atoi(vale3);} 
                 if ((String)vale1 == "8")  {   digitalWrite(LED8, LOW); ledState8=LOW; time8= millis()+atoi(vale3)*1000; stime8= atoi(vale3);} 
              } 
              
              if ((String)vale2 == "ON")   
              {
                 if ((String)vale1 == "1")  {   digitalWrite(LED1, HIGH); ledState1=HIGH; time1= millis()+atoi(vale3)*1000; stime1= atoi(vale3);  } 
                 if ((String)vale1 == "2")  {   digitalWrite(LED2, HIGH); ledState2=HIGH; time2= millis()+atoi(vale3)*1000; stime2= atoi(vale3);  } 
                 if ((String)vale1 == "3")  {   digitalWrite(LED3, HIGH); ledState3=HIGH; time3= millis()+atoi(vale3)*1000; stime3= atoi(vale3);} 
                 if ((String)vale1 == "4")  {   digitalWrite(LED4, HIGH); ledState4=HIGH; time4= millis()+atoi(vale3)*1000; stime4= atoi(vale3);} 
                 if ((String)vale1 == "5")  {   digitalWrite(LED5, HIGH); ledState5=HIGH; time5= millis()+atoi(vale3)*1000; stime5= atoi(vale3);} 
                 if ((String)vale1 == "6")  {   digitalWrite(LED6, HIGH); ledState6=HIGH; time6= millis()+atoi(vale3)*1000; stime6= atoi(vale3);} 
                 if ((String)vale1 == "7")  {   digitalWrite(LED7, HIGH); ledState7=HIGH; time7= millis()+atoi(vale3)*1000; stime7= atoi(vale3);} 
                 if ((String)vale1 == "8")  {   digitalWrite(LED8, HIGH); ledState8=HIGH; time8= millis()+atoi(vale3)*1000; stime8= atoi(vale3);} 
              }
              
              else 
              {
                 if ((String)vale1 == "1")  {    brightness1=atoi(vale2); time1= millis()+atoi(vale3)*1000; stime1= atoi(vale3);} 
                 if ((String)vale1 == "2")  {    brightness2=atoi(vale2); time2= millis()+atoi(vale3)*1000; stime2= atoi(vale3);} 
                 if ((String)vale1 == "3")  {    brightness3=atoi(vale2); time3= millis()+atoi(vale3)*1000; stime3= atoi(vale3);} 
                 if ((String)vale1 == "4")  {    brightness4=atoi(vale2); time4= millis()+atoi(vale3)*1000; stime4= atoi(vale3);} 
                 if ((String)vale1 == "5")  {    brightness5=atoi(vale2); time5= millis()+atoi(vale3)*1000; stime5= atoi(vale3);} 
                 if ((String)vale1 == "6")  {    brightness6=atoi(vale2); time6= millis()+atoi(vale3)*1000; stime6= atoi(vale3);} 
                 if ((String)vale1 == "7")  {    brightness7=atoi(vale2); time7= millis()+atoi(vale3)*1000; stime7= atoi(vale3);} 
                 if ((String)vale1 == "8")  {    brightness8=atoi(vale2); time8= millis()+atoi(vale3)*1000; stime8= atoi(vale3);} 
              }
              
              
              

              digitalWrite(SerialTxControl, RS485Transmit); 
              Serial.print("SEND,EQOX293JCL,");     Serial.print(vale1);   Serial.print(","); Serial.print(vale2);   Serial.print(",");Serial.print(vale3);   Serial.println(",KEY,SEND"); 
              delay(100); 
             digitalWrite(SerialTxControl, RS485Receive);  
              
              

  
  
    }
                //      KEY,EQOX293J,1,1,0,0,KEY    KEY,EQOX293J,1,1,2,0,KEY
  
}
 }
}


  
  
  
  
  val1 = digitalRead(BUTTON1);  
  val2 = digitalRead(BUTTON2);
  val3 = digitalRead(BUTTON3);
  val4 = digitalRead(BUTTON4);
  val5 = digitalRead(BUTTON5);  
  val6 = digitalRead(BUTTON6);
  val7 = digitalRead(BUTTON7);
  val8 = digitalRead(BUTTON8);
 
 
 
 

 
 

  
  
if (val1 == HIGH&&state1 != HIGH) {       state1=HIGH;  digitalWrite(LED1, HIGH);  brightness1=0;
digitalWrite(SerialTxControl, RS485Transmit); 
Serial.print("KEY,"); Serial.print(serianname); Serial.println(",1,ON,0,0,KEY");
delay(100); 
digitalWrite(SerialTxControl, RS485Receive);  
} 
 
if (val1 == LOW&&state1  == HIGH) {   state1=LOW;   digitalWrite(LED1, LOW);    brightness1=0;
digitalWrite(SerialTxControl, RS485Transmit); 
Serial.print("KEY,"); Serial.print(serianname); Serial.println(",1,OFF,0,0,KEY");
delay(100); 
digitalWrite(SerialTxControl, RS485Receive);  
} 
  

if (val2 == HIGH&&state2 != HIGH) {       state2=HIGH;  digitalWrite(LED2, HIGH);   brightness2=0;
digitalWrite(SerialTxControl, RS485Transmit); 
Serial.print("KEY,"); Serial.print(serianname); Serial.println(",2,ON,0,0,KEY");
delay(100); 
digitalWrite(SerialTxControl, RS485Receive);  
} 
 
if (val2 == LOW&&state2  == HIGH) {   state2=LOW;   digitalWrite(LED2, LOW);    brightness2=0;
digitalWrite(SerialTxControl, RS485Transmit); 
Serial.print("KEY,"); Serial.print(serianname); Serial.println(",2,OFF,0,0,KEY");
delay(100); 
digitalWrite(SerialTxControl, RS485Receive);  
} 

if (val3 == HIGH&&state3 != HIGH) {       state3=HIGH;  digitalWrite(LED3, HIGH);   brightness3=0;
digitalWrite(SerialTxControl, RS485Transmit); 
Serial.print("KEY,"); Serial.print(serianname); Serial.println(",3,ON,0,0,KEY");
delay(100); 
digitalWrite(SerialTxControl, RS485Receive);  
} 
 
if (val3 == LOW&&state3  == HIGH) {   state3=LOW;   digitalWrite(LED3, LOW);    brightness3=0;
digitalWrite(SerialTxControl, RS485Transmit); 
Serial.print("KEY,"); Serial.print(serianname); Serial.println(",3,OFF,0,0,KEY");
delay(100); 
digitalWrite(SerialTxControl, RS485Receive);  
} 



if (val4 == HIGH&&state4 != HIGH) {       state4=HIGH;  digitalWrite(LED4, HIGH);   brightness4=0;
digitalWrite(SerialTxControl, RS485Transmit); 
Serial.print("KEY,"); Serial.print(serianname); Serial.println(",4,ON,0,0,KEY");
delay(100); 
digitalWrite(SerialTxControl, RS485Receive);  
} 
 
if (val4 == LOW&&state4  == HIGH) {   state4=LOW;   digitalWrite(LED4, LOW);    brightness4=0;
digitalWrite(SerialTxControl, RS485Transmit); 
Serial.print("KEY,"); Serial.print(serianname); Serial.println(",4,OFF,0,0,KEY");
delay(100); 
digitalWrite(SerialTxControl, RS485Receive);  
} 

if (val5 == HIGH&&state5 != HIGH) {       state5=HIGH;  digitalWrite(LED5, HIGH);   brightness5=0;
digitalWrite(SerialTxControl, RS485Transmit); 
Serial.print("KEY,"); Serial.print(serianname); Serial.println(",5,ON,0,0,KEY");
delay(100); 
digitalWrite(SerialTxControl, RS485Receive);  
} 
 
if (val5 == LOW&&state5  == HIGH) {   state5=LOW;   digitalWrite(LED5, LOW);    brightness5=0;
digitalWrite(SerialTxControl, RS485Transmit); 
Serial.print("KEY,"); Serial.print(serianname); Serial.println(",5,OFF,0,0,KEY");
delay(100); 
digitalWrite(SerialTxControl, RS485Receive);  
} 

if (val6 == HIGH&&state6 != HIGH) {       state6=HIGH;  digitalWrite(LED6, HIGH);   brightness6=0;
digitalWrite(SerialTxControl, RS485Transmit); 
Serial.print("KEY,"); Serial.print(serianname); Serial.println(",6,ON,0,0,KEY");
delay(100); 
digitalWrite(SerialTxControl, RS485Receive);  
} 
 
if (val6 == LOW&&state6  == HIGH) {   state6=LOW;   digitalWrite(LED6, LOW);    brightness6=0;
digitalWrite(SerialTxControl, RS485Transmit); 
Serial.print("KEY,"); Serial.print(serianname); Serial.println(",6,OFF,0,0,KEY");
delay(100); 
digitalWrite(SerialTxControl, RS485Receive);  
} 

if (val7 == HIGH&&state7 != HIGH) {       state7=HIGH;  digitalWrite(LED7, HIGH);   brightness7=0;
digitalWrite(SerialTxControl, RS485Transmit); 
Serial.print("KEY,"); Serial.print(serianname); Serial.println(",7,ON,0,0,KEY");
delay(100); 
digitalWrite(SerialTxControl, RS485Receive);  
} 
 
if (val7 == LOW&&state7  == HIGH) {   state7=LOW;   digitalWrite(LED7, LOW);    brightness7=0;
digitalWrite(SerialTxControl, RS485Transmit); 
Serial.print("KEY,"); Serial.print(serianname); Serial.println(",7,OFF,0,0,KEY");
delay(100); 
digitalWrite(SerialTxControl, RS485Receive);  
} 

if (val8 == HIGH&&state8 != HIGH) {       state8=HIGH;  digitalWrite(LED8, HIGH);   brightness8=0;
digitalWrite(SerialTxControl, RS485Transmit); 
Serial.print("KEY,"); Serial.print(serianname); Serial.println(",8,ON,0,0,KEY");
delay(100); 
digitalWrite(SerialTxControl, RS485Receive);  
} 
 
if (val8 == LOW&&state8  == HIGH) {   state8=LOW;   digitalWrite(LED8, LOW);    brightness8=0;
digitalWrite(SerialTxControl, RS485Transmit); 
Serial.print("KEY,"); Serial.print(serianname); Serial.println(",8,OFF,0,0,KEY");
delay(100); 
digitalWrite(SerialTxControl, RS485Receive);  
} 


}
