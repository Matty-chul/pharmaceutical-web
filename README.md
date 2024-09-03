# "Online" Pharmaceutical Database
## Personal project implementing a web interface for a pharmaceutical database using MySQL and PHP technologies.

### Application Description

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
- "medicamente" table, describing a drug by assigning it an ID, a name, a manufacturing date and an expiry date;
- "farmacie" table, describing a drugstore by assigning it an ID, a name, an address and an estabilishment date;
- "producatori" table, describing drug manufacturers by assigning them an ID, a name, a country of origin and an address;
- "contracte" table, describing contracts estabilished between manufacturers and drugstores with intention of procuring a certain drug; described by contract ID, drug ID, manufacturer ID and number of units procured;
- "resurse" table, describing the cumulative storage of drugs for all drugstores; described by resource ID, drugstore ID, drug ID, available stock and drugstore market price.

The database structure is as follows:

![image](https://github.com/user-attachments/assets/72fc5a72-81cb-4e93-920d-7a575ca8ebb5)


### Application Showcase

The database already has some mock values loaded up for interaction. Accessing **localhost/sqlbase** redirects the user to the home page.

![image](https://github.com/user-attachments/assets/5881667f-fc61-45c7-9b50-7319a44449f7)

Which prompts the user with a form and some drop-down options for avaliable actions in the database. Let's search the manufacturers database. The **rdir.php** will handle the user input and redirect us to the appropiate web page:

![image](https://github.com/user-attachments/assets/91d82736-fb7e-44df-9a34-79ec1c2a93ee)

Which provides a design layout that encapsulates the majority of the web pages developed for the interface. Each user action will prompt a form, collecting table relevant user input in order to prepare the query statement desired. Let's continue with a full display of the producers table:

![image](https://github.com/user-attachments/assets/a19bbae1-12a8-44ed-a62b-3877d0a5a160)

Here, we can notice on table row no. 3 a rather "suspicious" manufacturer whose contracts need to be terminated. This table row will serve as an example for deletion.

In the contracts table we can also observe that the suspicious manufacturer has a contract associated with a drugstore, presented in the second row:

![image](https://github.com/user-attachments/assets/58f9219c-cd38-468b-bf07-f391d3640d79)


Upon returning home, we select a DELETE action in the manufacturers table:

![image](https://github.com/user-attachments/assets/1e840684-e1f7-421e-8366-acd1f60b3e7f)

The follow-up action in the image above will execute a DELETE query using the "Shady Producer" denominator. Recall that Shady Producer's manufacturer ID = 3. Following up with another SEARCH query based on this specific ID, the producers table returns the following output:

![image](https://github.com/user-attachments/assets/33e1531d-4151-45f9-a5e5-045645fc5c8f)

Indicating the fact that the "Shady Producer" in question has been succesfully deleted. This action also relevantly deleted the contract associated with the "Shady Producer":

![image](https://github.com/user-attachments/assets/e87f9943-1039-494d-8a2b-b57b53a0c87c)

Lastly, we will perform an INSERT query to demonstrate its functionality on the drugs table.






