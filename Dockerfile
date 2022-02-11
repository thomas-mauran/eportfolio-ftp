FROM debian:latest
WORKDIR /app
MAINTAINER NewstarCorporation
RUN apt-get update
RUN apt-cache search apache2
RUN apt-get install -y apache2
COPY . /var/www/html/
EXPOSE 80 CMD [“apache2ctl”, “-D”, “FOREGROUND”]



