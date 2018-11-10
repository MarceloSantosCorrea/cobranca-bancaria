<?php
namespace Cnab\resources\b341\remessa\cnab400;

use Cnab\resources\generico\remessa\cnab400\Generico2;

class Registro2 extends Generico2
{
    protected $meta = [
        'tipo_registro'   => [
            'tamanho'  => 1,
            'default'  => '2',
            'tipo'     => 'int',
            'required' => true],
        'codigo_multa'    => [    //24.3P
            'tamanho'  => 1,
            'default'  => '1',
            'tipo'     => 'alfa',
            'required' => true],
        'data_multa'      => [            //31.3P
            'tamanho'  => 8,
            'default'  => '0',
            'tipo'     => 'date',
            'required' => true],
        'vlr_multa'       => [            //29.3P
            'tamanho'   => 11,
            'default'   => '0',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'filler2'         => [            //32.3P
            'tamanho'  => 370,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'numero_registro' => [       // 4.3R
            'tamanho'  => 6,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
    ];
}

?>
