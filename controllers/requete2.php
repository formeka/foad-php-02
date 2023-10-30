<?php
require 'models/Database.php';

$requete = "select name, count(country_id) as nb_pays from countries group by region_id order by nb_pays desc";

$regions = $connexion->query($requete)->fetchAll(PDO::FETCH_ASSOC);

require 'views/requete2.view.php';