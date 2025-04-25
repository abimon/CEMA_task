
![Logo](https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjxu7HFq1dsVwiuQd7WIe5Ldz0oFc8ABgesQ&s)


# HEALTH INFORMATION SYSTEM
This system is aimed at managing authenticated clients with their respective health programs/services

Basic information is needed for authentication with verification of identity.

## Requirements

- Composer
- Laravel
- MySQL database
- 

## Features

- Client registration
- Client login
- Password reset
- Client profile view
- Role management
- Role based access


## Demo

[Demo Link](https://healthinfo.cem.co.ke)

## Screenshots

![App Screenshot](https://via.placeholder.com/468x300?text=App+Screenshot+Here)


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

Create dotenv file

```bash
  cp .env.example .env
```

Generate the application key
```bash
  php artisan key:generate
```

Set up the database

```bash
  php artisan migrate
```

Start the server

```bash
  php artisan serve
```


## Authors

- [@abimon](https://www.github.com/abimon)
