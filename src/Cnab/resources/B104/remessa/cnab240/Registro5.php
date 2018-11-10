<?php

namespace CobrancaBancaria\Cnab\resources\B104\remessa\cnab240;

use CobrancaBancaria\Cnab\resources\generico\remessa\cnab240\Generico5;

class Registro5 extends Generico5
{
    protected $meta = [
        'codigo_banco'           => [      //01.5
            'tamanho'  => 3,
            'default'  => '104',
            'tipo'     => 'int',
            'required' => true,
        ],
        'codigo_lote'            => [       //02.5
            'tamanho'  => 4,
            'default'  => 1,
            'tipo'     => 'int',
            'required' => true,
        ],
        'tipo_registro'          => [     //03.5
            'tamanho'  => 1,
            'default'  => '5',
            'tipo'     => 'int',
            'required' => true,
        ],
        'filler1'                => [          //04.5
            'tamanho'  => 9,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'qtd_registros'          => [      //05.5
            'tamanho'  => 6,
            'default'  => ' ',
            'tipo'     => 'int',
            'required' => true,
        ],
        'qtd_titulos_simples'    => [           //06.5
            'tamanho'  => 6,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true,
        ],
        'vrl_titulos_simples'    => [      //07.5
            'tamanho'   => 15,
            'default'   => '0',
            'tipo'      => 'decimal',
            'precision' => '2',
            'required'  => true,
        ],
        'qtd_titulos_caucionada' => [           //08.5
            'tamanho'  => 6,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true,
        ],
        'vlr_titulos_caucionada' => [    //09.5
            'tamanho'   => 15,
            'default'   => '0',
            'tipo'      => 'decimal',
            'precision' => '2',
            'required'  => true,
        ],
        'qtd_titulos_descontada' => [           //10.5
            'tamanho'  => 6,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true,
        ],
        'vlr_titulos_descontada' => [    //11.5
            'tamanho'   => 15,
            'default'   => '0',
            'tipo'      => 'decimal',
            'precision' => '2',
            'required'  => true,
        ],
        'filler2'                => [        //12.5
            'tamanho'  => 31,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'filler3'                => [           //13.5
            'tamanho'  => 117,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
    ];
}