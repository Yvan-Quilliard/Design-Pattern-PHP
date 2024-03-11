<?php
require('../vendor/autoload.php');


# TODO: Creer un QueryBuilder
# Ecrire une requête en chainant des methodes
# Afficher la requête

use App\LitteralBuilder;
use App\MySQLQueryBuilder;

$query = (new MySQLQueryBuilder())
    ->select('name, email, password')
    ->from('users')
    ->where('age > 18')
    ->orderBy('name');

echo $query->getQuery();

echo PHP_EOL;

$query = (new LitteralBuilder())
    ->select('name, email, password')
    ->from('users')
    ->where('age > 18')
    ->orderBy('name');

echo $query->getQuery();