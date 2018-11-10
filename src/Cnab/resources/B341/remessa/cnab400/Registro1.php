<?php
namespace Cnab\resources\b341\remessa\cnab400;

use Cnab\resources\generico\remessa\cnab400\Generico1;
use Cnab\RegistroRemAbstract;
use Cnab\RemessaAbstract;

class Registro1 extends Generico1
{
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
            'tamanho'  => 4,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'cod_intrucao'             => [
            'tamanho'  => 4,
            'default'  => '0',
            'tipo'     => 'int',
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
        'qtd_moeda'                => [            //34.3P
            'tamanho'   => 8,
            'default'   => '0',
            'tipo'      => 'decimal',
            'precision' => 5,
            'required'  => true],
        'carteira_banco'           => [      //13.3P
            'tamanho'  => 3,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'filler3'                  => [
            'tamanho'  => 21,
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
        'numero_documento'         => [      // codigo da ocorrencia no manual itau
            'tamanho'  => 10,
            'default'  => ' ', // entrada de titulo
            'tipo'     => 'alfa',
            'required' => true],
        'data_vencimento'          => [            //20.3
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
            'tamanho'  => 5,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'especie_titulo'           => [    //24.3P
            'tamanho'  => 2,
            'default'  => '2',
            'tipo'     => 'int',
            'required' => true],
        'aceite'                   => [            //25.3P
            'tamanho'  => 1,
            'default'  => 'N',
            'tipo'     => 'alfa',
            'required' => true],
        'data_emissao'             => [            //26.3P
            'tamanho'  => 6,
            'default'  => '',
            'tipo'     => 'date',
            'required' => true],
        'cod_instrucao1'           => [    //24.3P
            'tamanho'  => 2,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'cod_instrucao2'           => [    //24.3P
            'tamanho'  => 2,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'vlr_juros'                => [            //29.3P
            'tamanho'   => 11,
            'default'   => '0',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'data_desconto'            => [            //31.3P
            'tamanho'  => 6,
            'default'  => '0',
            'tipo'     => 'date',
            'required' => true],
        'vlr_desconto'             => [            //32.3P
            'tamanho'   => 11,
            'default'   => '0',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'vlr_IOF'                  => [            //33.3P
            'tamanho'   => 11,
            'default'   => '0',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'vlr_abatimento'           => [            //34.3P
            'tamanho'   => 11,
            'default'   => '0',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true],
        'tipo_inscricao'           => [
            'tamanho'  => 2,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'numero_inscricao'         => [
            'tamanho'  => 14,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'nome_pagador'             => [       //10.3Q
            'tamanho'  => 30,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
        'filler4'                  => [
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
            'tamanho'  => 12,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
        'cep_pagador'              => [      //13.3Q   
            'tamanho'  => 8,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'cidade_pagador'           => [   //15.3Q
            'tamanho'  => 15,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
        'uf_pagador'               => [      //16.3Q
            'tamanho'  => 2,
            'default'  => '',  // combranÃ§a com registro
            'tipo'     => 'alfa',
            'required' => true],
        'nome_avalista'            => [        //18.3Q
            'tamanho'  => 30,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'filler5'                  => [
            'tamanho'  => 4,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'data_mora'                => [            //31.3P
            'tamanho'  => 6,
            'default'  => '0',
            'tipo'     => 'date',
            'required' => true],
        'prazo_baixa'              => [            //31.3P
            'tamanho'  => 2,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'filler6'                  => [
            'tamanho'  => 1,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'numero_registro'          => [       // 4.3R
            'tamanho'  => 6,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
    ];

    public function __construct($data = null)
    {
        if (empty($this->data)) parent::__construct($data);
        //$this->inserirMulta($data); nÃ£o consegui validar o arquivo enviando o registro 2, entao temporariamente ficara desativado
    }

    public function inserirMulta($data)
    {
        if (isset($data['data_multa'])) {
            $class            = 'CobrancaBancaria\Cnab\resources\\' . RemessaAbstract::$banco . '\remessa\\' . RemessaAbstract::$layout . '\Registro2';
            $this->children[] = new $class($data);
        }
    }

    protected function set_cod_instrucao1($value)
    {
        $this->data['cod_instrucao1'] = ($this->protestar == 2) ? '10' : '09';
    }

    protected function set_cod_instrucao2($value)
    {
        $this->data['cod_instrucao2'] = ($value != ' ') ? $value : '00';
    }


}

?>
