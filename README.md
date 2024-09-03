# "Online" Pharmaceutical Database
## Personal project implementing a web interface for a pharmaceutical database using MySQL and PHP technologies.

### Application description

This README file serves as a demonstration of the functionalities of a pharmaceutical database run on a local web server. However, with some setting up, it can be run on any local machine.

Prerequisites:

- XAMPP web server solution installed, namely the Apache and MySQL service modules;
- Importation of the pharmaceutical database. To do so, simply import the **pharma_db.sql** schema file in the **localhost/phpmyadmin** under the **import** section using default settings, once the service modules are up and running.

Application structure:

- **dbh.inc.php** handles the database connection protocols;
- **rdir.php** redirects the input requests to the appropiate web pages;
- **formhandler.inc.php, delhandler.php, updhandler.php** handle INSERT, DELETE and UPDATE queries, respectively;
- **inserters, deleters, updaters, searchers_viewers** folder contain forms that collect user input for INSERT, DELETE, UPDATE and SEARCH queries, respectively, organized per schema table;
- **styles** folder includes the .css files used for stylizing the website.

The pharmaceutical database is comprised of the following tables:
- medicamente table, describing a drug by assigning it an ID, a name, a manufacturing date and an expiry date;
- farmacie table, describing a drugstore by assigning it an ID, a name, an address and an estabilishment date;
- producatori table, describing drug manufacturers by assigning them an ID, a name, a country of origin and an address;
- contracte table, describing contracts estabilished between manufacturers and drugstores with intention of procuring a certain drug; described by contract ID, drug ID, manufacturer ID and number of units procured;
- resurse table, describing the cumulative storage of drugs for all drugstores; described by resource ID, drugstore ID, drug ID, available stock and drugstore market price.

  ![image](https://github.com/user-attachments/assets/72fc5a72-81cb-4e93-920d-7a575ca8ebb5)
