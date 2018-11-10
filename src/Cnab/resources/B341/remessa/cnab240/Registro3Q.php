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

class Registro3Q extends Generico3
{
    protected $meta = [
        'codigo_banco'     => [          // 1.3Q
            'tamanho'  => 3,
            'default'  => '341',
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
            'default'  => 'Q',
            'tipo'     => 'alfa',
            'required' => true],
        'filler1'          => [               // 6.3Q
            'tamanho'  => 1,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'codigo_movimento' => [      // 7.3Q
            'tamanho'  => 2,
            'default'  => '01', // entrada de titulo
            'tipo'     => 'int',
            'required' => true],

        // - ------------------ at� aqui � igual para todo registro tipo 3

        'tipo_inscricao'           => [               // 8.3Q
            'tamanho'  => 1,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'numero_inscricao'         => [            // 9.3Q
            'tamanho'  => 15,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'nome_pagador'             => [       //10.3Q
            'tamanho'  => 30,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
        'filler12'                 => [               // 6.3Q
            'tamanho'  => 10,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'endereco_pagador'         => [               // 11.3Q
            'tamanho'  => 40,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
        'bairro_pagador'           => [               //12.3Q
            'tamanho'  => 15,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
        'cep_pagador'              => [      //13.3Q   
            'tamanho'  => 5,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'cep_sufixo'               => [  //14.3Q
            'tamanho'  => 3,
            'default'  => ' ',
            'tipo'     => 'int',
            'required' => true],
        'cidade_pagador'           => [   //15.3Q
            'tamanho'  => 15,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
        'uf_pagador'               => [      //16.3Q
            'tamanho'  => 2,
            'default'  => '',  // combran�a com registro
            'tipo'     => 'alfa',
            'required' => true],
        'tipo_incricao_avalista'   => [        //17.3Q
            'tamanho'  => 1,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'numero_incricao_avalista' => [          // 18.3
            'tamanho'  => 15,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'nome_avalista'            => [        //18.3Q
            'tamanho'  => 30,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'filler13'                 => [               // 6.3Q
            'tamanho'  => 10,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'filler14'                 => [        //18.3Q
            'tamanho'  => 3,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'filler15'                 => [            //19.3Q   Campo de preenchimento obrigat�rio; preencher com Seu N�mero de controle do t�tulo
            'tamanho'  => 28,
            'default'  => ' ', // este espa�o foi colocado para passa a valida��o para os seters do generico
            'tipo'     => 'alfa',
            'required' => true],
    ];
}

?>
