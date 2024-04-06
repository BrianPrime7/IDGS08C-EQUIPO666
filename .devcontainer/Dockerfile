FROM debian:bullseye-slim

ARG DEBIAN_FRONTEND=noninteractive

# Copiar el archivo php.ini al contenedor
COPY php.ini /tmp

# Actualizar el sistema y instalar paquetes necesarios
RUN apt-get update -yq \
    && apt-get install -yq \
        curl \
        git \
        imagemagick \
        nano \
        openssh-server \
        sqlite3 \
        wget \
        unzip \
    && sed -i 's/<policy domain="coder" rights="none" pattern="PDF" \/>/<policy domain="coder" rights="read|write" pattern="PDF" \/>/g' /etc/ImageMagick-6/policy.xml \
    # Agregar fuentes PHP actualizadas
    && curl -sSL https://packages.sury.org/php/README.txt | bash -x \
    # Instalar PHP CLI y extensiones
    && apt-get install -yq \
        php8.2-dev \
        php8.2-apcu \
        php8.2-curl \
        php8.2-gd \
        php8.2-imagick \
        php8.2-mbstring \
        php8.2-sqlite3 \
        php8.2-zip \
        php8.2-intl \
        php-pear \
    # Configurar PHP Pear
    && pear config-set php_ini /etc/php/8.2/cli/php.ini \
    # Instalar Xdebug
    && pecl install xdebug \
    # Agregar configuraciones personalizadas de php.ini
    && cat /tmp/php.ini >> /etc/php/8.2/cli/php.ini \
    # Instalar NodeJS LTS
    && curl -sL https://deb.nodesource.com/setup_lts.x | bash \
    && apt-get install -yq nodejs \
    # Instalar Composer
    && wget https://getcomposer.org/installer \
    && php installer --install-dir=/usr/local/bin --filename=composer \
    # Limpiar la caché de apt
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Definir el usuario de trabajo
USER root
