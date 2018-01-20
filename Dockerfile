FROM nimmis/apache-php5

ADD index.php /var/www/index.php

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

RUN rm /var/www/html/index.html

EXPOSE 80

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
