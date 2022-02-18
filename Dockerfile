FROM nginx
RUN rm /usr/share/nginx/html/index.html
RUN apt-get update
RUN apt install php-fpm -y
RUN service php7.4-fpm start
RUN mkdir -p /var/www/thomasprojects.works
RUN chown -R www-data:www-data /var/www/thomasprojects.works
RUN chmod -R 755 /var/www/thomasprojects.works
COPY . /var/www/thomasprojects.works
RUN echo "server {
    listen 80;
    server_name thomasprojects.works;

    root /var/www/thomasprojects.works;
    index index.php;

    location ~ \.php$ {
        fastcgi_intercept_errors on;
        include        fastcgi_params;
        fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php7.4-fpm.sock;
    }
}" > /etc/nginx/conf.d/thomasprojects.works

#RUN apt-get install php7.0-imap
#RUN service php7 restart
#RUN service nginx restart
