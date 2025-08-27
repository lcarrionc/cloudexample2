# determinamos que estamos trabajando con una imagen de php
FROM php:8.1-apache

# Instalar las dependencias necesarias para trabajr con postgresql
RUN apt-get update && apt-get install -y \
	libpq-dev \
	&& docker-php-ext-install pdo pdo_pgsql pgsql

# copiar el contenido de mi app dentro del contenedor que vamos a crear
COPY . /var/www/html/

# exponer el puerto 80    
EXPOSE 80

CMD [ "apache2-foreground" ]