FROM php:7.4-apache

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

RUN apt-get update
RUN apt-get install -y --no-install-recommends locales apt-utils git libicu-dev g++ libpng-dev libjpeg-dev libxml2-dev libzip-dev libonig-dev libxslt-dev libfreetype6-dev libjpeg62-turbo-dev libpng-dev zip;

RUN echo "en_US.UTF-8 UTF-8" > /etc/locale.gen && \
    echo "fr_FR.UTF-8 UTF-8" >> /etc/locale.gen && \
    locale-gen

RUN curl -sSk https://getcomposer.org/installer | php -- --disable-tls && \
   mv composer.phar /usr/local/bin/composer

RUN docker-php-ext-configure intl
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install pdo pdo_mysql gd opcache intl zip calendar dom mbstring gd zip xsl
RUN pecl install apcu && docker-php-ext-enable apcu

RUN echo "file_uploads = On\n" \
         "memory_limit = 500M\n" \
         "upload_max_filesize = 500M\n" \
         "post_max_size = 500M\n" \
         "max_execution_time = 600\n" \
         > /usr/local/etc/php/conf.d/uploads.ini

WORKDIR /var/www/