<?php

namespace CobrancaBancaria\Cnab\resources\B104\retorno\L030;

use Cnab\resources\generico\remessa\cnab240\Generico1;
use Cnab\RetornoAbstract;

class Registro1 extends Generico1
{
    protected $meta = [
        'codigo_banco'        => [
            'tamanho'  => 3,
            'default'  => '104',
            'tipo'     => 'int',
            'required' => true],
        'codigo_lote'         => [
            'tamanho'  => 4,
            'default'  => 1,
            'tipo'     => 'int',
            'required' => true],
        'tipo_registro'       => [
            'tamanho'  => 1,
            'default'  => 1,
            'tipo'     => 'int',
            'required' => true],
        'operacao'            => [
            'tamanho'  => 1,
            'default'  => 'R',
            'tipo'     => 'alfa',
            'required' => true],
        'tipo_servico'        => [
            'tamanho'  => 2,
            'default'  => '01',
            'tipo'     => 'int',
            'required' => true],
        'filler1'             => [
            'tamanho'  => 2,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'versa_layout'        => [
            'tamanho'  => 3,
            'default'  => '030',
            'tipo'     => 'int',
            'required' => true],
        'filler2'             => [
            'tamanho'  => 1,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'tipo_inscricao'      => [
            'tamanho'  => 1,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'numero_inscricao'    => [
            'tamanho'  => 15,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'codigo_beneficiario' => [
            'tamanho'  => 6,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'uso_caixa1'          => [
            'tamanho'  => 14,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'agencia'             => [
            'tamanho'  => 5,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'agencia_dv'          => [
            'tamanho' => 1,
            'default' => '',
            'tipo'    => 'int', 'required' => true],
        'codigo_convenio'     => [
            'tamanho'  => 6,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'modelo_boleto'       => [
            'tamanho'  => 7,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'uso_caixa2'          => [
            'tamanho'  => 1,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'nome_empresa'        => [
            'tamanho'  => 30,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
        'mensagem_fixa1'      => [// mensagems 1 e 2 : somente use para mensagens que serao impressas de forma identica em todos os boletos do lote
            'tamanho'  => 40,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'mensagem_fixa2'      => [// mensagems 1 e 2 : somente use para mensagens que serao impressas de forma identica em todos os boletos do lote
            'tamanho'  => 40,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'numero_remessa'      => [
            'tamanho'  => 8,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'data_gravacao'       => [
            'tamanho'  => 8,
            'default'  => '',// nao informar a data na instanciação - gerada dinamicamente
            'tipo'     => 'date',
            'required' => true],
        'filler3'             => [
            'tamanho'  => 8,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'filler4'             => [
            'tamanho'  => 33,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
    ];

    public function __construct($linhaTxt)
    {
        parent::__construct($linhaTxt);
        $this->inserirDetalhe(RetornoAbstract::$lines[RetornoAbstract::$linesCounter]);
    }

    /*
    * método inserirDetalhe()
    * Recebe os parametros
    * @$data = um array contendo os dados nessesarios para o arquvio
    */
    public function inserirDetalhe($linhaTxt)
    {

        $class = 'CobrancaBancaria\Cnab\resources\\' . RetornoAbstract::$banco . '\retorno\\' . RetornoAbstract::$layout . '\Registro3T';
        self::addChild(new $class($linhaTxt));
        RetornoAbstract::$linesCounter++;
        //self::$counter++;
    }

}

?>
