FROM php:8.1-apache

# Instalar extensiones necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar archivos PHP al servidor
COPY . /var/www/html/

# Exponer el puerto 80 para acceso web
EXPOSE 80

# Asegurar que Apache se inicia correctamente
ENTRYPOINT ["apache2-foreground"]
