FROM debian:latest
WORKDIR /app
MAINTAINER NewstarCorporation
RUN apt-get update
RUN apt-cache search apache2
RUN apt-get install apache2
COPY . /var/www/html/
CMD [“/usr/sbin/httpd”, “-D”, “FOREGROUND”]
EXPOSE 80


