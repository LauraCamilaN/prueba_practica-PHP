# Requisitos
Para poder ejecutar el proyecto sin problema alguno deberá de tener instalado las siguientes versiones en su sistema:
1.	PHP 8.2.0 
2.	Composer 2.7.6
   
# Instalación
1.	Realizar la respectiva clonación del proyecto: https://github.com/LauraCamilaN/prueba_practica-PHP.git por medio de GitHub.
2.	Instalar composer ejecutando el siguiente comando: <b>composer install –prefer-dist –optimize-autoloader</b>
3.	Copiar el archivo .env.example con el nombre de .env, puede utilizar el comando <b>cp .env.example .env</b>
4.	Generar key con el siguiente comando: <b>php artisan key:generate</b>
5.	Realizar la respectiva configuración del .env, podrá encontrar información sobre esto a continuación.
6.	Dar permisos a carpetas, ejecutando los siguientes comandos: <br>
<b>chmod -R 777 vendor</b> <br>
<b>chmod -R 777 storage</b> <br>
<b>chmod -R 777 bootstrap</b> </br>
7.	Ejecutar migraciones y seeders con el comando: <b>php artisan migrate --seed</b>

# Configuración .env
Para realizar la respectiva configuración del archivo .env el bloque de código que necesitamos configurar, esto varia de acuerdo a nuestro gestor de base de datos y configuración de esta. Esta configuración la realizara en este bloque: <br><br>
<b>DB_CONNECTION=mysql</b> <br>
<b>DB_HOST=127.0.0.1</b> <br>
<b>DB_PORT=3306</b> <br>
<b>DB_DATABASE=laravel</b> <br>
<b>DB_USERNAME=root</b> <br>
<b>DB_PASSWORD=root</b> <br><br>
Ya con estos cambios la configuración a la base de datos estaría realizada. 

# Credenciales
Las credenciales para ingresar al sistema son: <br>
•	<b>Email:</b> lauramirez099@gmail.com <br>
•	<b>Contraseña:</b> Lramirez123* <br>
