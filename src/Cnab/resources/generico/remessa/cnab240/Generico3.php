<?php

namespace CobrancaBancaria\Cnab\resources\generico\remessa\cnab240;

use CobrancaBancaria\Cnab\Especie;
use CobrancaBancaria\Cnab\RegistroRemAbstract;
use CobrancaBancaria\Cnab\RemessaAbstract;

class Generico3 extends RegistroRemAbstract
{
    protected function set_codigo_lote($value)
    {
        //ArquivoAbstract::$loteCounter++;
        $this->data['codigo_lote'] = RemessaAbstract::$loteCounter;
    }

    protected function set_numero_registro($value)
    {
        $lote                          = RemessaAbstract::getLote(RemessaAbstract::$loteCounter);
        $this->data['numero_registro'] = $lote->get_counter();
    }

    protected function set_tipo_inscricao($value)
    {
        $this->data['tipo_inscricao'] = $value;
    }

    protected function set_numero_inscricao($value)
    {
        $this->data['numero_inscricao'] = str_ireplace(['.', '/', '-'], [''], $value);
    }

    protected function set_codigo_beneficiario($value)
    {
        $this->data['codigo_beneficiario'] = RemessaAbstract::$entryData['codigo_beneficiario'];
    }

    protected function set_agencia($value)
    {
        $this->data['agencia'] = RemessaAbstract::$entryData['agencia'];
    }

    protected function set_agencia_dv($value)
    {
        $this->data['agencia_dv'] = RemessaAbstract::$entryData['agencia_dv'];
    }

    protected function set_codigo_convenio($value)
    {
        $this->data['codigo_convenio'] = RemessaAbstract::$entryData['codigo_beneficiario'];
    }

    protected function set_com_registro($value)
    {
        $lote                       = RemessaAbstract::getLote(RemessaAbstract::$loteCounter);
        $this->data['com_registro'] = $lote->tipo_servico;
    }

    /**
     * @param $value
     * @throws \Exception
     */
    protected function set_emissao_boleto($value)
    {
        $this->data['emissao_boleto'] = $value;
        if ($this->data['nosso_numero'] == 0) {
            $this->data['carteira'] = '00';
        } elseif ($this->data['com_registro'] == 1 && $value == 1) {
            $this->data['carteira'] = 11;
        } elseif ($this->data['com_registro'] == 1 && $value == 2) {
            $this->data['carteira'] = 14;
        } elseif ($this->data['com_registro'] == 2 && $value == 1) {
            $this->data['carteira'] = 21;
        } else {
            throw new \Exception("Registros com emissao pelo beneficiario e sem registro nao sao enviados");
        }
    }

    /**
     * @param $value
     * @throws \Exception
     */
    protected function set_seu_numero($value)
    {
        if ($this->data['nosso_numero'] == 0 && $value == '') {
            throw new \Exception('O campo "seu_numero" e obrigatorio, na sua falta usareio o nosso numero, porem esse tambem no foi inserido!!!');
        } else {
            $this->data['seu_numero'] = $value != ' ' ? $value : $this->data['nosso_numero'];
        }
    }

    protected function set_seu_numero2($value)
    {
        $this->data['seu_numero2'] = $value != ' ' ? $value : $this->data['nosso_numero'];
    }

    protected function set_especie_titulo($value)
    {
        if (is_int($value)) {
            $this->data['especie_titulo'] = $value;
        } else {
            $especie                      = new Especie($this->data['codigo_banco']);
            $this->data['especie_titulo'] = $especie->getCodigo($value);
        }
    }

    protected function set_cep_sufixo($value)
    {
        $cep                       = $this->data['cep_pagador'];
        $cep_array                 = explode('-', $cep);
        $this->data['cep_pagador'] = $cep_array[0];
        $this->data['cep_sufixo']  = $cep_array[1];
    }

    protected function set_mensagem_3($value)
    {
        $mensagem                 = (isset($this->entryData['mensagem'])) ? explode(PHP_EOL, $this->entryData['mensagem']) : [];
        $this->data['mensagem_3'] = count($mensagem) >= 1 ? $mensagem[0] : ' ';
    }

    protected function set_mensagem_4($value)
    {
        $mensagem                 = (isset($this->entryData['mensagem'])) ? explode(PHP_EOL, $this->entryData['mensagem']) : [];
        $this->data['mensagem_4'] = count($mensagem) >= 2 ? $mensagem[1] : ' ';
    }

    protected function set_mensagem_5($value)
    {
        $mensagem                 = (isset($this->entryData['mensagem'])) ? explode(PHP_EOL, $this->entryData['mensagem']) : [];
        $this->data['mensagem_5'] = count($mensagem) >= 3 ? $mensagem[2] : ' ';
    }

    protected function set_mensagem_6($value)
    {
        $mensagem                 = (isset($this->entryData['mensagem'])) ? explode(PHP_EOL, $this->entryData['mensagem']) : [];
        $this->data['mensagem_6'] = count($mensagem) >= 4 ? $mensagem[3] : ' ';
    }

    protected function set_mensagem_7($value)
    {
        $mensagem                 = (isset($this->entryData['mensagem'])) ? explode(PHP_EOL, $this->entryData['mensagem']) : [];
        $this->data['mensagem_7'] = count($mensagem) >= 5 ? $mensagem[4] : ' ';
    }

    protected function set_mensagem_8($value)
    {
        $mensagem                 = (isset($this->entryData['mensagem'])) ? explode(PHP_EOL, $this->entryData['mensagem']) : [];
        $this->data['mensagem_8'] = count($mensagem) >= 6 ? $mensagem[5] : ' ';
    }

    protected function set_informacao_pagador($value)
    {
        $mensagem                         = (isset($this->entryData['informacao_pagador'])) ? $this->entryData['informacao_pagador'] : '';
        $this->data['informacao_pagador'] = $mensagem;
    }

    /**
     * @param $value
     * @throws \Exception
     */
    protected function set_prazo_protesto($value)
    {
        if ($this->data['protestar'] == 1 && $value = '') {
            throw new \Exception('O campo "protestar" deve ser 3 para nao protesto e caso querira protetar deve ser informado um prazo maior que 1');
        } else {
            $this->data['prazo_protesto'] = $value;
        }
    }
}