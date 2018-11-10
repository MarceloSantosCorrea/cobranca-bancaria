<?php

namespace CobrancaBancaria\Cnab\resources\generico\remessa\cnab400;

use CobrancaBancaria\Cnab\RegistroRemAbstract;
use CobrancaBancaria\Cnab\RemessaAbstract;

class Generico2 extends RegistroRemAbstract
{
    protected function set_numero_registro($value)
    {
        $lote                          = RemessaAbstract::getLote(0);
        $this->data['numero_registro'] = $lote->get_counter();
    }
}