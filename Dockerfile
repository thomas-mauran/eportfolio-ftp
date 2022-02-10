FROM debian:latest
WORKDIR /app
MAINTAINER NewstarCorporation
RUN apt install apache2
COPY . /var/www/html/
CMD [“/usr/sbin/httpd”, “-D”, “FOREGROUND”]
EXPOSE 80


