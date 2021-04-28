# WebStore

WebStore is online products store where you can view, add, delete and update different types of products. Read the installation guide below to get started with setting up the app on your machine locally.

## Installation 

* Clone this repository 
* Set up a local ```mysql``` database called  ```web_store```
* Create a ```.env``` file by copying the ```.env.example``` file
* Set ```DB_DATABASE=web_store``` in .env file
* In terminal cd into the project directory
* Run ```composer install``` to install the PHP dependecies
* Run ```php artisan key:generate``` to generate an app key
* Run ```php artisan migrate:fresh --seed``` to run migrations and seeders
* Run ```php artisan serve``` to run a program

Now the project will be running on your [localhost](http://localhost:8000)

