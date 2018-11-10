<?php

namespace Cnab\resources\generico\retorno\L050;

use Cnab\RegistroRetAbstract;
use Cnab\RemessaAbstract;
use Cnab\Especie;
use Exception;

class Generico3 extends RegistroRetAbstract
{
    public function get_R3U()
    {
        return $this->children[0];
    }
}