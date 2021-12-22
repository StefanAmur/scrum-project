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


