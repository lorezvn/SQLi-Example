# SQL Injection Example Project

## Description

This project is an educational example to demonstrate [SQL injection](https://www.w3schools.com/sql/sql_injection.asp#:~:text=SQL%20injection%20is%20a%20code,statements%2C%20via%20web%20page%20input.) vulnerabilities in a web application. 
The application is built using PHP for the backend and MySQL as the database, Docker is used to set up the development environment.

## Prerequisites

Ensure you have Docker and Docker Compose installed:    
*   [Docker](https://docs.docker.com/get-started/get-docker/)
*   [Docker Compose](https://docs.docker.com/compose/install/)

## Setup

1.  Build and start the Docker containers

    ```
    docker compose up --build -d
    ```
2. Access the application

    Once the containers are running you can access the application at http://localhost:8080/


## Stop containers

To stop the Docker containers that are running the web application, you can use the following command:

```
docker compose down
```





