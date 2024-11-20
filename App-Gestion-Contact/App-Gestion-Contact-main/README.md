# Contact Management Application
This application is designed to manage a user's contact list, including features to create, update, delete, and view contacts. It uses PHP and MySQL for backend operations and follows best practices to prevent SQL injection.

# Table of Contents
Features
Prerequisites
Installation
Database Setup
Usage


# Features
Add new contacts with details like name, phone, email, address, age, and country.
Update existing contact information.
Delete unwanted contacts.
View a list of all contacts for the logged-in user.
View SAmple dashboard

# Prerequisites
PHP 7.4 or higher
MySQL 5.7 or higher
Web server (Apache)

# Installation

1. Clone this repository: git clone https://github.com/HamzaRouissi/contact-management.git

2. Move into the project directory / in case you are using WAMP copy the project folder to C:\wamp64\www in windows:


3. Configure your environment:

fill in your database credentials

DB_HOST=localhost
DB_NAME=your_database_name
DB_USER=your_database_user
DB_PASSWORD=your_database_password


# Database Setup

SQL Scripts for Table Creation
Run the following SQL script to create the required tables for the application:


import the users.sql script to your database // the script is already provided in database folder

CREATE TABLE Contacts (
    IdContact INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(100) NOT NULL,
    Phone VARCHAR(15),
    Email VARCHAR(100),
    Adresse VARCHAR(255),
    Age INT,
    Country VARCHAR(50),
    FkUser INT NOT NULL,
    FOREIGN KEY (FkUser) REFERENCES Users(IdUser)
);





# Usage
Navigate to the app's URL in your browser:


URL http://localhost/App-Gestion-Contact/App-Gestion-Contact-main/index.php



Log in using the credentials you added in the Users table:
Username: hamza
Password: rouissi

After logging in, you can:
Add new contacts.
View all your contacts.
Edit contact details.
Delete unwanted contacts. // in case of the issue (the delete link should be as mentioned below)

http://localhost/App-Gestion-Contact/App-Gestion-Contact-main/includes/main.php?Id=7

and not http://localhost/App-Gestion-Contact/includes/main.php?Id=7

Screenshots:

Kindly refer to screenshots folder for further clarification.
