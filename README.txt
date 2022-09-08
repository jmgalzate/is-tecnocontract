This is an artesanal framework created with the help of the course: 
    https://traversymedia.com/ -> PHP MVC OOP - Build a Framework

Also, I used this playlist on youtube for understanding some missing details and to learn how to configure the NGINX server for friendly URLs
    https://youtube.com/playlist?list=PLYAyQauAPx8kAYP58iJdvR0KohbOc4IEG

Relevant information about the construction for this application: 
- Created on Ubuntu 22.0
- PHP version: PHP8.1-fpm
- Server: NGINX 1.18.0
- MySQL: 
- Framework: MVC - artesanal creation (pure PHP)
- Bootstrap 5

Altough the application is constructed for spanish speakers, I decided to create the comments in English because of stantards. 

Inside docker file: 

mysql: it's de script for create the database and insert some test information
php: it's the php.ini configured for working with nginx and xdebug (optional). This php.ini should be copy into the php conf folder, in my case it was /etc/php/8.1/fpm/
nginx: it's the site configuration. This config file should be pasted on the nginx sites folder, in my case it was /etc/nginx/sites-available/, and then create a simlink file to the folder /etc/nginx/sites-enabled