FROM ubuntu:latest

RUN apt-get update && apt-get install -y apache2 php libapache2-mod-php

EXPOSE 80

CMD ["apachectl", "-D", "FOREGROUND"]