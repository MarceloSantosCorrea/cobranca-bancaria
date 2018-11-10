<?php
/*
* Cnab - GeraÃ§Ã£o de arquivos de remessa e retorno em PHP
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
namespace Cnab\resources\B341\retorno\L400;
use Cnab\resources\generico\retorno\L400\Generico1;
use Cnab\RetornoAbstract;

class Registro1 extends Generico1
{
    public    $trailler;
    protected $meta = [
        'tipo_registro'            => [
            'tamanho'  => 1,
            'default'  => '1',
            'tipo'     => 'int',
            'required' => true],
        'tipo_inscricao_empresa'   => [
            'tamanho'  => 2,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'numero_inscricao_empresa' => [
            'tamanho'  => 14,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'agencia'                  => [
            'tamanho'  => 4,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'filler1'                  => [
            'tamanho'  => 2,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'conta'                    => [
            'tamanho'  => 5,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'conta_dv'                 => [
            'tamanho'  => 1,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'filler2'                  => [
            'tamanho'  => 8,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'seu_numero'               => [
            'tamanho'  => 25,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'nosso_numero'             => [
            'tamanho'  => 8,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'filler3'                  => [
            'tamanho'  => 12,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'carteira'                 => [      //13.3P
            'tamanho'  => 3,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'filler34'                 => [
            'tamanho'  => 9,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'filler4'                  => [
            'tamanho'  => 13,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'cod_carteira'             => [      //13.3P
            'tamanho'  => 1,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'codigo_movimento'         => [      // codigo da ocorrencia no manual itau
            'tamanho'  => 2,
            'default'  => '01', // entrada de titulo
            'tipo'     => 'int',
            'required' => true],
        'data_ocorrencia'          => [      // codigo da ocorrencia no manual itau
            'tamanho'  => 6,
            'default'  => '0', // entrada de titulo
            'tipo'     => 'date',
            'required' => true],
        'seu_numero2'              => [            //20.3
            'tamanho'  => 10,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
        'filler41'                 => [            //20.3
            'tamanho'  => 8,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
        'filler42'                 => [            //20.3
            'tamanho'  => 12,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
        'data_vencimento'          => [            //26.3P
            'tamanho'  => 6,
            'default'  => '',
            'tipo'     => 'date',
            'required' => true],
        'valor'                    => [                 //21.3P
            'tamanho'   => 11,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'codigo_banco'             => [
            'tamanho'  => 3,
            'default'  => '341',
            'tipo'     => 'int',
            'required' => true],
        'agencia_cobradora'        => [    //22.3P
            'tamanho'  => 4,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'agencia_cobradora_dv'     => [    //22.3P
            'tamanho'  => 1,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'especie_titulo'           => [    //24.3P
            'tamanho'  => 2,
            'default'  => '2',
            'tipo'     => 'int',
            'required' => true],
        'vlr_tarifas'              => [            //25.3P
            'tamanho'   => 11,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'filler43'                 => [            //20.3
            'tamanho'  => 26,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
        'vlr_iof'                  => [               // 11.3Q
            'tamanho'   => 11,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'vlr_abatimento'           => [       //10.3Q
            'tamanho'   => 11,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'vlr_desconto'             => [            // 9.3Q
            'tamanho'   => 11,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'vlr_pago'                 => [               //12.3Q
            'tamanho'   => 11,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'vlr_juros_multa'          => [               // 8.3Q
            'tamanho'   => 11,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'vlr_outros'               => [               // 8.3Q
            'tamanho'   => 11,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'boleto_dda'               => [            //26.3P
            'tamanho'  => 1,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
        'filler44'                 => [    //24.3P
            'tamanho'  => 2,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'data_credito'             => [            //26.3P
            'tamanho'  => 6,
            'default'  => '',
            'tipo'     => 'date',
            'required' => true],
        'cod_instrucao_cancelada'  => [    //24.3P
            'tamanho'  => 4,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'filler45'                 => [    //24.3P
            'tamanho'  => 6,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'filler46'                 => [            //29.3P
            'tamanho'  => 13,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'nome_pagador'             => [       //10.3Q
            'tamanho'  => 30,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
        'filler47'                 => [
            'tamanho'  => 23,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'erros_mensagens'          => [               // 11.3Q
            'tamanho'  => 8,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
        'filler5'                  => [               //12.3Q
            'tamanho'  => 7,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
        'cod_liquidacao'           => [      //13.3Q   
            'tamanho'  => 2,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
        'numero_registro'          => [       // 4.3R
            'tamanho'  => 6,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
    ];

    public function __construct($linhaTxt)
    {
        parent::__construct($linhaTxt);

        RetornoAbstract::$linesCounter++;
        //$this->inserirDetalhe();
    }
    /*
    * mÃ©todo inserirDetalhe()
    * Recebe os parametros
    * @$data = um array contendo os dados nessesarios para o arquvio
    */
    /*	public function inserirDetalhe(){
    while($this->data['codigo_lote']==abs(substr(RetornoAbstract::$lines[RetornoAbstract::$linesCounter],3,4)))
    {
    RetornoAbstract::$linesCounter++;
    $class = 'CobrancaBancaria\Cnab\resources\\'.RetornoAbstract::$banco.'\retorno\\'.RetornoAbstract::$layout.'\Registro3T';
    $this->children[] = new $class(RetornoAbstract::$lines[RetornoAbstract::$linesCounter]);

    }
    RetornoAbstract::$linesCounter--;
    $teste = array_pop($this->children);
    }
    */
    public function get_R3U()
    {
        return $this;
    }

}

?>
