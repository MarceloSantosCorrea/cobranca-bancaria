<?php

namespace CobrancaBancaria;

class RemessaDetalhe
{
    /**
     * @var Sacado
     */
    private $sacado;

    /**
     * @return Sacado
     */
    public function getSacado(): Sacado
    {
        return $this->sacado;
    }

    /**
     * @param Sacado $sacado
     * @return RemessaDetalhe
     */
    public function setSacado(Sacado $sacado): RemessaDetalhe
    {
        $this->sacado = $sacado;

        return $this;
    }
}