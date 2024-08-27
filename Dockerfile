# Usa un'immagine PHP con Apache
FROM php:7.4-apache

# Installa l'estensione MySQLi per PHP
RUN docker-php-ext-install mysqli

# Copia il codice sorgente nella cartella di Apache
COPY src/ /var/www/html/

EXPOSE 80