FROM ubuntu:24.04

RUN apt update -y

RUN apt install -y wget unzip
ARG DEBIAN_FRONTEND=noninteractive
RUN apt-get install -y tzdata

RUN wget -q https://dl.google.com/linux/direct/google-chrome-stable_current_amd64.deb
RUN apt-get install fonts-liberation2 libasound2t64 libatk-bridge2.0-0 libcairo2 libcups2 libdbus-1-3 libdrm2 libexpat1 libgbm1 libglib2.0-0 libgtk-3-0 libnspr4 libnss3 libpango-1.0-0 libx11-6 libxcb1 libxcomposite1 libxdamage1 libxext6 libxfixes3 libxkbcommon0 libxrandr2 libcurl3-gnutls libcurl4 xdg-utils libu2f-udev libvulkan1 fonts-noto -y
RUN fc-cache -fv
RUN apt-get update -y && apt-get upgrade -y
RUN apt-get install libayatana-appindicator3-1 -y
RUN dpkg -i google-chrome-stable_current_amd64.deb
RUN apt -f install -y
RUN apt install apache2 php -y
RUN apt-get autoremove -y
COPY converthtmltopdf.php /var/www/html/converthtmltopdf.php
RUN chown -R www-data.www-data /var/www/html/

