CREATE DATABASE blog;

USE blog;

create table posts(id int auto_increment, 
title varchar(255) not null, 
body text not null, 
author int, 
created_at date not null, 
primary key(id));


insert into posts (title, body, author, created_at) values 
('SQL', 'Structured Query Language (SQL) is a domain-specific language used in programming and designed for managing data held in a relational database management system (RDBMS), or for stream processing in a relational data stream management system (RDSMS). It is particularly useful in handling structured data, i.e., data incorporating relations among entities and variables.', 1, '1970-01-01'), 
('PHP', 'PHP is a general-purpose scripting language geared towards web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is now produced by the PHP Group. PHP was originally an abbreviation of Personal Home Page, but it now stands for the recursive initialism PHP: Hypertext Preprocessor.', 1, '1993-02-02'), 
('JavaScript', 'JavaScript, often abbreviated as JS, is a programming language that is one of the core technologies of the World Wide Web, alongside HTML and CSS. As of 2023, 98.7% of websites use JavaScript on the client side for webpage behavior, often incorporating third-party libraries. All major web browsers have a dedicated JavaScript engine to execute the code on users devices.', 1, '1995-12-04');

CREATE TABLE comments(
    id int auto_increment, 
    author varchar(100) not null, 
    text text not null,
    post_id int not null,
    primary key (id), 
    foreign key (post_id) references posts(id)
);

INSERT INTO comments(author, text, post_id) values ('Peter', 'JavaScript is a high-level, often just-in-time compiled language that conforms to the ECMAScript standard.', 3), 
('John', 'JavaScript engines were originally used only in web browsers, but are now core components of some servers and a variety of applications. The most popular runtime system for this usage is Node.js.', 3), 
('Anna', 'PHP code is usually processed on a web server by a PHP interpreter implemented as a module, a daemon or a Common Gateway Interface (CGI) executable', 2),
('Raymond', 'SQL became a standard of the American National Standards Institute (ANSI) in 1986 and of the International Organization for Standardization (ISO) in 1987.', 1);

CREATE TABLE users(
    id int auto_increment, 
    first_name varchar(100) not null, 
    last_name varchar(100) not null,
    primary key (id)
);

INSERT INTO users(first_name, last_name) values ('Pera', 'Peric');