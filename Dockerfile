FROM php:8.1-apache

# Instala extensiones necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copia los archivos PHP al servidor
COPY . /var/www/html/

# Exponer el puerto 80 para acceso web
EXPOSE 80

# Comando para iniciar Apache
CMD ["apache2-foreground"]
