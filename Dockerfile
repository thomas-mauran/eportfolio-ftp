FROM nginx
COPY . /usr/share/nginx/html
CMD "sudo apt-get install php5-common php5-cli php5-fpm"
CMD "sudo service php5-fpm restart"
CMD "sudo service nginx restart"
