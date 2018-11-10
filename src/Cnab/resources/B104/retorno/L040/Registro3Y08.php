<?php

namespace CobrancaBancaria\Cnab\resources\B104\retorno\L040;

use Cnab\resources\generico\retorno\L040\Generico3;
//use Cnab\RetornoAbstract;
use Cnab\Exception;

class Registro3Y08 extends Generico3
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

        'identificacao_registro' => [               // 8.9U
            'tamanho'  => 2,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'codigo_solicitacao'     => [            // 9.9U
            'tamanho'  => 2,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'id_identificador'       => [       //10.9U
            'tamanho'  => 1,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'numero_solicitacao'     => [               // 11.9U
            'tamanho'  => 18,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'descricao'              => [               //12.9U
            'tamanho'  => 180,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
        'quantidade'             => [      //13.9U
            'tamanho'  => 4,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'erro'                   => [  //14.9U
            'tamanho'  => 3,
            'default'  => ' ',
            'tipo'     => 'int',
            'required' => true],
        'filler2'                => [   //15.9U
            'tamanho'  => 30,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
    ];
}

?>
