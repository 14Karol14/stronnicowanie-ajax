drop database if exists pagination1;

create database if not exists pagination1;

use pagination1;

create table ulice (
    id int primary key auto_increment,
    nazwa text
);

insert into
    ulice (nazwa)
values
    ("Pierwsza"),
    ("Druga"),
    ("Trzecia"),
    ("Pierwsza"),
    ("Druga"),
    ("Trzecia"),
    ("Pierwsza"),
    ("Druga"),
    ("Trzecia"),
    ("Pierwsza"),
    ("Druga"),
    ("Trzecia"),
    ("Pierwsza"),
    ("Druga"),
    ("Trzecia"),
    ("Pierwsza"),
    ("Druga"),
    ("Trzecia"),
    ("Pierwsza"),
    ("Druga"),
    ("Trzecia"),
    ("Pierwsza"),
    ("Druga"),
    ("Trzecia"),
    ("Pierwsza"),
    ("Druga"),
    ("Trzecia"),
    ("Pierwsza"),
    ("Druga"),
    ("Trzecia");