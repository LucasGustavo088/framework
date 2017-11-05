<?php 

namespace App\Entities;

use \Doctrine\ORM\Mapping as ORM;

/**
 * @Entity
 * @Table(name="users")
 */
class Users {
	/**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;
    //...

    /** @Column(type="string", name="name") */
    private $name;

    /** @Column(type="string", name="observacao") */
    private $observacao;

    function setName($name){
    	$this->name = $name;
    }

    function setObservacao($observacao){
    	$this->observacao = $observacao;
    }
}