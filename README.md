# PHP Form Demo

This is a simple PHP project demonstrating:

- HTML form submission
- Storing data in a MySQL database
- Displaying records in a table
- Basic language switch (English / German)
- CSS styling for forms and tables

## Features

- Add a new user (name + email)
- View all users in a table
- Simple MAMP backend setup

## Setup

1. Install [MAMP](https://www.mamp.info/)  
2. Place the project folder in `htdocs`  
3. Create a MySQL database called `form_demo`  
4. Import the `users` table structure:  
   ```sql
   CREATE TABLE users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(100),
       email VARCHAR(150)
   );
