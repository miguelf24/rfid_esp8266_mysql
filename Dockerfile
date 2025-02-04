# Usa una imagen oficial de PHP con Apache
FROM php:8.1-apache

# Instala extensiones necesarias para MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copia los archivos PHP al servidor
COPY . /var/www/html/

# Exponer el puerto 80 para acceso web
EXPOSE 80

# Inicia Apache
CMD ["apache2-foreground"]
