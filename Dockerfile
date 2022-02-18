FROM nginx
COPY . /usr/share/nginx/html
RUN apt-get install php7.0-imap
RUN service php7 restart
RUN service nginx restart
