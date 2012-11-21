<?php

namespace User\Entity;

/**
 * @Entity(repositoryClass="User\Repository\User")
 * @Table(name="users")
 */
class User
{
    /** @Id @GeneratedValue @Column(type="integer") */

    protected $id;


    public function __construct()
    {

    }
}
