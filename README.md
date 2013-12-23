Web tutorial de PostgreSQL en su versión 2.1

**Nuevos Cambios**
- Se aplico un nuevo tema el cual se llama abound
- Contiene yii yii-1.1.14 siendo esta la versión más actualizada de dicho framework
- Contiene Yiibooster 2.0 
- URL Limpias


**Como instalarlo**

Alojarlo en nuestro archivo www y darle los permisos necesarios, puede darle permisos
solo a estos archivos no es necesario aplicarle un chmod -R 777 a todo el proyecto.

-Archivo assets
chmod -R 777 assets/

- Archivo runtime
chmod -R 777 proteged/runtime/

**Configuración de apache para las URL Limpias**

En esta versión se ha aplicado algo fantastico que nos permite Yii Framework realizar, es 
el uso de las URL limpias atravéz de un archivo .htacces que agregamos en el directorio 
principal de nuestro proyecto.

Proceso de configuración de nuestro Servidor Apache
1) Aplicamos el siguiente comando para reescribir nuestro configuración de nuestro servidor

	a2enmod rewrite

2) Con nuestro editor vim editamos el siguiente archivo de nuestro apache 

	vim /etc/apache2/sites-available/default
Nuestro archivo se encuentra de la siguiente manera, solo debemos cambiar todos los None que contiene 
dicho archivo, para que nuestro archivo quede de la siguiente manera

<VirtualHost *:80>
	ServerAdmin webmaster@localhost

	DocumentRoot /var/www
	<Directory />
		Options FollowSymLinks
		AllowOverride All
	</Directory>
	<Directory /var/www/>
		Options Indexes FollowSymLinks MultiViews
		AllowOverride All
		Order allow,deny
		allow from all
	</Directory>

	ScriptAlias /cgi-bin/ /usr/lib/cgi-bin/
	<Directory "/usr/lib/cgi-bin">
		AllowOverride All
		Options +ExecCGI -MultiViews +SymLinksIfOwnerMatch
		Order allow,deny
		Allow from all
	</Directory>

	ErrorLog ${APACHE_LOG_DIR}/error.log

	# Possible values include: debug, info, notice, warn, error, crit,
	# alert, emerg.
	LogLevel warn

	CustomLog ${APACHE_LOG_DIR}/access.log combined

    Alias /doc/ "/usr/share/doc/"
    <Directory "/usr/share/doc/">
        Options Indexes MultiViews FollowSymLinks
        AllowOverride All
        Order deny,allow
        Deny from all
        Allow from 127.0.0.0/255.0.0.0 ::1/128
    </Directory>

</VirtualHost>
 
Como se observa en el archivo anterior todos los AllowOverride None los hemos cambiado a AllowOverride All

3) Reiniciar el servicio de apache

como Super Usuario o Root!!!

/etc/init.d/apache2 restart

Con esto nuestra aplicación se nos mostrara ya que si en esta configuración Cóndor no lograra visualizar



	

