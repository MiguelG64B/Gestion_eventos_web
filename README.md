# Gestion eventos web

Universidad Simón Bolívar sede Cúcuta

Programa: Ingeniera de sistemas

Materia: Electiva profesional I

Año: 2022


Integrantes: 

EDGAR MIGUEL BERMUDES HERNANDEZ

CRISTIAN GIOVANNI JAIMES DIAZ

DANIEL ROMARIO JAIMES BAUTISTA

YEINTON ALEXANDER PEREZ GODOY


Como utlizar (Manera local): 

1.Descargar el zip 

2.Insertar en el htdocs C:\xampp\htdocs 

3.Descargar la aplicacion "Papercut-SMTP" de ChangemakerStudios
https://github.com/ChangemakerStudios/Papercut-SMTP

Papelcut ahorra el proceso de configurar el mercury mail 
y nos permite recibir los correo de manera local

4. Activa el xampp y crea una nueva base de datos con el nombre "parical3" en phpMyAdmin http://localhost/phpmyadmin/
5. Importa el documento sql llamado "parcial3.sql" que se encuentra en el mismo proyecto 
6. Ya puedes ver y probar las funciones del proyecto http://localhost/android/

Como utlizar (Hosting):

1.Descargar el zip 

2.Ingresa al phpmyadmin del hosting y crea una DB "parical3", importa el archivo "parcial3.sql" inserta en nombre de la BD, Usuario Y contraseña, en los siguentes archivos:
/php/conn.php
/php/conexion.php
/conexion.php

2.Insertar en el controlador de archivos

3.Configurar archivo correo_recordartorio.php en la linea 24 y 28 "$from = 'correo@dominio.com'"

4.Ya puedes ver y probar las funciones del proyecto en tu domino


Prueba montado en un hosting 

https://neutroshorty.xyz/


Acceder como administrador:

Correo: prueba2@gmail.com

Contraseña: 12345    

Acceder como cliente:

Correo: prueba@gmail.com

Contraseña: 12345
