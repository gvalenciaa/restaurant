<?php

namespace App\RegisterModel;

class Provider extends Person
{
    /**
     * @var string
     */
    protected $idProveedor = '';

    /**
     * @var string
     */
    protected $idPedido = '';

    /**
     * @param string $idPedido
     */
    public function visualizarPedido(string $idPedido){
        # TODO
    }
}