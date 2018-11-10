<?php

namespace CobrancaBancaria\Cnab\resources\B104\retorno\L050;

use Cnab\resources\generico\retorno\L050\Generico0;
use Cnab\RetornoAbstract;

class Registro0 extends Generico0
{
    public $trailler;

    protected $meta = [
        'codigo_banco'              => [ // G001
            'tamanho'  => 3,
            'default'  => '104',
            'tipo'     => 'int',
            'required' => true,
        ],
        'codigo_lote'               => [ // G002
            'tamanho'  => 4,
            'default'  => '0000',
            'tipo'     => 'int',
            'required' => true,
        ],
        'tipo_registro'             => [ // G003
            'tamanho'  => 1,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true,
        ],
        'filler1'                   => [ // G004
            'tamanho'  => 9,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'tipo_inscricao'            => [ // G005
            'tamanho'  => 1,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true,
        ],
        'numero_inscricao'          => [ // G006
            'tamanho'  => 14,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true,
        ],
        'uso_caixa1'                => [
            'tamanho'  => 20,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true,
        ],
        'agencia'                   => [ // G008
            'tamanho'  => 5,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true,
        ],
        'agencia_dv'                => [ // G009
            'tamanho'  => 1,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true,
        ],
        'codigo_beneficiario'       => [ // G007
            'tamanho'  => 6,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true,
        ],
        'uso_caixa2'                => [
            'tamanho'  => 8,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true,
        ],
        'nome_empresa'              => [ // G013
            'tamanho'  => 30,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'nome_banco'                => [ // G014
            'tamanho'  => 30,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'filler3'                   => [ // G004
            'tamanho'  => 10,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'codigo_remessa'            => [ // G015
            'tamanho'  => 1,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true,
        ],
        'data_geracao'              => [ // G016
            'tamanho'  => 8,
            'default'  => '',
            'tipo'     => 'date',
            'required' => true,
        ],
        'hora_geracao'              => [ // G017
            'tamanho'  => 6,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true,
        ],
        'numero_sequencial_arquivo' => [ // G018
            'tamanho'  => 6,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true,
        ],
        'versao_layout'             => [ // G019
            'tamanho'  => 3,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true,
        ],
        'densidade_gravacao'        => [ // G020
            'tamanho'  => 5,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true,
        ],
        'filler4'                   => [ // G021 Processada: ‘REMESSA PROCESSADA‘, Processada Parcial: ‘REMESSA PROCESSADA P’, Rejeitada: 'REMESSA REJEITADA’
            'tamanho'  => 20,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'situacao_arquivo'          => [ // G022
            'tamanho'  => 20,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'versao_aplicativo'         => [
            'tamanho'  => 4,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'filler5'                   => [
            'tamanho'  => 25,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
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