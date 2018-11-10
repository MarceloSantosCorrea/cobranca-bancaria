<?php

namespace CobrancaBancaria\Cnab\resources\generico\remessa\cnab240;

use CobrancaBancaria\Cnab\RegistroRemAbstract;
use CobrancaBancaria\Cnab\RemessaAbstract;

class Generico9 extends RegistroRemAbstract
{
    protected function set_qtd_lotes($value)
    {
        //ArquivoAbstract::$loteCounter++; 
        $this->data['qtd_lotes'] = RemessaAbstract::$loteCounter;
    }

    protected function set_qtd_registros($value)
    {
        $lote                        = RemessaAbstract::getLote(RemessaAbstract::$loteCounter);
        $this->data['qtd_registros'] = $lote->get_counter() + 2;
    }
}