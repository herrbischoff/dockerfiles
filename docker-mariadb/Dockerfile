#
# MariaDB
#

## Base image to use
FROM ubuntu:14.04

## Maintainer info
MAINTAINER bubblun <https://bitbucket.org/bubblun>

## Update base image
RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get dist-upgrade -y

## Install and setup
RUN \
  apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv 0xcbcb082a1bb943db && \
  echo "deb http://mariadb.mirror.iweb.com/repo/10.0/ubuntu `lsb_release -cs` main" > /etc/apt/sources.list.d/mariadb.list && \
  ln -fs /bin/true /usr/bin/chfn && \
  apt-get update && \
  apt-get install -y mariadb-server
ADD my.cnf /etc/mysql/conf.d/my.cnf
RUN chmod 664 /etc/mysql/conf.d/my.cnf
ADD run /usr/local/bin/run
RUN chmod +x /usr/local/bin/run

VOLUME ["/var/lib/mysql"]

EXPOSE 3306

CMD ["/usr/local/bin/run"]
