<?php

namespace CobrancaBancaria\Cnab\resources\generico\remessa\cnab240;


use CobrancaBancaria\Cnab\RegistroRemAbstract;

class Generico0 extends RegistroRemAbstract
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
        if ($value == 1 || $value == 2) {
            $this->data['tipo_inscricao'] = $value;
        } else {
            throw new \Exception("O tipo de incrição deve ser 1  para CPF e 2 para CNPJ, o valor informado foi:" . $value);
        }
    }

    protected function set_numero_inscricao($value)
    {
        $this->data['numero_inscricao'] = str_ireplace(['.', '/', '-'], [''], $value);
    }

    public function get_numero_registro()
    {
        return null;
    }

}