<?php

namespace CobrancaBancaria\Cnab\resources\B104\remessa\cnab240;

use CobrancaBancaria\Cnab\resources\generico\remessa\cnab240\Generico3;

class Registro3S3 extends Generico3
{
    protected $meta = [
        'codigo_banco'     => [          // 1.3S
            'tamanho'  => 3,
            'default'  => '104',
            'tipo'     => 'int',
            'required' => true,
        ],
        'codigo_lote'      => [           // 2.3S
            'tamanho'  => 4,
            'default'  => 1,
            'tipo'     => 'int',
            'required' => true,
        ],
        'tipo_registro'    => [         // 3.3S
            'tamanho'  => 1,
            'default'  => '3',
            'tipo'     => 'int',
            'required' => true,
        ],
        'numero_registro'  => [       // 4.3S
            'tamanho'  => 5,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true,
        ],
        'seguimento'       => [            // 5.3S
            'tamanho'  => 1,
            'default'  => 'S',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'filler1'          => [               // 6.3S
            'tamanho'  => 1,
            'default'  => ' ',
            'tipo'     => 'int',
            'required' => true,
        ],
        'codigo_movimento' => [      // 7.3S
            'tamanho'  => 2,
            'default'  => '01', // entrada de titulo
            'tipo'     => 'int',
            'required' => true,
        ],
        // - ------------------ até aqui é igual para todo registro tipo 3
        'tipo_impressao'   => [               // 8.3S
            'tamanho'  => 1,
            'default'  => '3',
            'tipo'     => 'int',
            'required' => true,
        ],
        'mensagem_5'       => [                // 9.3S
            'tamanho'  => 40,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'mensagem_6'       => [                //10.3S
            'tamanho'  => 40,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'mensagem_7'       => [               // 11.3S
            'tamanho'  => 40,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'mensagem_8'       => [               //12.3S
            'tamanho'  => 40,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'filler2'          => [               //13.3S
            'tamanho'  => 40,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'filler3'          => [               //14.3S
            'tamanho'  => 22,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
    ];
}