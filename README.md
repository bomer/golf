# Hello Golf

Crud data on a table.

## Tasks:

- [x] Show all scores in a table
	- Class created for scores.
	- Server details set as private vars on that class (this can be moved to a DB class later)
	- Get query moved into a getScores function.
	- Remove JSON Encode and moved to just a return function. 
	- Added a utils file and code to turn an associate array into a html table on the screen
	- added some CSS to make page dark because its 2am.
- [] Add new Score
	- Create a Show Form function, to output a new form with out fields
	- Add each field, with name + Type.
	- Make sure to match the name attrib on each input to our data. If no name it wont come through
	- Add a button in the form with type=submit. This will make the page reload as a post request with the data of our form in it
	- Create an add score function, that will process this data when recieved if the page is a post request.
	- To do this, we need to make sure method="post" is added.

- [] Delete a score
- [] Update a score

## Setup

- Make sure you have php-mysql installed + mysql servr running (sudo service mysql start)
- Create DB. mysql -uroot -ppassword <<< "create database golf;"
- Run DB script.  mysql -uroot -ppassword golf< sql/dump_1.sql
- Run php dev server with ./run.sh 