FROM nginx:latest

# Supprimer le fichier de configuration par défaut
RUN rm /etc/nginx/conf.d/default.conf

COPY nginx.conf /etc/nginx/nginx.conf

# Créer le répertoire pour les fichiers HTML
RUN mkdir -p /var/www/html/www
RUN mkdir -p /var/www/html/blog

COPY html/www /var/www/html/www
COPY html/blog /var/www/html/blog

# Exposer le port 80
EXPOSE 80
