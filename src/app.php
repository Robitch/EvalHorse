<?php

// Autoloading, pas besoin de require partout pour charger nos classes et chargement
// automatique de nos librairies
require_once __DIR__ . '/../vendor/autoload.php';

use App\Model\Stable;
use App\Model\Manager;
use App\Model\Rider;

// Définitions de chemins utiles dans l'application
define('TEMPLATES_DIR', __DIR__ . '/../templates/');
define('SRC_DIR', __DIR__ . '/');
define('PUBLIC_DIR', __DIR__ . '/../public/');


$manager1 = new Manager("M. Dupont", "rue de la paix", "1", "75000", "Paris", "Gérant");
$stable1 = new Stable("Ecurie 1", "1 rue de la paix", "75000", "Paris", $manager1);
echo $stable1;

$rider1 = new Rider("M. Dupont", "rue de la paix", "1", "75000", "Paris", "Gérant");

