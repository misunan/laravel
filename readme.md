
### Application Web Laravel simple avec fonctions CRUD (Create, Read, Update, Delete)

Installation Vagrant et VirtuelBox 5.2 et Laravel

* installer Laravel
- Install PHP 7.2 on Ubuntu
- PHP 7.2 => https://tecadmin.net/install-php-7-on-ubuntu/#

* Exécutant cette commande depuis Terminal:

	sudo apt-get install python-software-properties
	sudo add-apt-repository ppa:ondrej/php
	sudo apt-get update
	sudo apt-get install -y php7.2


    Nous avons besoin de composer pour installer tous les paquets. Voici l'instruction complète pour installer le compositeur
    - composer => https://getcomposer.org/download/

    sudo apt install zip
    composer create-project --prefer-dist laravel/laravel ./

    * Config

    Modifier : export APACHE_RUN_USER = < nom de user >

    Modifier :  /etc/apache2/sites-available/000-default.conf => DocumentRoot   

    Ajouter : /etc/apache2/sites-available/000-default.conf

                <Directory /var/www/html/public>   
                Options Indexes FollowSymLinks Multiviews
                AllowOverride All
                Order allow,deny
                allow from all
        	    </Directory>

    activer le module : a2enmod rewrite



### Laravel CRUD simple (Create, Read, Update, Delete) ###

/**** Mon site accueil : http://192.168.33.10/main ****/


* Installation

-Télécharger ou cloner ce référentiel

	git clone https://github.com/misunan/laravel.git

-Nom de Database - laravel

-Créer une nouvelle base de données

	php artisan migrate
