<?php 
namespace App\Controllers\Home;

use App\Entities\Users;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

use Core\AppFramework\ControllerBase as ControllerBase;

class HomeBase extends ControllerBase{

	public function index(){


		$isDevMode = true;

		$conn = array(
			'driver' 		=> 'pdo_mysql',
			'host' 			=> 'localhost',
			'dbname' 		=> 'VitechBase',
			'user'			=> 'root',
			'password'		=> 'Abcde+12345'
		);
		$config = Setup::createAnnotationMetadataConfiguration(array(DIR_FRAMEWORK . "\App\Entities"), $isDevMode);

		$entityManager = EntityManager::create($conn, $config);

		$users = $entityManager->getRepository('App\Entities\Users');
		d($users->findAll());
	}
}

