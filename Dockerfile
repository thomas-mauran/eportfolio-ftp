FROM nginx
COPY . /usr/share/nginx/html
RUN rm /usr/share/nginx/html/index.html
#RUN apt-get install php7.0-imap
#RUN service php7 restart
#RUN service nginx restart
