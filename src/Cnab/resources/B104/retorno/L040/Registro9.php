<?php

namespace CobrancaBancaria\Cnab\resources\B104\retorno\L040;

use Cnab\resources\generico\retorno\L040\Generico9;
use Cnab\Exception;

class Registro9 extends Generico9
{
    protected $meta = [
        'codigo_banco'  => [      //01.5
            'tamanho'  => 3,
            'default'  => '104',
            'tipo'     => 'int',
            'required' => true],
        'codigo_lote'   => [       //02.5
            'tamanho'  => 4,
            'default'  => 9999,
            'tipo'     => 'int',
            'required' => true],
        'tipo_registro' => [     //03.5
            'tamanho'  => 1,
            'default'  => '9',
            'tipo'     => 'int',
            'required' => true],
        'filler1'       => [          //04.5
            'tamanho'  => 9,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'qtd_lotes'     => [      //05.5
            'tamanho'  => 6,
            'default'  => '1',
            'tipo'     => 'int',
            'required' => true],
        'qtd_registros' => [           //06.5
            'tamanho'  => 6,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'filler2'       => [        //12.5
            'tamanho'  => 6,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'filler3'       => [           //13.5
            'tamanho'  => 105,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
    ];
}

?>
