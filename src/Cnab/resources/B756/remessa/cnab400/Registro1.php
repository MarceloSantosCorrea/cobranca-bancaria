<?php
namespace Cnab\resources\b756\remessa\cnab400;

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
        'agencia_dv'               => [
            'tamanho'  => 1,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'conta'                    => [
            'tamanho'  => 8,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'conta_dv'                 => [
            'tamanho'  => 1,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'numero_convenio'          => [
            'tamanho'  => 6,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'seu_numero'               => [
            'tamanho'  => 25,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'nosso_numero'             => [
            'tamanho'  => 11,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'nosso_numero_dv'          => [
            'tamanho'  => 1,
            'default'  => '0', // colocado valor inicial 0 para que quando o modulo 11 retorne 0 nao gere bug
            'tipo'     => 'int',
            'required' => true],
        'numero_parcela'           => [            //34.3P
            'tamanho'  => 2,
            'default'  => '1',
            'tipo'     => 'int',
            'required' => true],
        'grupo_valor'              => [            //34.3P
            'tamanho'  => 2,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'filler3'                  => [
            'tamanho'  => 3,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'indicador_mens_aval'      => [
            'tamanho'  => 1,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'prefixo_titulo'           => [
            'tamanho'  => 3,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'carteira_banco'           => [      //13.3P
            'tamanho'  => 3,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'conta_caucao'             => [      //13.3P
            'tamanho'  => 1,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'numero_contrato'          => [      //13.3P
            'tamanho'  => 5,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'numero_contrato_dv'       => [      //13.3P
            'tamanho'  => 1,
            'default'  => '0',
            'tipo'     => 'alfa',
            'required' => true],
        'numero_bordero'           => [      //13.3P
            'tamanho'  => 6,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'filler32'                 => [
            'tamanho'  => 4,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'emissao_boleto'           => [
            'tamanho'  => 1,
            'default'  => '2',
            'tipo'     => 'int',
            'required' => true],
        'cod_carteira'             => [      //13.3P
            'tamanho'  => 2,
            'default'  => '1',
            'tipo'     => 'int',
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
            'default'  => '756',
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
            'tipo'     => 'alfa',
            'required' => true],
        'especie_titulo'           => [    //24.3P
            'tamanho'  => 2,
            'default'  => '1',
            'tipo'     => 'int',
            'required' => true],
        'aceite'                   => [            //25.3P
            'tamanho'  => 1,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'data_emissao'             => [            //26.3P
            'tamanho'  => 6,
            'default'  => '',
            'tipo'     => 'date',
            'required' => true],
        'cod_instrucao1'           => [    //24.3P
            'tamanho'  => 2,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'cod_instrucao2'           => [    //24.3P
            'tamanho'  => 2,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'taxa_juros'               => [            //29.3P
            'tamanho'   => 2,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 4,
            'required'  => true],
        'taxa_multa'               => [            //29.3P
            'tamanho'   => 2,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 4,
            'required'  => true],
        'tipo_distribuicao'        => [
            'tamanho'  => 1,
            'default'  => '2',
            'tipo'     => 'int',
            'required' => true],
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
        'codigo_moeda'             => [            //40.3P
            'tamanho'  => 1,
            'default'  => '9',
            'tipo'     => 'int',
            'required' => true],
        'vlr_IOF'                  => [            //33.3P
            'tamanho'   => 10,
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
            'tamanho'  => 40,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
        'endereco_pagador'         => [               // 11.3Q
            'tamanho'  => 37,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
        'bairro_pagador'           => [               //12.3Q
            'tamanho'  => 15,
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
        'nome_avalista_mensagem'   => [        //18.3Q
            'tamanho'  => 40,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'prazo_protesto'           => [
            'tamanho'  => 2,
            'default'  => '0',
            'tipo'     => 'alfa',
            'required' => true],
        'filler4'                  => [            //31.3P
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


    protected function set_nosso_numero_dv($value)
    {
        $result                        = self::mod11($this->data['nosso_numero']);
        $this->data['nosso_numero_dv'] = $result['digito'];
    }

    /**
     * Calcula e retorna o dÃ­gito verificador usando o algoritmo Modulo 11
     *
     * @param string $num
     * @param int $base
     * @return array Retorna um array com as chaves 'digito' e 'resto'
     */
    protected static function mod11($num)
    {
        $codigo_beneficiario = RemessaAbstract::$entryData['codigo_beneficiario'] . RemessaAbstract::$entryData['codigo_beneficiario_dv']; // NÃºmero do contrato: Ã o mesmo nÃºmero da conta
        $agencia             = RemessaAbstract::$entryData['agencia']; // NÃºmero do contrato: Ã o mesmo nÃºmero da conta

        $NossoNumero       = str_pad($num, 7, 0, STR_PAD_LEFT); // AtÃ© 7 dÃ­gitos, nÃºmero sequencial iniciado em 1 (Ex.: 1, 2...)
        $qtde_nosso_numero = strlen($NossoNumero);
        $sequencia         = str_pad($agencia, 4, STR_PAD_LEFT) . str_pad($codigo_beneficiario, 10, 0, STR_PAD_LEFT) . str_pad($NossoNumero, 7, 0, STR_PAD_LEFT);
        $cont              = 0;
        $calculoDv         = 0;
        for ($num = 0; $num < 21; $num++) {
            $cont++;
            if ($cont == 1) {
                $constante = 3;
            }
            if ($cont == 2) {
                $constante = 1;
            }
            if ($cont == 3) {
                $constante = 9;
            }
            if ($cont == 4) {
                $constante = 7;
                $cont      = 0;
            }
            $calculoDv = $calculoDv + (substr($sequencia, $num, 1) * $constante);
        }

        $Resto = $calculoDv % 11;
        if ($Resto == 0 || $Resto == 1) {
            $Dv = 0;
        } else {
            $Dv = 11 - $Resto;
        }

        $result["nosso_numero"] = $NossoNumero;
        $result["digito"]       = $Dv;

        return $result;
    }

}

?>
