// USO DE LIBRERIAS NECESARIAS
#include <SPI.h>
#include <Config.h>
#include <EasyBuzzer.h>
#include <DHT.h>
#include <Servo.h>
#define DHTPIN 2  //SE DEFINE DHTPIN COMO EL PIN 2
#define DHTTYPE DHT11   //SE DEFINE TIPO DE MODULO DHT

Servo servo;    //SE DECLARA "servo" COMO UN SERVO

DHT dht(DHTPIN, DHTTYPE);

//DECLARACION DE PINES ARDUINO
int red_light_pin= 30;
int green_light_pin = 31;
int blue_light_pin = 32;
int ventilador = 33;
float humedad = 0;
float temperatura = 0;
int ledBlanco = 38;
int ledVerde = 39;
int ledSalon = 42;
int ledDormitorio = 43;
int ledCocina = 44;
int ledGaraje = 45;
int ledBano = 46;
int ledMaquinas = 47;
int ledPasillo = 48;
const byte pinBuzzer = 3;
const int PIRPin = 5;

boolean alarma = false;   //AL COMIENZO LA ALARMA ESTARÁ APAGADA

String comando = "";
void setup(){
  Serial.begin(9600);   //SE INICIA EL PUERTO SERIAL A 9600 BAUDIOS
  dht.begin();  //COMIENZO DE SENSOR TEMPERATURA
  EasyBuzzer.setPin(pinBuzzer);   //SE ESTABLECE EL PIN DEL BUZZER EL QUE CONTENIA pinBuzzer
  servo.write(0);

  //DECLARACION DE PINES DE E/S
  pinMode(ledPasillo, OUTPUT);
  pinMode(ledBlanco, OUTPUT); 
  pinMode(ledVerde, OUTPUT);
  pinMode(ledSalon, OUTPUT);
  pinMode(ledDormitorio, OUTPUT);
  pinMode(ledCocina, OUTPUT);
  pinMode(ledGaraje, OUTPUT);
  pinMode(ledBano, OUTPUT);
  pinMode(ledMaquinas, OUTPUT);
  pinMode(ventilador, OUTPUT);
  pinMode(red_light_pin, OUTPUT);
  pinMode(green_light_pin, OUTPUT);
  pinMode(blue_light_pin, OUTPUT);
  pinMode(PIRPin, INPUT);  
  delay(2000);    //RETARDO DE 2 SEGUNDOS

  //CONTROL DE LUCES LED ALARMA
  if (alarma==true){
    digitalWrite(ledBlanco, HIGH);
    digitalWrite(ledVerde, LOW);
  }else{
    digitalWrite(ledBlanco, LOW);
    digitalWrite(ledVerde, HIGH);
  }

  servo.attach(9);
  
}

void loop(){

  
  //Al principio comando = ""
  int i;
  
  comando = "";  
  int value=digitalRead(PIRPin);      //LECTURA DE PIN PIR
  if ((value == HIGH) && (alarma==true)){
    EasyBuzzer.singleBeep(10,2);
    delay(2000);
    EasyBuzzer.stopBeep();
  }

  
  //DECLARACION DE COMANDOS
  if (Serial.available()>0){
    String comando=Serial.readStringUntil('\n');      //TODOS LOS COMANDOS QUE SE LE PASAN POR EL 
                                                      //PUERTO SERIAL SE GUARDAN EN "comando"
    delay(100);
    //Serial.println(comando);


    //ALARMA
    if(comando=="encender_alarma"){
      if (alarma==false){
        digitalWrite(ledBlanco, HIGH);
        digitalWrite(ledVerde, LOW);
        alarma = true;
        EasyBuzzer.singleBeep(10,2);    //PITIDOS
        delay(1000);
        EasyBuzzer.stopBeep();
        
      }
      MostrarTemperatura();
    }
    
    if(comando=="apagar_alarma") {
      if (alarma==true){
        //Serial.println("Se ha desactivado la alarma");
        delay(100);
        digitalWrite(ledBlanco, LOW);
        digitalWrite(ledVerde, HIGH);
        alarma=false;
        
      }
      MostrarTemperatura();
      
    }


    //SENSOR TEMPERATURA


//              ***ARREGLAR ESTA PARTE, MANDAR TEMPERATURA Y HUMEDAD AL ARRANCAR Y LEERLA***
    
    //Serial.print(humedad);
    //Serial.print("% ");
    //Serial.print("Temperatura: ");
    //Serial.print(temperatura);
    //Serial.print("C");
    /*if (comando=="mostrar_valores"){
      Serial.print("Humedad: ");
      Serial.print(humedad);
      Serial.print("% ");
      Serial.print("Temperatura: ");
      Serial.print(temperatura);
      Serial.print("C");

        
      
      //delay(500);
      //delay(500);
      
    }*/





    //LUCES DORMITORIO
    if (comando=="apagar_luz_dormitorio") {
      RGB_color(0,0,0);
      digitalWrite(ledDormitorio, LOW);
      MostrarTemperatura();
    }
    if (comando=="roja_luz_dormitorio") {
      RGB_color(255,0,0);
      MostrarTemperatura();
    }
    if (comando=="verde_luz_dormitorio") {
      RGB_color(0,255,0);
      MostrarTemperatura();
    }
    if (comando=="azul_luz_dormitorio") {
      RGB_color(0,0,255);
      MostrarTemperatura();
    }
    if (comando=="cian_luz_dormitorio") {
      RGB_color(0, 255, 255);
      MostrarTemperatura();
    }
    if (comando=="magenta_luz_dormitorio") {
      RGB_color(255, 0, 255);
      MostrarTemperatura();
    }
    if (comando=="blanca_luz_dormitorio") {
      RGB_color(255, 255, 255);
      MostrarTemperatura();
    }
    if (comando=="encender_luz_dormitorio") {
      RGB_color(255, 255, 255);
      digitalWrite(ledDormitorio, HIGH);
      MostrarTemperatura();
    }

    //LUCES PASILLO
    if (comando=="encender_luz_pasillo"){
      digitalWrite(ledPasillo, HIGH);
      MostrarTemperatura();
    }
    if (comando=="apagar_luz_pasillo"){
      digitalWrite(ledPasillo, LOW);
      MostrarTemperatura();
    }
    
    //LUCES SALON   
    if (comando=="apagar_luz_salon") {
      digitalWrite(ledSalon, LOW);
      MostrarTemperatura();
    }
    if (comando=="encender_luz_salon") {
      digitalWrite(ledSalon, HIGH);
      MostrarTemperatura();
    }
    //VENTILADOR SALON
    if (comando=="encender_ventilador"){
      digitalWrite(ventilador, HIGH);
      MostrarTemperatura();
    }
    if (comando=="apagar_ventilador"){
      digitalWrite(ventilador, LOW);
      MostrarTemperatura();
    }

    //LUCES BANO   
    if (comando=="apagar_luz_bano") {
      digitalWrite(ledBano, LOW);
      MostrarTemperatura();
    }
    if (comando=="encender_luz_bano") {
      digitalWrite(ledBano, HIGH);
      MostrarTemperatura();
    }

    //LUCES SALA MAQUINAS
    if (comando=="encender_sala_maquinas") {
      digitalWrite(ledMaquinas, HIGH);
      MostrarTemperatura();
    }
    if (comando=="apagar_sala_maquinas") {
      digitalWrite(ledMaquinas, LOW);
      MostrarTemperatura();
    }
    //LUCES COCINA
    if (comando=="encender_luz_cocina") {
      digitalWrite(ledCocina, HIGH);
      MostrarTemperatura();
    }
    if (comando=="apagar_luz_cocina") {
      digitalWrite(ledCocina, LOW);
      MostrarTemperatura();
    }
    //LUCES GARAJE
    if (comando=="encender_luz_garaje") {
      digitalWrite(ledGaraje, HIGH);
      MostrarTemperatura();
    }
    if (comando=="apagar_luz_garaje") {
      digitalWrite(ledGaraje, LOW);
      MostrarTemperatura();
    }


    //SERVO GARAJE ABRIR/CERRAR   REVISAR ANGULOS SERVO
    if (comando=="abrir_garaje") {
      servo.write(180);
      MostrarTemperatura();
    }
    if (comando=="cerrar_garaje") {
      servo.write(0);
      MostrarTemperatura();
    }
  }
  delay(500);
}
//SE CREA LA FUNCION RGB_color A LA QUE SE LE PASARAN COMO ARGUMENTOS LOS VALORES DE ROJO, VERDE Y AZUL
void RGB_color(int red_light_value, int green_light_value, int blue_light_value){
    analogWrite(red_light_pin, red_light_value);
    analogWrite(green_light_pin, green_light_value);
    analogWrite(blue_light_pin, blue_light_value);
} 
void MostrarTemperatura(){
    delay(200);
    float temperatura = dht.readTemperature();
    delay(200);
    float humedad = dht.readHumidity();
    delay(200);
    Serial.print(humedad);
    Serial.print("% ");
    Serial.print("Temperatura: ");
    Serial.print(temperatura);
    Serial.print("C");
}
