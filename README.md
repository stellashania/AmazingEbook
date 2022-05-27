## Amazing Ebook

The Amazing Ebook project was created for the final exam project of the Web Programming course. It is an imaginary ebook store that provides an ebook rental service. Both users and admin can access the website with additonal account maintenance functionality for the admins of the website. 


## Features

- Admin: Home, Cart, Profile, and Account Maintenance.
- User: Home, Cart, and Profile


## Tools

- Laravel
- HTML5
- CSS
- PHP
- Bootstrap
- XAMPP (with MySQL database)


## Screenshots

- User app
![1](https://user-images.githubusercontent.com/79920236/170663331-e37cc21d-96ae-4e8f-bdf7-e579257490aa.png)
![2](https://user-images.githubusercontent.com/79920236/170663319-293be6d3-a7d5-4280-bf66-9d1d0a498527.png)
![6](https://user-images.githubusercontent.com/79920236/170663353-a99491d6-85e9-4698-99ff-d942953585ea.png)
![3](https://user-images.githubusercontent.com/79920236/170663381-96a78dbb-48a5-4a73-ab22-2b284ecc9508.png)
![4](https://user-images.githubusercontent.com/79920236/170663389-4e9d7806-955e-417d-8f4d-863c9643d024.png)
- Additional account maintenance feature for admins
![5](https://user-images.githubusercontent.com/79920236/170663376-9032a252-baf9-4685-900b-f12907de1d5b.png)


### How to Run the App

- Required apps to install: XAMPP, Composer, Node.js
- Pull the project
- Start Apache and MySQL in XAMPP
- Create an .env file and edit the values (DB Host, DB Port, etc.) based on your setup
- Create a MySQL database with the same name as the ```DB_DATABASE``` value in the .env file of the project, which is "scananddine".
- Run ```composer update``` to update dependencies
- Run ```php artisan migrate --seed``` to create the tables and seed the data into the database
- Run ```php artisan storage:link``` to link the storage
- Run ```php artisan serve``` to run the app
