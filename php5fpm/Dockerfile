#
# php5-fpm
#

FROM       debian:wheezy
MAINTAINER bubblun <https://github.com/bubblun>

ENV DEBIAN_FRONTEND noninteractive

## Make sure system is up-to-date
RUN \
  apt-get update && \
  apt-get -y upgrade && \
  apt-get -y dist-upgrade

## Create locale
RUN \
  apt-get -y install locales && \
#  dpkg-reconfigure locales && \
  echo "en_US.UTF-8 UTF-8\nen_US ISO-8859-1" >> /etc/locale.gen && \
  locale-gen

## Set environment variables
ENV LANG en_US.UTF-8
ENV LANGUAGE en_US.UTF-8
ENV LC_ALL en_US.UTF-8
ENV HOME /root

## Install and setup
RUN apt-get -y -f install php5-fpm php5-cli php5-mysql php5-mcrypt php5-curl curl php5-gd php5-intl php-pear php5-imagick php5-imap php5-mcrypt php5-memcache php5-ming php5-ps php5-pspell php5-recode php5-snmp php5-sqlite php5-tidy php5-xmlrpc php5-xsl snmp
RUN rm /etc/php5/fpm/pool.d/www.conf
ADD www.conf /etc/php5/fpm/pool.d/www.conf
RUN mkdir /var/www

## Expose ports
EXPOSE 9000

## Set working directory
WORKDIR /var/www

## Setup
ADD run /tmp/run

## Run
CMD /tmp/run
