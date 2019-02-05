# Skeleton CI project

Basic project that shows how to setup a PHP project with the following tools:

- [PHPUnit](https://phpunit.de/index.html)
- [Parallel lint](https://github.com/JakubOnderka/PHP-Parallel-Lint)
- [Var dump checker](https://github.com/JakubOnderka/PHP-Var-Dump-Check)
- [PHP CS Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)
- [Pslam](https://getpsalm.org/docs/)
- [Phpstan](https://github.com/phpstan/phpstan)

A [Phing](https://www.phing.info/) script is provided to run the above in a single command.

Also [composer scripts](https://getcomposer.org/doc/articles/scripts.md) is provided to as an alternative way of running all the scripts.

Config is also available to run this in [CircleCI](https://circleci.com/).

## Running locally

You need a PHP environment runnig PHP 7.2 or higher and [composer](https://getcomposer.org/).

First run get the dependencies. In the root directory run:
```
composer install
```


Then you have 2 options for running all the tools.

#### Composer scripts

```
composer ci
```

#### Phing

```
./vendor/bin/phing
````


## Fixing coding style violations

PHP CS Fixer is used. When run as part of CI it is only reports violations. To fix them use one of:


```
composer cs-fix
```

or

```
./vendor/bin/phing cs-fix
```


## CircleCI 2.0

This can run on [CircleCI](https://circleci.com/). See config file `.circleci/config.yml`.


## Gitlab 

This can run on [Gitlab's CI](https://gitlab.com). See config file `.gitlab-ci.yml`. Based from [this](https://gitlab.com/gitlab-examples/php/blob/master/.gitlab-ci.yml) example. 
