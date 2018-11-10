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

use \Cnab\resources\generico\remessa\cnab240\Generico0;

class Registro0 extends Generico0
{
    protected $meta = [
        'codigo_banco'              => [
            'tamanho'  => 3,
            'default'  => '341',
            'tipo'     => 'int',
            'required' => true],
        'codigo_lote'               => [
            'tamanho'  => 4,
            'default'  => '0000',
            'tipo'     => 'int',
            'required' => true],
        'tipo_registro'             => [
            'tamanho'  => 1,
            'default'  => '0',
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
        'uso_caixa12'               => [
            'tamanho'  => 1,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'agencia'                   => [
            'tamanho'  => 4,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'uso_caixa123'              => [
            'tamanho'  => 1,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'uso_caixa1234'             => [
            'tamanho'  => 7,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'conta'                     => [
            'tamanho'  => 5,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'uso_caixa12345'            => [
            'tamanho'  => 1,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'conta_dac'                 => [
            'tamanho'  => 1,
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
            'default'  => 'BANCO ITAU SA',
            'tipo'     => 'alfa',
            'required' => true],
        'filler3'                   => [
            'tamanho'  => 10,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'codigo_remessa'            => [
            'tamanho'  => 1,
            'default'  => '1',
            'tipo'     => 'int',
            'required' => true],
        'data_geracao'              => [
            'tamanho'  => 8,
            'default'  => '',// nao informar a data na instancia��o - gerada dinamicamente
            'tipo'     => 'date',
            'required' => true],
        'hora_geracao'              => [
            'tamanho'  => 6,
            'default'  => '',// nao informar a data na instancia��o - gerada dinamicamente
            'tipo'     => 'int',
            'required' => true],
        'numero_sequencial_arquivo' => [
            'tamanho'  => 6,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'versao_layout'             => [
            'tamanho'  => 3,
            'default'  => '040',
            'tipo'     => 'int',
            'required' => true],
        'filler4'                   => [
            'tamanho'  => 5,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'filler5'                   => [
            'tamanho'  => 54,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'filler6'                   => [
            'tamanho'  => 3,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'versao_aplicativo'         => [
            'tamanho'  => 12,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
    ];
}

?>