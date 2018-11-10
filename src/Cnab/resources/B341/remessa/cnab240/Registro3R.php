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
namespace Cnab\resources\B341\remessa\cnab240;
use Cnab\resources\generico\remessa\cnab240\Generico3;
use Cnab\Exception;

class Registro3R extends Generico3
{
    protected $meta = [
        'codigo_banco'     => [          // 1.3R
            'tamanho'  => 3,
            'default'  => '341',
            'tipo'     => 'int',
            'required' => true],
        'codigo_lote'      => [           // 2.3R
            'tamanho'  => 4,
            'default'  => 1,
            'tipo'     => 'int',
            'required' => true],
        'tipo_registro'    => [         // 3.3R
            'tamanho'  => 1,
            'default'  => '3',
            'tipo'     => 'int',
            'required' => true],
        'numero_registro'  => [       // 4.3R
            'tamanho'  => 5,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'seguimento'       => [            // 5.3R
            'tamanho'  => 1,
            'default'  => 'R',
            'tipo'     => 'alfa',
            'required' => true],
        'filler1'          => [               // 6.3R
            'tamanho'  => 1,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'codigo_movimento' => [      // 7.3R
            'tamanho'  => 2,
            'default'  => '01', // entrada de titulo
            'tipo'     => 'int',
            'required' => true],

        // - ------------------ at� aqui � igual para todo registro tipo 3

        'filler12'           => [               // 8.3R
            'tamanho'  => 1,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'data_desconto2'     => [            // 9.3R
            'tamanho'  => 8,
            'default'  => '0',
            'tipo'     => 'date',
            'required' => true],
        'vlr_desconto2'      => [       //10.3R
            'tamanho'   => 13,
            'default'   => '0',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'filler14'           => [               // 8.3R
            'tamanho'  => 1,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'data_desconto3'     => [               //12.3R
            'tamanho'  => 8,
            'default'  => '0',
            'tipo'     => 'date',
            'required' => true],
        'vlr_desconto3'      => [      //13.3R   
            'tamanho'   => 13,
            'default'   => '0',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'codigo_multa'       => [  //14.3R
            'tamanho'  => 1,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'data_multa'         => [   //15.3R
            'tamanho'  => 8,
            'default'  => '0',
            'tipo'     => 'date',
            'required' => true],
        'vlr_multa'          => [      //16.3R
            'tamanho'   => 13,
            'default'   => '0',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'filler15'           => [        //17.3R
            'tamanho'  => 10,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'informacao_pagador' => [          // 18.3
            'tamanho'  => 40,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'filler16'           => [        //19.3R
            'tamanho'  => 60,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'cod_ocor_pagador'   => [    //20.3R   
            'tamanho'  => 8,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'filler4'            => [         //21.3R
            'tamanho'  => 8,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'filler5'            => [         //21.3R
            'tamanho'  => 1,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'filler6'            => [         //21.3R
            'tamanho'  => 12,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'filler7'            => [         //21.3R
            'tamanho'  => 2,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'filler8'            => [         //21.3R
            'tamanho'  => 1,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'filler9'            => [         //21.3R
            'tamanho'  => 9,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
    ];
}

?>
