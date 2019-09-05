## Laravel Docker Setup (Queue, Scheduler,  Redis and MySql) for Development Server
This is a simple laravel docker setup using apache server
## Installation

## Install Docker
  - Ubuntu
    - [16.04](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-on-ubuntu-16-04)
    - [18.04](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-on-ubuntu-18-04)

## Install Docker Compose
  - run `sudo apt-get install docker-compose`  
  
## Build and Start the Server
  - run `docker-compose build`
  - run `docker-compose up -d`
## Check if all the containers are ups
  - run `docker-compose ps`
  
## Interaction with the docker containers
  - run `docker-compose exec {name} bash`
    - run `docker-compose exec app bash`
    - run `docker-compose exec queue bash`
    - run `docker-compose exec scheduler bash`
    - run `docker-compose exec mysql bash`

## Visit your website
  - http://{hostname}:8080

## Note
   - If `docker-compose up -d` was failed to up
      - run `sudo dos2unix .docker/entrypoint.sh`
      - then build and run again the server
      - install dos2unix if command not found.
        - run `sudo apt-get install dos2unix`