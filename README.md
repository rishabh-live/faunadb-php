# faunadb-php : A Library for FaunaDB and PHP


## About

"faunadb-php" is a library built for using faunadb with PHP. 


## How to use?

> "faunadb-php" is still in development stages and has few basic features to go with.
1. Downlaod the file and extarct in the project directory.
2. To start with just include these line in the begining of the file. 
```php
require_once 'FaunaPhp/autoload.php';

$fauna = new FaunaPhp();
// Your commnd goes here

```

Further You can find all the new commands in "test.php" where all the test are going on.

## List of Commands
1. Connect to Faunna
```php
$fauna->connectFauna($faunaKey);
```
| Parameter  | Description | Requirment |
|-------|----------------------|----------|
| faunakey  | secret key | required |
2. Create Database
```php
$fauna->createDatabase($name);
```
| Parameter  | Description | Requirment |
|-------|----------------------|----------|
| name  | name of the database | required |
3. Create Collection
```php
$fauna->createCollection($name);
```
| Parameter  | Description | Requirment |
|-------|----------------------|----------|
| name  | name of the collection | required |
4. Set Default Collection
```php
$fauna->setDefaultCollection($name);
```
| Parameter  | Description | Requirment |
|-------|----------------------|----------|
| name  | name of the collection | required |
4. Use Default Collection
```php
$fauna->useDefaultCollection();
```
