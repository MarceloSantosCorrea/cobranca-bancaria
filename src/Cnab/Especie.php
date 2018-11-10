<?php

namespace CobrancaBancaria\Cnab;

class Especie
{
    private $res    = [];
    private $itau   = [];
    private $caixa  = [];
    private $bb     = [];
    private $siccob = [];
    private $banco;

    public function __construct($banco = null)
    {

        $this->caixa[1]  = ['abr' => "CH", 'txt' => 'Cheque'];
        $this->caixa[2]  = ['abr' => "DM", 'txt' => 'Duplicata Mercantil'];
        $this->caixa[3]  = ['abr' => "DMI", 'txt' => 'Mercantil p/ Indicação'];
        $this->caixa[4]  = ['abr' => "DS", 'txt' => 'Duplicata de Serviço'];
        $this->caixa[5]  = ['abr' => "DSI", 'txt' => 'Duplicata de Serviço p/ Indicação'];
        $this->caixa[6]  = ['abr' => "DR", 'txt' => 'Duplicata Rural'];
        $this->caixa[7]  = ['abr' => "LC", 'txt' => 'Letra de Câmbio'];
        $this->caixa[8]  = ['abr' => "NCC", 'txt' => 'Nota de Crédito Comercial'];
        $this->caixa[9]  = ['abr' => "NCE", 'txt' => 'Nota de Crédito a Exportação'];
        $this->caixa[10] = ['abr' => "NCI", 'txt' => 'Nota de Crédito a Exportação'];
        $this->caixa[11] = ['abr' => "NCR", 'txt' => 'Nota de Crédito Rural'];
        $this->caixa[12] = ['abr' => "NP", 'txt' => 'Nota Promissória'];
        $this->caixa[13] = ['abr' => "NPR", 'txt' => 'Nota Promissória Rural'];
        $this->caixa[14] = ['abr' => "TM", 'txt' => 'Triplicata Mercantil'];
        $this->caixa[15] = ['abr' => "TS", 'txt' => 'Triplicata de Serviço'];
        $this->caixa[16] = ['abr' => "NS", 'txt' => 'Nota de Seguro'];
        $this->caixa[17] = ['abr' => "RC", 'txt' => 'Recibo'];
        $this->caixa[18] = ['abr' => "FAT", 'txt' => 'Fatura'];
        $this->caixa[19] = ['abr' => "ND", 'txt' => 'Nota de Débito'];

        $this->bb[1]  = ['abr' => "CH", 'txt' => 'Cheque'];
        $this->bb[2]  = ['abr' => "DM", 'txt' => 'Duplicata Mercantil'];
        $this->bb[3]  = ['abr' => "DMI", 'txt' => 'Mercantil p/ Indicação'];
        $this->bb[4]  = ['abr' => "DS", 'txt' => 'Duplicata de Serviço'];
        $this->bb[5]  = ['abr' => "DSI", 'txt' => 'Duplicata de Serviço p/ Indicação'];
        $this->bb[6]  = ['abr' => "DR", 'txt' => 'Duplicata Rural'];
        $this->bb[7]  = ['abr' => "LC", 'txt' => 'Letra de Câmbio'];
        $this->bb[8]  = ['abr' => "NCC", 'txt' => 'Nota de Crédito Comercial'];
        $this->bb[9]  = ['abr' => "NCE", 'txt' => 'Nota de Crédito a Exportação'];
        $this->bb[10] = ['abr' => "NCI", 'txt' => 'Nota de Crédito a Exportação'];
        $this->bb[11] = ['abr' => "NCR", 'txt' => 'Nota de Crédito Rural'];
        $this->bb[12] = ['abr' => "NP", 'txt' => 'Nota Promissória'];
        $this->bb[13] = ['abr' => "NPR", 'txt' => 'Nota Promissória Rural'];
        $this->bb[14] = ['abr' => "TM", 'txt' => 'Triplicata Mercantil'];
        $this->bb[15] = ['abr' => "TS", 'txt' => 'Triplicata de Serviço'];
        $this->bb[16] = ['abr' => "NS", 'txt' => 'Nota de Seguro'];
        $this->bb[17] = ['abr' => "RC", 'txt' => 'Recibo'];
        $this->bb[18] = ['abr' => "FAT", 'txt' => 'Fatura'];
        $this->bb[19] = ['abr' => "ND", 'txt' => 'Nota de Débito'];


        $this->itau[1]  = ['abr' => "DM", 'txt' => 'Duplicata Mercantil'];
        $this->itau[2]  = ['abr' => "NP", 'txt' => 'Nota Promissória'];
        $this->itau[3]  = ['abr' => "NS", 'txt' => 'Nota de Seguro'];
        $this->itau[4]  = ['abr' => "ME", 'txt' => 'Mensalidade escolar'];
        $this->itau[5]  = ['abr' => "RC", 'txt' => 'Recibo'];
        $this->itau[6]  = ['abr' => "CT", 'txt' => 'Contrato'];
        $this->itau[7]  = ['abr' => "CS", 'txt' => 'Cosseguros'];
        $this->itau[8]  = ['abr' => "DS", 'txt' => 'Duplicata de Serviço'];
        $this->itau[9]  = ['abr' => "LC", 'txt' => 'Letra de Câmbio'];
        $this->itau[13] = ['abr' => "ND", 'txt' => 'Nota de Débito'];
        $this->itau[15] = ['abr' => "DV", 'txt' => 'Documento de divida'];
        $this->itau[16] = ['abr' => "EC", 'txt' => 'Encargos condominiais'];
        $this->itau[17] = ['abr' => "CPS", 'txt' => 'Conta de prestação de serviço'];
        $this->itau[18] = ['abr' => "DBP", 'txt' => 'Boleto de Proposta'];
        $this->itau[99] = ['abr' => "DIV", 'txt' => 'Diversos'];


        $this->siccob[1]  = ['abr' => "DM", 'txt' => 'Duplicata Mercantil'];
        $this->siccob[2]  = ['abr' => "NP", 'txt' => 'Nota Promissóia'];
        $this->siccob[3]  = ['abr' => "NS", 'txt' => 'Nota de Seguro'];
        $this->siccob[5]  = ['abr' => "RC", 'txt' => 'Recibo'];
        $this->siccob[6]  = ['abr' => "DR", 'txt' => 'Duplicata Rural'];
        $this->siccob[8]  = ['abr' => "LC", 'txt' => 'Letra de Câmbio'];
        $this->siccob[9]  = ['abr' => "WRT", 'txt' => 'Warrant'];
        $this->siccob[10] = ['abr' => "CH", 'txt' => 'Cheque'];
        $this->siccob[12] = ['abr' => "DS", 'txt' => 'Duplicata de Serviço'];
        $this->siccob[13] = ['abr' => "ND", 'txt' => 'Nota de Débito'];
        $this->siccob[14] = ['abr' => "TM", 'txt' => 'Triplicata Mercantil'];
        $this->siccob[15] = ['abr' => "TS", 'txt' => 'Triplicata de Serviço'];
        $this->siccob[18] = ['abr' => "FAT", 'txt' => 'Fatura'];
        $this->siccob[20] = ['abr' => "AP", 'txt' => 'Apólice de Seguros'];
        $this->siccob[21] = ['abr' => "ME", 'txt' => 'Mensalidade escolar'];
        $this->siccob[22] = ['abr' => "ME", 'txt' => 'Parcela de Consórcio'];
        $this->siccob[99] = ['abr' => "DIV", 'txt' => 'Outros'];

        $this->res['104'] = $this->caixa;
        $this->res['341'] = $this->itau;
        $this->res['001'] = $this->bb;
        $this->res['756'] = $this->siccob;

        $this->banco = $this->res[$banco];
    }

    public function getAbr($especie)
    {
        return $this->banco[$especie]['abr'];
    }

    public function getBanco()
    {
        return $this->banco;
    }

    public function getCodigo($abr)
    {
        foreach ($this->banco as $key => $especie) {
            if ($especie['abr'] == $abr) {
                return $key;
                break;
            }
        }
    }

}