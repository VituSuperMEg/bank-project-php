# Use a imagem oficial do PHP com Apache e PHP 8.1
FROM php:8.1-apache

# Instale as extensões PHP necessárias e o cliente PostgreSQL
RUN apt-get update && \
    apt-get install -y libpq-dev && \
    docker-php-ext-install pdo pdo_pgsql

# Atualize as permissões para o usuário do Apache
RUN chown -R www-data:www-data /var/www/html
