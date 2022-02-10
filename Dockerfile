FROM debian:latest
WORKDIR /app
MAINTAINER NewstarCorporation
RUN apt-get install -y httpd
COPY . /var/www/html/
CMD [“/usr/sbin/httpd”, “-D”, “FOREGROUND”]
EXPOSE 80


