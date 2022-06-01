

import serial
import time
import sys
from os import remove
import mysql.connector
mydb = mysql.connector.connect(
    host="localhost",
    user="mario",
    passwd="Pr0yect0M4Ri0582",
    database="DomoticaEnCasa"
)
mycursor = mydb.cursor()
# AQUI SE REALIZA LA CONEXION CON ARDUINO
arduino = serial.Serial(port="/dev/" + sys.argv[1], baudrate=9600, timeout=.1)
time.sleep(2)
def write_read(x):
    arduino.write(bytes(x, 'utf-8'))    # MANDA A ARDUINO LO QUE SE HA ESCRITO AL ARCHIVO
					# QUE ES UN COMANDO PREVIAMENTE REGISTRADO EN ARDUINO
    time.sleep(1)
    data1 = arduino.readline() #AQUI LEE DATOS DESDE ARDUINO
    data = str(data1).replace("b","").replace("'","")
    Humedad = data[0:6]
    Temperatura = data[len(data)-7:len(data)]
    sql = "INSERT INTO HistorialTemperatura values(NULL,%s,%s)"
    val = (Temperatura,Humedad)
    mycursor.execute(sql,val)
    mydb.commit()
#    time.sleep(1)
    time.sleep(0.05)
    return data

time.sleep(1)
value = write_read('mostrar_valores')


while True:
    time.sleep(0.5)
    try:
        with open("fichero.txt") as f:
            firstline = f.readline().rstrip()
            print (firstline)
        value = write_read(firstline)
        time.sleep(0.5)

        print(value)
        f.close
        remove("fichero.txt")
    except:
        print()
