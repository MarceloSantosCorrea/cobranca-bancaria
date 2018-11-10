<?php

namespace CobrancaBancaria\Cnab\resources\B104\retorno\L040;

use Cnab\resources\generico\retorno\L040\Generico3;
//use Cnab\RetornoAbstract;
use Cnab\Exception;

class Registro3U extends Generico3
{
    protected $meta = [
        'codigo_banco'     => [          // 1.9U
            'tamanho'  => 3,
            'default'  => '104',
            'tipo'     => 'int',
            'required' => true],
        'codigo_lote'      => [           // 2.9U
            'tamanho'  => 4,
            'default'  => 1,
            'tipo'     => 'int',
            'required' => true],
        'tipo_registro'    => [         // 3.9U
            'tamanho'  => 1,
            'default'  => '3',
            'tipo'     => 'int',
            'required' => true],
        'numero_registro'  => [       // 4.9U
            'tamanho'  => 5,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'seguimento'       => [            // 5.9U
            'tamanho'  => 1,
            'default'  => 'U',
            'tipo'     => 'alfa',
            'required' => true],
        'filler1'          => [               // 6.9U
            'tamanho'  => 1,
            'default'  => ' ',
            'tipo'     => 'int',
            'required' => true],
        'codigo_movimento' => [      // 7.9U
            'tamanho'  => 2,
            'default'  => '', // entrada de titulo
            'tipo'     => 'int',
            'required' => true],

        // - ------------------ até aqui é igual para todo registro tipo 3

        'vlr_juros_multa'      => [               // 8.9U
            'tamanho'   => 13,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'vlr_desconto'         => [            // 9.9U
            'tamanho'   => 13,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'vlr_abatimento'       => [       //10.9U
            'tamanho'   => 13,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'vlr_IOF'              => [               // 11.9U
            'tamanho'   => 13,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'vlr_pago'             => [               //12.9U
            'tamanho'   => 13,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'vlr_liquido'          => [      //13.9U
            'tamanho'   => 13,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'vlr_outras_despesas'  => [  //14.9U
            'tamanho'   => 13,
            'default'   => ' ',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'vlr_outros_creditos'  => [   //15.9U
            'tamanho'   => 13,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'data_ocorrencia'      => [      //16.9U
            'tamanho'  => 8,
            'default'  => '',  // combrança com registro
            'tipo'     => 'date',
            'required' => true],
        'data_credito'         => [        //17.9U
            'tamanho'  => 8,
            'default'  => '0',
            'tipo'     => 'date',
            'required' => true],
        'filler2'              => [          // 18.3
            'tamanho'  => 4,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'data_debito_tarifa'   => [        //18.9U
            'tamanho'  => 8,
            'default'  => ' ',
            'tipo'     => 'date',
            'required' => true],
        'codigo_banco_pagador' => [            //19.9U
            'tamanho'  => 15,
            'default'  => ' ', // este espaço foi colocado para passa a validação para os seters do generico
            'tipo'     => 'alfa',
            'required' => true],
        'filler4'              => [               //19.9U
            'tamanho'  => 30,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
    ];
}

?>
