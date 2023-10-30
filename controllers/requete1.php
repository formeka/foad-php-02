<?php
require 'models/Database.php';

$requete = "select 
c.name country, 
r.name region,
t.name continent
from 
countries c
inner join regions r using (region_id)
inner join continents t using (continent_id)
order by 
c.name";

$nations = $connexion->query($requete)->fetchAll(PDO::FETCH_ASSOC);

require 'views/requete1.view.php';