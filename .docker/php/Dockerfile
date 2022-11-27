FROM php:8.1-apache

RUN apt-get update && apt-get upgrade -y && apt-get install -y  \
  git \
  nano \
  zip unzip libzip-dev

RUN docker-php-ext-install zip && docker-php-ext-enable zip
#RUN docker-php-ext-install pcntl

#RUN pecl install mcrypt-1.0.1 && docker-php-ext-enable mcrypt
#RUN pecl install xdebug-2.9.1 && docker-php-ext-enable xdebug \
#    && echo "xdebug.remote_port=9001" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
#    && echo "xdebug.remote_enable=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
#    && echo "xdebug.remote_connect_back=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
#    && echo "xdebug.idekey=\"PHPSTORM\"" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
#    && echo "xdebug.remote_autostart=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
#    && echo "xdebug.remote_log=/tmp/xdebug.log" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
#    && echo "xdebug.profiler_enable_trigger=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
#    && echo "xdebug.profiler_output_dir=/var/www/.docker/xdebug_profiler/" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
#    && echo "xdebug.var_display_max_depth = -1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
#    && echo "xdebug.var_display_max_children = -1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
#    && echo "xdebug.var_display_max_data = -1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

RUN curl -sS https://getcomposer.org/installer | \
    php -- --install-dir=/usr/bin/ --filename=composer
ENV COMPOSER_ALLOW_SUPERUSER=1

#ADD ./.docker/php/php.ini /usr/local/etc/php/php.ini

RUN usermod -u 1000 www-data

WORKDIR /var/www