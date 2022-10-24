# Project Name
Practical work "CMS_SQL" project.

# Description
This project aimed to create a working content management system CMS using PHP ORM and Doctrine.
It is possible to display pages to the user from the MySQL server.
An admin panel can be created.
Ability to add a new page.
Created page delete function.
Created page edit function.

# Possible launch script
Download [XAMPP](https://www.apachefriends.org/index.html) and install it.
Download [MySQL Workbench](https://www.mysql.com/products/workbench/) and install it.
Download or clone the git repository CMS_SQL and place it in the htdocs directory (XAMPP).
Start XAMPP and start Apache and MySQL server.
Open the MySQL desktop and create a server with the following settings:

Server name: localhost
Username: root
There is no password, so leave it blank. If you add a password, configure bootstrap.php accordingly.

Open the MySQL desktop and import the code to create the database with the structure (the code comes with the sql file).
Install composer (installation instructions: [Composer](https://getcomposer.org/download)) and in the terminal:
if composer is installed locally on the console, type: php 'path to composer.phar file'/composer.phar install
if composer is installed globally on your system, type: composer install in the console
Open your browser and type in the search bar:

localhost/CMS_SQL/admin

A database with empty tables will be created at startup, or you can start MySQL Workbench before opening the project and run the provided SQL file (creates a database with tables and data).
Make sure the server data in the bootstrap.php file (servername, username, password) matches the server you created, otherwise you won't be able to run the project.
Add, remove, update pages as you see fit.

# Authors and Acknowledgments
I am very grateful to my mentors Vilius Ramulionis and Mindaugas Bernatavičius for their help in programming.

# Project status
Can be used but may be added in the future as there is work to be done.