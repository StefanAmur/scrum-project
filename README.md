# scrum-project
### Team : 
- Lakneswaran (frontend and backend)
- Binayak (Frontend)
- Christiaan (Backend)
- Shreejan (backend)
- Stefan (Backend)


## Project : Recreate E-bay - deadline : 7th January 2022 (3 weeks)

## Languages: 

### Frontend : Html  (Angular) 
### Stylesheet : Bootstrap (Angular Material UI) 

## Backend : PHP 

## Project description:

## We need to create a page for people who can sell/buy products.
* Page nav with products and categories of products and login and register.
* Without login they can’t sell or buy the products, but they can search and find information about the product.
* Requirement to sell: after clicking on Register form with username, password, email adress, and some information. Send.
* Go to main page where he/she can log in with that username/email adress and password.
* Go to their own page with their username. Example : www.ebay.com/Lakneswaran
* On that page he/she can put products to sell.
* When add product button clicked. A form with Name, price, quantities , category,  image of the product. Appear click ok.
* When click ok then the product, It add it on the database and from the database the browser pull the products. 
* then appear on the page of Lakneswaran.
* Each products on the page should have checkbox, delete, copy, edit  button.
* After you have selected the all products you want to sell click on the add button. 
* SO now the products ready to sell.

* Requirement for buy: After login in with your username and password you can buy products.
* When you select the quantities and clicked on add to cart. 
* It add to chart.
* When you clicked on chart logo => you go to the checkout page.
* On the checkout page you can see the products you want to buy and total price of each product and total.
* When you click on checkout => it goes to payment page. 


# Database example:


| Product name  |  Quatities | Catergory | Price | Date      | User id |
| ------------- | ---------- |---------- |------ |---------- | ------- |
|  Blue pen     |      20    |  Office   | €2.50 |20/12/2021 |Shreejan |
|  Blue pen     |      40    |  School   | €1.50 |18/12/2018 |Laknesh  |

<!--User ID depends on username who is adding the products on their page.  --> 

Logbook : 
* Day 1 : Group separated, Spoken met Tom about the project. He wants to recreate Ebay to products selling and buying all over world(territories needs to be discussed ) with this webpage. Worked with Trello for split up tasks. repo created in Github. Database created with basic requirements in myphpadmin. Questions for Tom brainstorming and preparing for tomorrow.

* Day 2: - standup talk(live) What we have done yesterday a preview and review about it and brainstormed next tasks.
- Modified database,  everyone has access to database 
- Created dotenv file, DataLoader in model
- Created .env
- Product class - Stefan - Finished
- User Class - Sreejan - Finished
- Catagory Class - Lakneswaran - Finished
- Order Class - Binayak - Finished
- Mail to Tom question about the project - Christiaan
- Admin class - Lakneswaran - Finished
- Checked Class after pull request and merged.
- updated Day 2 log.

We have talked about the github merging, pull request, env file, agreed cameelCase using entire project.


Day 3

Standup meeting : splited everyone to create their own controller for the class.
Biniyak finished with Ordercontroller - working
Full day - introduction of Symfony

Day 4

Stand up meeting:  we took decision to work with Symfony as Backend.
Pull request controlled and what we done till now are updated in Github.
Installation Composer and Symfony. 
- Sreejan and Christian are not doing well. He is doing further with the controller of userClass.
- Finished the controller
- Lakneswaran and Stefan encounter error’s in Database - fixed with installation HeidiSQL.
- Stefan and Binayak installed composer and symfony.
- Lakneswaran Finshed with CategoryLoder en tested database php - working.
- Standup meeting at the end of the Day: Rechanging workflow.

Day 5

Stand up meeting: Talked with Sreejan about the changes of the workflow and Symfony.
- Category pushed in github - Controlled. Files of main up to date of everyone. 
- Sreejan and Lakneswaran Installed Symfony and composer. Error fiksed with the group.
-localhost:9003 (through xdebug.client_host/xdebug.client_port) :-( =>
Solution : xdebug.log_level=0 was the solution for me. Go to the xampp ->php->php.ini paste it below and save. Then start with composer installation. Working. 
- Symfony experiment day. Requirement to finish after this weekend are need to share their experience with the group what they have learned about their own project. 
- New task updated on Trello.
-28/12/2021 is deadline for basic requirement for Backend. Lakneswaran and Binayak will start on 03/01/2022 with the fontend. The rest will working with “nice to have” in Backend.
- The name Tom wants for this project doesn’t agree with the team. So planning to give a Better name. Finish on Next Monday.
- Stand up meeting at the end of day : 



What is Symfony? 

- Sympony is a PHP web application framework and a set of reuasable PHP components/libararies. => to creat Websites and web application.
- It’s also Open-souce, replace repetitive codingtext. Like laravell
- Folder structure => APP, Bin, src, var, vendor and web.
- App folder - configuration->Parameters, Resources ->frontend view folder create in this. 
-Bin - Console php command promt can be user here.
- src - controller and model(entity)
- var - cache -developing and Production; logs-performs stores here; session-Log in  and log out
- vendor - Third parties library like php excel,fdf,...
- web - app.php -> production app_dev.php -> development. 

Symfony controllers

- Controller is responsible for handling each request that comes into symfony application. 
- User request -> controller response. 
- By default we get DefaultController class => “src/AppBundle/Controlleré 

<?php

Namespace appBundle/controller;
Use sympony\..\Controller;
Use ./response;
Class DefaultController extends Controller{} ?>

Base framework functionality. 

Symfony - Routing

- Routing maps request to a specific controllers method. In URI has the following three parts

. Hostname segment => website name www.blac.com
. Path segment => what page ex. index
. Query segment => we are sending data with URI.

Symfony - View Engine

- A view layer is the presentation layer of the MVC application. It separates the application logic from the presentation logic. 

App/resources/View/

Symfony uses a powerful template language called twig. Twig allows you to write concise and readable templates in a very easy manner. Twig won’t process PHP tags. 

Symfony - View engine 

{{   }} - prints a variable 
{% %} - Execute a function. If/for condition or to set variable.
{# #} - comments

What is Doctrine? 

- Doctrine 2 is an object-relational mapper (ORM) for PHP 71+ that provides transparent persistence for PHP objects. 
Php object code -> create table, database.
