<?php
/*
 * Cnab - Gera��o de arquivos de remessa e retorno em PHP
 *
 * LICENSE: The MIT License (MIT)
 *
 * Copyright (C) 2013 Ciatec.net
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this
 * software and associated documentation files (the "Software"), to deal in the Software
 * without restriction, including without limitation the rights to use, copy, modify,
 * merge, publish, distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to the following
 * conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies
 * or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
namespace Cnab\resources\B341\retorno\L040;
use Cnab\resources\generico\retorno\L040\Generico3;
//use Cnab\RetornoAbstract;
use Cnab\Exception;

class Registro3U extends Generico3
{
    protected $meta = [
        'codigo_banco'     => [          // 1.3Q
            'tamanho'  => 3,
            'default'  => '104',
            'tipo'     => 'int',
            'required' => true],
        'codigo_lote'      => [           // 2.3Q
            'tamanho'  => 4,
            'default'  => 1,
            'tipo'     => 'int',
            'required' => true],
        'tipo_registro'    => [         // 3.3Q
            'tamanho'  => 1,
            'default'  => '3',
            'tipo'     => 'int',
            'required' => true],
        'numero_registro'  => [       // 4.3Q
            'tamanho'  => 5,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'seguimento'       => [            // 5.3Q
            'tamanho'  => 1,
            'default'  => 'U',
            'tipo'     => 'alfa',
            'required' => true],
        'filler1'          => [               // 6.3Q
            'tamanho'  => 1,
            'default'  => ' ',
            'tipo'     => 'int',
            'required' => true],
        'codigo_movimento' => [      // 7.3Q
            'tamanho'  => 2,
            'default'  => '01', // entrada de titulo
            'tipo'     => 'int',
            'required' => true],

        // - ------------------ at� aqui � igual para todo registro tipo 3

        'vlr_juros_multa'        => [               // 8.3Q
            'tamanho'   => 13,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'vlr_desconto'           => [            // 9.3Q
            'tamanho'   => 13,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'vlr_abatimento'         => [       //10.3Q
            'tamanho'   => 13,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'vlr_iof'                => [               // 11.3Q
            'tamanho'   => 13,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'vlr_pago'               => [               //12.3Q
            'tamanho'   => 13,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'vlr_liquido'            => [      //13.3Q   
            'tamanho'   => 13,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'filler2'                => [  //14.3Q
            'tamanho'  => 30,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'data_arquivo'           => [   //15.3Q
            'tamanho'  => 8,
            'default'  => '',
            'tipo'     => 'date',
            'required' => true],
        'data_credito'           => [      //16.3Q
            'tamanho'  => 8,
            'default'  => '',  // combran�a com registro
            'tipo'     => 'date',
            'required' => true],
        'ocorrencia_pagador'     => [        //17.3Q
            'tamanho'  => 4,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'data_ocorrencia'        => [   //15.3Q
            'tamanho'  => 8,
            'default'  => '',
            'tipo'     => 'date',
            'required' => true],
        'vlr_ocorrencia_pagador' => [          // 18.3
            'tamanho'   => 13,
            'default'   => '0',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'filler3'                => [        //18.3Q
            'tamanho'  => 30,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'filler4'                => [            //19.3Q   Campo de preenchimento obrigat�rio; preencher com Seu N�mero de controle do t�tulo
            'tamanho'  => 23,
            'default'  => ' ', // este espa�o foi colocado para passa a valida��o para os seters do generico
            'tipo'     => 'alfa',
            'required' => true],
        'filler5'                => [               //19.3Q
            'tamanho'  => 7,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],

    ];
}

?>
