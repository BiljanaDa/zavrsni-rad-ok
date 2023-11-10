CREATE DATABASE blog;

USE blog;

create table posts(id int auto_increment, 
title varchar(255) not null, 
body text not null, 
author varchar(100) not null, 
created_at date not null, 
primary key(id));


insert into posts (title, body, author, created_at) values 
('SQL', 'Structured Query Language (SQL) is a domain-specific language used in programming and designed for managing data held in a relational database management system (RDBMS), or for stream processing in a relational data stream management system (RDSMS). It is particularly useful in handling structured data, i.e., data incorporating relations among entities and variables.', 'Donald', '1970-01-01'), 
('PHP', 'PHP is a general-purpose scripting language geared towards web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is now produced by the PHP Group. PHP was originally an abbreviation of Personal Home Page, but it now stands for the recursive initialism PHP: Hypertext Preprocessor.', 'Rasmus', '1993-02-02'), 
('JavaScript', 'JavaScript, often abbreviated as JS, is a programming language that is one of the core technologies of the World Wide Web, alongside HTML and CSS. As of 2023, 98.7% of websites use JavaScript on the client side for webpage behavior, often incorporating third-party libraries. All major web browsers have a dedicated JavaScript engine to execute the code on users devices.', 'Brendan', '1995-12-04');