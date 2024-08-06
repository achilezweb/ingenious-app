# Dockerfile
FROM sail-8.3/app

# Copy the SSL certificates into the container
COPY ./ssl/laravel.test.crt /etc/ssl/certs/laravel.test.crt
COPY ./ssl/laravel.test.key /etc/ssl/private/laravel.test.key

# Copy the custom Caddyfile
COPY ./Caddyfile /etc/caddy/Caddyfile
