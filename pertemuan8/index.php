<?php
/* Database & MySQL

Database
> Merupakan data di dalam DBMS-nya
> DBMS (Database Management System) adalah software untuk mengelola database, seperti;
    - Oracle
    - MySQL
    - SQL Server
    - PostgreSQL
    - MongoDB
> Jenis-jenis DBMS;
    - Relational DBMS
    - Hierarchical DBMS
    - Network DBMS
    - NoSQL
> Istilah-istilah dalam database
    - Field / Column 
    - Row / Baris / Record
    - Key
        ~ Primary Key 
        ~ Foreign Key
    - Auto Increament --- fitur untuk menambah satu-persatu tiap record masuk
    - Relationship --- hubungan antar table
    - Normalizationn--- sebuah proses untuk membuat table di dalam database itu normal

MySQL
> di dalam MySQL ada beberapa tipe data untuk menampung text:
    1. char / character
    2. varchar
> Sintaks;
    show databases;
    drop database phpdasar;
    show tables;
    select * from mahasiswa;
    drop table mahasiswa;
    delete from mahasiswa where id = 3;
    update mahasiswa set jurusan = 'Teknik Industri' where id = 2;
    select * from mahasiswa where nim = '06031281823023';
    select nama, nim from mahasiswa;
    insert into mahasiswa values ('', 'Fajar Sipolin', '12345123451234', 'fajar@roket.id', 'Teknik Data', 'fajar.png');
    describe mahasiswa; 
    create database phpdasar; 
    use phpdasar;
    create table mahasiswa (
        id int primary key auto_increment, 
        nama varchar(100), 
        nim char(14), 
        email varchar(100), 
        jurusan varchar(100),
        gambar varchar(100) 
    );  


FYI
-> SQL merupakan bahasa yang digunakan untuk melakukan interaksi pada database
-> Didalam tabel ada sebuah konsep yang dinamakan dengan primary key.
-> Primary key adalah sebuah data yang dapat merepresentasikan satu baris record secara unik
*/
?>