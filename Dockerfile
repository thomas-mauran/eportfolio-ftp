FROM nginx
COPY . /usr/share/nginx/html
RUN apt-get install php5-common php5-cli php5-fpm
RUN service php5-fpm restart
RUN service nginx restart
