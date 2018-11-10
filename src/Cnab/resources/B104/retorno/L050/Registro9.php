<?php

namespace CobrancaBancaria\Cnab\resources\B104\retorno\L050;

use Cnab\resources\generico\retorno\L050\Generico9;

class Registro9 extends Generico9
{
    protected $meta = [
        'codigo_banco'  => [ // G001
            'tamanho'  => 3,
            'default'  => '104',
            'tipo'     => 'int',
            'required' => true,
        ],
        'codigo_lote'   => [ // G002
            'tamanho'  => 4,
            'default'  => 9999,
            'tipo'     => 'int',
            'required' => true,
        ],
        'tipo_registro' => [ // G003
            'tamanho'  => 1,
            'default'  => '9',
            'tipo'     => 'int',
            'required' => true,
        ],
        'filler1'       => [ // G004
            'tamanho'  => 9,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'qtd_lotes'     => [ // G049
            'tamanho'  => 6,
            'default'  => '1',
            'tipo'     => 'int',
            'required' => true,
        ],
        'qtd_registros' => [ // G056
            'tamanho'  => 6,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true,
        ],
        'filler2'       => [ // G004
            'tamanho'  => 6,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'filler3'       => [ // G004
            'tamanho'  => 105,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
    ];
}