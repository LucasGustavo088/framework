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
    public $id;
    //...

    /** @Column(type="string", name="name") */
    public $name;

    /** @Column(type="string", name="observacao") */
    public $observacao;

    function setName($name){
    	$this->name = $name;
    }

    function setObservacao($observacao){
    	$this->observacao = $observacao;
    }
}