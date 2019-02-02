# Hello Golf

Crud data on a table.

##Tasks:

1 [] Show all scores in a table
	-Select Query
	-Loop through data and output
	-Clean up
2 [] Move to a class
3 [] Add new Score
4 [] Delete a score
5 [] Update a score

## Setup

- Make sure you have php-mysql installed + mysql servr running (sudo service mysql start)
- Create DB. mysql -uroot -ppassword <<< "create database golf;"
- Run DB script.  mysql -uroot -ppassword golf< sql/dump_1.sql
- Run php dev server with ./run.sh 