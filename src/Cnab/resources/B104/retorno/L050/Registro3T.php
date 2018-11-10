<?php

namespace CobrancaBancaria\Cnab\resources\B104\retorno\L050;

use Cnab\resources\generico\retorno\L050\Generico3;
use Cnab\RetornoAbstract;
use Cnab\Exception;

class Registro3T extends Generico3
{
    protected $meta = [
        'codigo_banco'     => [          // 1.3T
            'tamanho'  => 3,
            'default'  => '104',
            'tipo'     => 'int',
            'required' => true],
        'codigo_lote'      => [           // 2.3T
            'tamanho'  => 4,
            'default'  => 1,
            'tipo'     => 'int',
            'required' => true],
        'tipo_registro'    => [         // 3.3T
            'tamanho'  => 1,
            'default'  => '3',
            'tipo'     => 'int',
            'required' => true],
        'numero_registro'  => [       // 4.3T
            'tamanho'  => 5,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'seguimento'       => [            // 5.3T
            'tamanho'  => 1,
            'default'  => 'T',
            'tipo'     => 'alfa',
            'required' => true],
        'filler1'          => [               // 6.3T
            'tamanho'  => 1,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'codigo_movimento' => [      // 7.3T
            'tamanho'  => 2,
            'default'  => '01', // entrada de titulo
            'tipo'     => 'int',
            'required' => true],

        // - ------------------ até aqui é igual para todo registro tipo 3

        'agencia'             => [               // 8.3T
            'tamanho'  => 5,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'agencia_dv'          => [            // 9.3T
            'tamanho'  => 1,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
        'codigo_convenio'     => [       //10.3T
            'tamanho'  => 6,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'filler2'             => [               // 11.3T
            'tamanho'  => 3,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'num_banco_pagadores' => [               // 11.3T
            'tamanho'  => 3,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'filler3'             => [               //12.3T
            'tamanho'  => 1,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'filler4'             => [               //12.3T
            'tamanho'  => 3,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'carteira'            => [      //13.3T
            'tamanho'  => 2,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'nosso_numero'        => [  //13.3T
            'tamanho'  => 15,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'dv_nosso_numero'     => [  //13.3T
            'tamanho'  => 1,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'codigo_carteira'     => [   //14.3T
            'tamanho'  => 1,
            'default'  => '1',
            'tipo'     => 'int',
            'required' => true],
        'seu_numero'          => [      //15.3T
            'tamanho'  => 11,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'filler5'             => [        //15.3T
            'tamanho'  => 4,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'data_vencimento'     => [          // 16.3
            'tamanho'  => 8,
            'default'  => '',
            'tipo'     => 'date',
            'required' => true],
        'vlr_nominal'         => [        //18.3T
            'tamanho'   => 13,
            'default'   => '0',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'cod_banco_receb'     => [            //19.3T
            'tamanho'  => 3,
            'default'  => ' ',      // este espaço foi colocado para passa a validação para os seters do generico
            'tipo'     => 'alfa',
            'required' => true],
        'agencia_recebedora'  => [               //19.3T
            'tamanho'  => 5,
            'default'  => ' ',
            'tipo'     => 'int',
            'required' => true],
        'dv_agencia_receb'    => [            //20.3
            'tamanho'  => 1,
            'default'  => '',
            'tipo'     => 'date',
            'required' => true],
        'seu_numero2'         => [                 //21.3T
            'tamanho'  => 25,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
        'codigo_moeda'        => [    //22.3T
            'tamanho'  => 2,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'tipo_inscricao'      => [    //23.3T
            'tamanho'  => 1,
            'default'  => '0',
            'tipo'     => 'int', // originalmente no manual esta alfa mas foi mudado para int para funcionar
            'required' => true],
        'numero_inscricao'    => [    //24.3T
            'tamanho'  => 15,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'nome_pagador'        => [            //25.3T
            'tamanho'  => 40,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
        'filler6'             => [            //26.3T
            'tamanho'  => 10,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
        'vlr_tarifa'          => [            //27.3T
            'tamanho'   => 13,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'codigo_ocorrencia'   => [            //28.3T
            'tamanho'  => 10,
            'default'  => '0',
            'tipo'     => 'date',
            'required' => true],
        'filler7'             => [            //29.3T
            'tamanho'  => 17,
            'default'  => '0',
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
        RetornoAbstract::$linesCounter++;
        $class            = 'CobrancaBancaria\Cnab\resources\\' . RetornoAbstract::$banco . '\retorno\\' . RetornoAbstract::$layout . '\Registro3U';
        $this->children[] = new $class(RetornoAbstract::$lines[RetornoAbstract::$linesCounter]);
        if (substr(RetornoAbstract::$lines[RetornoAbstract::$linesCounter + 1], 14, 1) == "Y") {
            if (substr(RetornoAbstract::$lines[RetornoAbstract::$linesCounter + 1], 18, 2) == "50") {
                //RetornoAbstract::$linesCounter++;
                //$class = 'CobrancaBancaria\Cnab\resources\\'.RetornoAbstract::$banco.'\retorno\\'.RetornoAbstract::$layout.'\Registro3Y50';
                //$this->children[] = new $class(RetornoAbstract::$lines[RetornoAbstract::$linesCounter]);
            } elseif (substr(RetornoAbstract::$lines[RetornoAbstract::$linesCounter + 1], 18, 2) == "08") {
                RetornoAbstract::$linesCounter++;
                $class            = 'CobrancaBancaria\Cnab\resources\\' . RetornoAbstract::$banco . '\retorno\\' . RetornoAbstract::$layout . '\Registro3Y08';
                $this->children[] = new $class(RetornoAbstract::$lines[RetornoAbstract::$linesCounter]);
            }
        }
    }

    public function get_data_ocorrencia()
    {
        $r3u = $this->R3U;

        return $r3u->___get('data_ocorrencia');
    }

    public function get_vlr_pago()
    {
        $r3u = $this->R3U;

        return $r3u->___get('vlr_pago');
    }

    public function get_codigo_movimento()
    {
        $r3u = $this->R3U;

        return $r3u->codigo_movimento;
    }
}

?>