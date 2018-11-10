<?php

namespace Cnab\resources\generico\retorno\L050;

use Cnab\RegistroRetAbstract;

class Generico0 extends RegistroRetAbstract
{
    public function getRegistros($lote = 1)
    {
        if (!is_null($this->children[$lote - 1])) {
            $lote = $this->children[$lote - 1];

            return $lote->getChilds();
        }

        return $this->data;
    }
}