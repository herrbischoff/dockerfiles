#
# nginx
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
ADD nginx-1.7.4-binary.tar.gz /
RUN rm -rf /usr/local/nginx/conf/
ADD conf /usr/local/nginx/conf/

## Expose ports
EXPOSE 80

## Set working directory
WORKDIR /usr/local/nginx

## Run
CMD sbin/nginx
