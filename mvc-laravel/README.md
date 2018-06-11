# MVC with Laravel


This is a Laravel dockerized ver [5.6](https://github.com/laravel/laravel/archive/v5.6.0.zip) 


### Getting Started

Make sure you have [Docker](https://docs.docker.com/toolbox/) installed.

Open the docker terminal and raise up the needed containers. Make sure you are inside this <b>mvc-laravel</b> folder.

```sh
$ docker-compose up -d
```

If you invoke
```sh
$ docker ps -a
```

You should be able to see something similar to this
```sh
CONTAINER ID        IMAGE               COMMAND                  CREATED             STATUS              PORTS                           NAMES
cf007e4b2c51        wwcodelaravel_web   "nginx -g 'daemon ..."   About 1 sec   Up 1 sec    443/tcp, 0.0.0.0:8080->80/tcp   wwcodelaravel_web_1
d1c3bd1aad80        wwcodelaravel_app   "docker-php-entryp..."   About 1 sec   Up 1 sec    9000/tcp                        wwcodelaravel_app_1
dec95f4f93ff        mysql:5.6           "docker-entrypoint..."   About 1 sec   Up 1 sec    0.0.0.0:33061->3306/tcp         wwcodelaravel_database_1
```
Install vendor dependencies

```sh
docker exec wwcodelaravel_app_1 php composer.phar install
```
On your browser go to
```sh
192.168.99.100:8080/
```
You should be able to see the default Laravel landing page. :)

If you have added a file or changed a namespace, you can invoke this to resolve the 'can't find class'
```sh
docker exec wwcodelaravel_app_1 php composer.phar dump-autoload
```

Happy Coding! :)
