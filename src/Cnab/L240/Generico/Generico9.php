<?php

namespace CobrancaBancaria\Cnab\L240\Generico;

use CobrancaBancaria\AbstractRemessa;
use CobrancaBancaria\AbstractRemessaRegistro;

class Generico9 extends AbstractRemessaRegistro
{
    protected function set_qtd_lotes($value)
    {
        //ArquivoAbstract::$loteCounter++; 
        $this->data['qtd_lotes'] = AbstractRemessa::$loteCounter;
    }

    protected function set_qtd_registros($value)
    {
        $lote                        = AbstractRemessa::getLote(AbstractRemessa::$loteCounter);
        $this->data['qtd_registros'] = $lote->get_counter() + 2;
    }
}