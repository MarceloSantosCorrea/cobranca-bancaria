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
namespace Cnab\resources\B341\retorno\L040; // SIGCB
use Cnab\resources\generico\retorno\L040\Generico0;
use Cnab\RetornoAbstract;

class Registro0 extends Generico0
{
    public    $trailler;
    protected $meta = [
        'codigo_banco'              => [
            'tamanho'  => 3,
            'default'  => '104',
            'tipo'     => 'int',
            'required' => true],
        'codigo_lote'               => [
            'tamanho'  => 4,
            'default'  => '0000',
            'tipo'     => 'int',
            'required' => true],
        'tipo_registro'             => [
            'tamanho'  => 1,
            'default'  => '1',
            'tipo'     => 'int',
            'required' => true],
        'filler1'                   => [
            'tamanho'  => 9,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'tipo_inscricao'            => [
            'tamanho'  => 1,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'numero_inscricao'          => [
            'tamanho'  => 14,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'uso_caixa1'                => [
            'tamanho'  => 20,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'agencia'                   => [
            'tamanho'  => 5,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'agencia_dv'                => [
            'tamanho'  => 1,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'codigo_beneficiario'       => [
            'tamanho'  => 6,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'uso_caixa2'                => [
            'tamanho'  => 8,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'nome_empresa'              => [
            'tamanho'  => 30,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
        'nome_banco'                => [
            'tamanho'  => 30,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
        'filler3'                   => [
            'tamanho'  => 10,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'codigo_remessa'            => [
            'tamanho'  => 1,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'data_geracao'              => [
            'tamanho'  => 8,
            'default'  => '',
            'tipo'     => 'date',
            'required' => true],
        'hora_geracao'              => [
            'tamanho'  => 6,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'numero_sequencial_arquivo' => [
            'tamanho'  => 6,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'versao_layout'             => [
            'tamanho'  => 3,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'densidade_gravacao'        => [
            'tamanho'  => 5,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'filler4'                   => [
            'tamanho'  => 20,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'situacao_arquivo'          => [
            'tamanho'  => 20,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
        'versao_aplicativo'         => [
            'tamanho'  => 4,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'filler5'                   => [
            'tamanho'  => 25,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
    ];

    public function __construct($linhaTxt)
    {
        parent::__construct($linhaTxt);
        RetornoAbstract::$linesCounter++;
        $this->inserirDetalhe();
    }

    public function inserirDetalhe()
    {
        while (RetornoAbstract::$linesCounter < (count(RetornoAbstract::$lines) - 4)) {

            $class            = 'CobrancaBancaria\Cnab\resources\\' . RetornoAbstract::$banco . '\retorno\\' . RetornoAbstract::$layout . '\Registro1';
            $lote             = new $class(RetornoAbstract::$lines[RetornoAbstract::$linesCounter]);
            $class            = 'CobrancaBancaria\Cnab\resources\\' . RetornoAbstract::$banco . '\retorno\\' . RetornoAbstract::$layout . '\Registro5';
            $lote->trailler   = new $class(RetornoAbstract::$lines[RetornoAbstract::$linesCounter]);
            $this->children[] = $lote;
        }
    }
}

?>
