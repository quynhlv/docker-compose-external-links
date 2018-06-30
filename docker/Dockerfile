FROM php:7.1-apache
RUN apt-get update && apt-get install -y vim \
    git \
    libpng-dev \
    libmagickwand-dev \
    libmagickcore-dev \
    imagemagick \
    mysql-client \
    && docker-php-ext-install gd \
    && docker-php-ext-install pdo pdo_mysql \
    && pecl install imagick  \
    && docker-php-ext-enable imagick \
    && docker-php-ext-install zip \
    && docker-php-ext-install bcmath \
    && docker-php-ext-install fileinfo \
    && docker-php-ext-install mbstring


RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php');" \
    && mv composer.phar /usr/local/bin/composer

RUN a2enmod rewrite