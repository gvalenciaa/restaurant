<?php

namespace App\RegisterModel;


class Student extends Person
{
    /**
     * @var string
     */
    protected $estCodigo = '';

    /**
     * @var string
     */
    protected $estTarifa = '';

    /**
     * @param string $idMenu
     */
    public function consultarMenu(string $idMenu) {
        # TODO
    }
}