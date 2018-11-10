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
use Cnab\RetornoAbstract;
use Cnab\Exception;

class Registro3T extends Generico3
{
    protected $meta = [
        'codigo_banco'     => [          // 1.3P
            'tamanho'  => 3,
            'default'  => '104',
            'tipo'     => 'int',
            'required' => true],
        'codigo_lote'      => [           // 2.3P
            'tamanho'  => 4,
            'default'  => 1,
            'tipo'     => 'int',
            'required' => true],
        'tipo_registro'    => [         // 3.3P
            'tamanho'  => 1,
            'default'  => '3',
            'tipo'     => 'int',
            'required' => true],
        'numero_registro'  => [       // 4.3P
            'tamanho'  => 5,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'seguimento'       => [            // 5.3P
            'tamanho'  => 1,
            'default'  => 'P',
            'tipo'     => 'alfa',
            'required' => true],
        'boleto_dda'       => [               // 6.3P
            'tamanho'  => 1,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'codigo_movimento' => [      // 7.3P
            'tamanho'  => 2,
            'default'  => '01', // entrada de titulo
            'tipo'     => 'int',
            'required' => true],

        // - ------------------ at� aqui � igual para todo registro tipo 3

        'filler1'              => [               // 11.3P
            'tamanho'  => 1,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'agencia'              => [               // 8.3P
            'tamanho'  => 4,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'filler12'             => [            // 9.3P
            'tamanho'  => 8,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'conta'                => [       //10.3P
            'tamanho'  => 5,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'filler2'              => [               // 11.3P
            'tamanho'  => 1,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'conta_dv'             => [               //12.3P
            'tamanho'  => 1,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'carteira'             => [      //13.3P
            'tamanho'  => 3,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'nosso_numero'         => [  //13.3P
            'tamanho'  => 8,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'nosso_numero_dv'      => [   //14.3P
            'tamanho'  => 1,
            'default'  => '1',
            'tipo'     => 'int',
            'required' => true],
        'filler3'              => [      //15.3P
            'tamanho'  => 8,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'filler32'             => [        //16.3P
            'tamanho'  => 1,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'seu_numero'           => [          // 17.3
            'tamanho'  => 1,
            'default'  => 2,
            'tipo'     => 'int',
            'required' => true],
        'filler33'             => [        //18.3P
            'tamanho'  => 5,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'data_vencimento'      => [            //20.3
            'tamanho'  => 8,
            'default'  => '',
            'tipo'     => 'date',
            'required' => true],
        'valor'                => [                 //21.3P
            'tamanho'   => 13,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'filler4'              => [        //18.3P
            'tamanho'  => 3,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'agencia_cobradora'    => [    //22.3P
            'tamanho'  => 5,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'agencia_cobradora_dv' => [    //23.3P
            'tamanho'  => 1,
            'default'  => '0',
            'tipo'     => 'int', // originalmente no manual esta alfa mas foi mudado para int para funcionar
            'required' => true],
        'seu_numero2'          => [    //24.3P
            'tamanho'  => 2,
            'default'  => '2',
            'tipo'     => 'int',
            'required' => true],
        'filler5'              => [            //25.3P
            'tamanho'  => 2,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'tipo_inscricao'       => [            //26.3P
            'tamanho'  => 1,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'numero_inscricao'     => [            //27.3P
            'tamanho'  => 15,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'nome_pagador'         => [            //28.3P
            'tamanho'  => 30,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
        'filler6'              => [            //29.3P
            'tamanho'  => 10,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'filler7'              => [            //30.3P
            'tamanho'  => 10,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'vlr_tarifas'          => [            //32.3P
            'tamanho'   => 13,
            'default'   => '0',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'erros'                => [            //33.3P
            'tamanho'   => 8,
            'default'   => '0',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'cod_liquidacao'       => [            //34.3P
            'tamanho'   => 13,
            'default'   => '0',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'filler8'              => [            //35.3P
            'tamanho'  => 17,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
    ];

    public function __construct($data = null)
    {
        if (empty($this->data)) parent::__construct($data);
        $this->inserirDetalhe($data);
    }

    public function inserirDetalhe($data)
    {
        $class            = 'CobrancaBancaria\Cnab\resources\\' . RetornoAbstract::$banco . '\remessa\\' . RetornoAbstract::$layout . '\Registro3U';
        $this->children[] = new $class($data);
        RetornoAbstract::$linesCounter++;
    }
}

?>
