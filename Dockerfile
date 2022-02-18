FROM nginx
COPY . /usr/share/nginx/html
RUN rm /usr/share/nginx/html/index.html
RUN apt-get update
RUN apt install php-fpm -y
RUN service php7.4-fpm start
#RUN apt-get install php7.0-imap
#RUN service php7 restart
#RUN service nginx restart
