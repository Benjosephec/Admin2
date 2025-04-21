FROM ubuntu/bind9

COPY configFile/named.conf /etc/bind/named.conf
COPY configFile/l2-10.zone /etc/bind/zone/l2-10.zone
  
RUN apt-get update && apt-get -y install nano
RUN chown -R bind:bind /etc/bind/zone && chmod -R 770 /etc/bind/zone

CMD ["/usr/sbin/named", "-g", "-c", "/etc/bind/named.conf", "-u", "bind"]

