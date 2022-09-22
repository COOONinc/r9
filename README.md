## Precondition
- Installed Docker and docker-compose

## Versions
- Docker version 19.03.12
- docker-compose version 1.26.2
- MySQL 5.7
- Wordpress latest

## Setup
```
$ docker-compose up --build -d

or

$ docker-compose up -d
```

## Shutdown
```
$ docker-compose down
```

## Usage
```
$ open http://localhost:8000/
```

Install and Setup Wordpress.

Edit `/wordpress` directory.


## Delete Docker Volumes
```
$ docker-compose down --rmi all --volumes
```
# r9
