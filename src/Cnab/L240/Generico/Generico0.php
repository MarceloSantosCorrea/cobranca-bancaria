<?php

namespace CobrancaBancaria\Cnab\L240\Generico;

use CobrancaBancaria\AbstractRemessaRegistro;

class Generico0 extends AbstractRemessaRegistro
{
    protected $counter;

    protected function set_situacao_arquivo($value)
    {
        $this->data['situacao_arquivo'] = ($value == 'T') ? "REMESSA-TESTE" : "REMESSA-PRODUCAO";
    }

    protected function set_data_geracao($value)
    {
        $this->data['data_geracao'] = date('Y-m-d');
    }

    protected function set_hora_geracao($value)
    {
        $this->data['hora_geracao'] = date('His');
    }

    /**
     * @param $value
     * @throws \Exception
     */
    protected function set_tipo_inscricao($value)
    {
        if ($this->remessa->getCedente()->getTipoInscricao() == 1 || $this->remessa->getCedente()->getTipoInscricao() == 2) {
            $this->data['tipo_inscricao'] = $this->remessa->getCedente()->getTipoInscricao();
        } else {
            throw new \Exception("O tipo de incrição deve ser 1  para CPF e 2 para CNPJ, o valor informado foi: " . $this->remessa->getCedente()->getTipoInscricao());
        }
    }

    protected function set_numero_inscricao($value)
    {
        $this->data['numero_inscricao'] = str_ireplace(['.', '/', '-'], [''], $this->remessa->getCedente()->getCpfCnpj());
    }

    public function get_numero_registro()
    {
        return null;
    }

    public function set_agencia()
    {
        $this->data['agencia'] = $this->remessa->getCedente()->getAgencia();
    }

    public function set_agencia_dv()
    {
        $this->data['agencia_dv'] = $this->remessa->getCedente()->getAgenciaComDv();
    }

    public function set_codigo_beneficiario()
    {
        $this->data['codigo_beneficiario'] = $this->remessa->getCedente()->getConta();
    }

    public function set_nome_empresa()
    {
        $this->data['nome_empresa'] = $this->remessa->getCedente()->getNome();
    }

    public function set_numero_sequencial_arquivo()
    {
        $this->data['numero_sequencial_arquivo'] = $this->remessa->getNumeroSequencialArquivo();
    }
}