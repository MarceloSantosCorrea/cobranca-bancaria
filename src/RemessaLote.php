<?php

namespace CobrancaBancaria;

class RemessaLote
{
    private $detalhes = [];

    /**
     * @return array
     */
    public function getDetalhes(): array
    {
        return $this->detalhes;
    }

    /**
     * @param array $detalhes
     * @return RemessaLote
     */
    public function setDetalhes(array $detalhes): RemessaLote
    {
        $this->detalhes = $detalhes;

        return $this;
    }

    public function addDetalhe(RemessaDetalhe $detalhe)
    {
        $this->detalhes[] = $detalhe;
    }

}