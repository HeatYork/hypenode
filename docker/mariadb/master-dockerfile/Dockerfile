FROM mariadb:10.2

RUN apt-get update && \
	apt-get install -y curl && \
	apt-get -y clean

COPY start.sh /start.sh
#RUN mv /etc/mysql/config.cnf /etc/mysql/config.cnf.orig
COPY ./config.cnf /etc/mysql/

EXPOSE 3306 4567 4568 4444

#CMD ["start.sh"]