FROM centos:latest
WORKDIR /app
MAINTAINER NewstarCorporation
RUN yum -y install httpd
COPY . /var/www/html/
CMD [“/usr/sbin/httpd”, “-D”, “FOREGROUND”]
EXPOSE 80

FROM centos:latest
COPY --from=build /app /app
WORKDIR /app

