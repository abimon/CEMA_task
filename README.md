
![Logo](https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjxu7HFq1dsVwiuQd7WIe5Ldz0oFc8ABgesQ&s)


# HEALTH INFORMATION SYSTEM
This system is aimed at managing authenticated clients with their respective health programs/services

Basic information is needed for authentication with verification of identity.







## Features

- Client registration
- Client login
- Password reset
- Client profile view
- Role management
- Role based access


## Screenshots

![App Screenshot](https://cematask.apektechinc.com/storage/screenshots/1.png)

![App Screenshot](https://cematask.apektechinc.com/storage/screenshots/2.png)

![App Screenshot](https://cematask.apektechinc.com/storage/screenshots/3.png)


## Demo
https://cematask.apektechinc.com

## Powerpoint Presentation
https://cematask.apektechinc.com/storage/Presentation.pptx


## Tech Stack

**Client:** HTML, CSS, Bootstrap

**Server:** Laravel


## Run Locally

Clone the project

```bash
  git clone https://github.com/abimon/CEMA_task.git
```

Go to the project directory

```bash
  cd CEMA_task
```

Install node packages
```bash
  npm install 
```
Create dotenv file

```bash
  cp .env.example .env
```
Install vendor packages

```bash
  composer install
  composer dump-autoload

```

Generate the application key
```bash
  php artisan key:generate
```

Set up the database

```bash
  php artisan migrate
```

Create the storage link

```bash
  php artisan storage:link
```
Start the server

```bash
  php artisan serve
```

Great! You are good to go.
## Authors

- [@abimon](https://www.github.com/abimon)

