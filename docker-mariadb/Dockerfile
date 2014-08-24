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
  echo "deb http://mariadb.mirror.iweb.com/repo/10.1/ubuntu `lsb_release -cs` main" > /etc/apt/sources.list.d/mariadb.list && \
  ln -fs /bin/true /usr/bin/chfn && \
  apt-get update && \
  DEBIAN_FRONTEND=noninteractive apt-get install -y mariadb-server && \
  sed -i 's/^\(bind-address\s.*\)/# \1/' /etc/mysql/my.cnf && \
  echo "mysqld_safe &" > /tmp/config && \
  echo "sleep 5" >> /tmp/config && \
  echo "mysql -e 'GRANT ALL PRIVILEGES ON *.* TO \"root\"@\"%\";'" >> /tmp/config && \
  bash /tmp/config && \
  rm -f /tmp/config

## Expose ports
EXPOSE 3306

## Run
CMD mysqld_safe
