<?php

namespace CobrancaBancaria\Cnab\L240\Generico;

use CobrancaBancaria\AbstractRemessa;
use CobrancaBancaria\AbstractRemessaRegistro;

class Generico5 extends AbstractRemessaRegistro
{
    protected function set_codigo_lote($value)
    {
        //ArquivoAbstract::$loteCounter++; 
        $this->data['codigo_lote'] = AbstractRemessa::$loteCounter;
    }

    protected function set_qtd_registros($value)
    {
        $lote                        = AbstractRemessa::getLote(AbstractRemessa::$loteCounter);
        $this->data['qtd_registros'] = $lote->get_counter() + 1;
    }
}