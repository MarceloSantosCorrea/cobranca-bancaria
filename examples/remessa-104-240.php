<?php

//use CobrancaBancaria\Cnab\Remessa;

require_once __DIR__ . '/../vendor/autoload.php';

//$arquivo = new Remessa(104, 'cnab240', [
//    'nome_empresa'              => "Empresa ABC", // seu nome de empresa
//    'tipo_inscricao'            => 2, // 1 para cpf, 2 cnpj
//    'numero_inscricao'          => '123.122.123-56', // seu cpf ou cnpj completo
//    'agencia'                   => '3300', // agencia sem o digito verificador
//    'agencia_dv'                => 6, // somente o digito verificador da agencia
//    'conta'                     => '3264', // número da conta
//    'conta_dv'                  => 6, // digito da conta
//    'codigo_beneficiario'       => '10668', // codigo fornecido pelo banco
//    'codigo_beneficiario_dv'    => '2', // codigo fornecido pelo banco
//    'numero_sequencial_arquivo' => 1,
//    'situacao_arquivo'          => 'P' // use T para teste e P para produ��o
//]);
//$lote    = $arquivo->addLote(['tipo_servico' => 1]); // tipo_servico  = 1 para cobran�a registrada, 2 para sem registro
//
//$lote->inserirDetalhe([
//    'codigo_ocorrencia' => 1, //1 = Entrada de título, para outras opções ver nota explicativa C004 manual Cnab_SIGCB na pasta docs
//    'nosso_numero'      => 50, // numero sequencial de boleto
//    'seu_numero'        => 43,// se nao informado usarei o nosso numero
//    /* campos necessarios somente para itau e siccob,  não precisa comentar se for outro layout    */
//    'carteira_banco'    => 109, // codigo da carteira ex: 109,RG esse vai o nome da carteira no banco
//    'cod_carteira'      => "01", // I para a maioria ddas carteiras do itau
//    /* campos necessarios somente para itau,  não precisa comentar se for outro layout    */
//
//    'especie_titulo'   => "DM", // informar dm e sera convertido para codigo em qualquer laytou conferir em especie.php
//    'valor'            => 100.00, // Valor do boleto como float valido em php
//    'emissao_boleto'   => 2, // tipo de emissao do boleto informar 2 para emissao pelo beneficiario e 1 para emissao pelo banco
//    'protestar'        => 3, // 1 = Protestar com (Prazo) dias, 3 = Devolver ap�s (Prazo) dias
//    'prazo_protesto'   => 5, // Informar o numero de dias apos o vencimento para iniciar o protesto
//    'nome_pagador'     => "JOSÉ da SILVA ALVES", // O Pagador � o cliente, preste atenção nos campos abaixo
//    'tipo_inscricao'   => 1, //campo fixo, escreva '1' se for pessoa fisica, 2 se for pessoa juridica
//    'numero_inscricao' => '123.122.123-56',//cpf ou ncpj do pagador
//    'endereco_pagador' => 'Rua dos developers,123 sl 103',
//    'bairro_pagador'   => 'Bairro da insonia',
//    'cep_pagador'      => '12345-123', // com h�fem
//    'cidade_pagador'   => 'Londrina',
//    'uf_pagador'       => 'PR',
//    'data_vencimento'  => '2016-04-09', // informar a data neste formato
//    'data_emissao'     => '2016-04-09', // informar a data neste formato
//    'vlr_juros'        => 0.15, // Valor do juros de 1 dia'
//    'data_desconto'    => '2016-04-09', // informar a data neste formato
//    'vlr_desconto'     => '0', // Valor do desconto
//    'baixar'           => 2, // codigo para indicar o tipo de baixa '1' (Baixar/ Devolver) ou '2' (N�o Baixar / N�o Devolver)
//    'prazo_baixa'      => 90, // prazo de dias para o cliente pagar ap�s o vencimento
//    'mensagem'         => 'JUROS de R$0,15 ao dia' . PHP_EOL . "Não receber apos 30 dias",
//    'email_pagador'    => 'rogerio@ciatec.net', // data da multa
//    'data_multa'       => '2016-04-09', // informar a data neste formato, // data da multa
//    'vlr_multa'        => 30.00, // valor da multa
//
//    // campos necessários somente para o sicoob
//    'taxa_multa'       => 30.00, // taxa de multa em percentual
//    'taxa_juros'       => 30.00, // taxa de juros em percentual
//    'mensagem_3'       => 'ok',
//]);
//
//$file = fopen(__DIR__ . '/REM-104-CNAB-240.rem', "w");
//fwrite($file, $arquivo->getText());
//fclose($file);

$oRemessa = new \CobrancaBancaria\Remessa();

$oCaixa = new \CobrancaBancaria\Banco\Caixa();
$oRemessa->setBanco($oCaixa);

$oCedente = new \CobrancaBancaria\Cedente();
$oCedente->setNome('MARLENE BURGEL & CIA LTDA - ME');
$oCedente->setTipoInscricao(2);
$oCedente->setCpfCnpj('91.378.372/0001-01');
$oCedente->setEndereco('Dr Francisco M da Rocha N113');
$oCedente->setCidade('Santa Maria');
$oCedente->setUf('RS');
$oCedente->setAgencia('0501');
$oCedente->setDvAgencia('0');
$oCedente->setConta('721933');
$oCedente->setDvConta('4');
$oRemessa->setCedente($oCedente);

$oRemessa->setLayout('240');
$oRemessa->setNumeroSequencialArquivo(1);
$oRemessa->setSituacaoArquivo('P');

$sacados = [
    [
        'nome'     => 'JOSÉ da SILVA ALVES',
        'cpfCnpj'  => '123.122.123-56',
        'endereco' => 'Rua dos developers,123 sl 103',
        'bairro'   => 'Bairro da insonia',
        'cidade'   => 'Santa Maria',
        'estado'   => 'RS',
        'cep'      => '97037-172',
    ],
    [
        'nome'     => 'JOSÉ da SILVA ALVES',
        'cpfCnpj'  => '123.122.123-56',
        'endereco' => 'Rua dos developers,123 sl 103',
        'bairro'   => 'Bairro da insonia',
        'cidade'   => 'Santa Maria',
        'estado'   => 'RS',
        'cep'      => '97037-172',
    ],
    [
        'nome'     => 'JOSÉ da SILVA ALVES',
        'cpfCnpj'  => '123.122.123-56',
        'endereco' => 'Rua dos developers,123 sl 103',
        'bairro'   => 'Bairro da insonia',
        'cidade'   => 'Santa Maria',
        'estado'   => 'RS',
        'cep'      => '97037-172',
    ],
];

$oLote = new \CobrancaBancaria\RemessaLote();

foreach ($sacados as $sacado) {
    $oDetalhe = new \CobrancaBancaria\RemessaDetalhe();

    $oSacado = new \CobrancaBancaria\Sacado();
    $oSacado->setNome($sacado['nome']);
    $oSacado->setCpfCnpj($sacado['cpfCnpj']);
    $oSacado->setEnderecoLogradouro($sacado['endereco']);
    $oSacado->setBairro($sacado['bairro']);
    $oSacado->setCidade($sacado['cidade']);
    $oSacado->setUf($sacado['estado']);
    $oSacado->setCep($sacado['cep']);

    $oDetalhe->setSacado($oSacado);

    $oLote->addDetalhe($oDetalhe);
}

$oRemessa->addLote($oLote);

echo "<pre>";
print_r($oRemessa->gerar());
echo "</pre>";
exit();


