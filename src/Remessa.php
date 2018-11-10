<?php

namespace CobrancaBancaria;

class Remessa extends AbstractRemessa
{
    /**
     * @var Banco
     */
    private $banco;
    /**
     * @var Cedente
     */
    private $cedente;

    /**
     * @var string
     */
    private $layout;

    /**
     * @var int
     */
    private $numeroSequencialArquivo;

    /**
     * @var string
     */
    private $situacaoArquivo;

    public static $qtdLotes = 0;

    private $lotes;

    /**
     * @return Banco
     */
    public function getBanco(): Banco
    {
        return $this->banco;
    }

    /**
     * @param Banco $banco
     * @return Remessa
     */
    public function setBanco(Banco $banco): Remessa
    {
        $this->banco = $banco;

        return $this;
    }

    /**
     * @return Cedente
     */
    public function getCedente(): Cedente
    {
        return $this->cedente;
    }

    /**
     * @param Cedente $cedente
     * @return Remessa
     */
    public function setCedente(Cedente $cedente): Remessa
    {
        $this->cedente = $cedente;

        return $this;
    }

    /**
     * @return string
     */
    public function getLayout(): string
    {
        return $this->layout;
    }

    /**
     * @param string $layout
     * @return Remessa
     */
    public function setLayout(string $layout): Remessa
    {
        $this->layout = $layout;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumeroSequencialArquivo(): int
    {
        return $this->numeroSequencialArquivo;
    }

    /**
     * @param int $numeroSequencialArquivo
     * @return Remessa
     */
    public function setNumeroSequencialArquivo(int $numeroSequencialArquivo): Remessa
    {
        $this->numeroSequencialArquivo = $numeroSequencialArquivo;

        return $this;
    }

    /**
     * @return string
     */
    public function getSituacaoArquivo(): string
    {
        return $this->situacaoArquivo;
    }

    /**
     * @param string $situacaoArquivo
     * @return Remessa
     */
    public function setSituacaoArquivo(string $situacaoArquivo): Remessa
    {
        $this->situacaoArquivo = $situacaoArquivo;

        return $this;
    }

    public function addLote(RemessaLote $lote)
    {
        $this->lotes[] = $lote;
    }

    public function gerar()
    {
        $data  = [];
        $class = "CobrancaBancaria\Cnab\L{$this->getLayout()}\Registro0";

//        echo "<pre>";
//        print_r($this->getBanco()->getCodigo());
//        echo "</pre>";
//        exit();

        $registro0 = new $class($this);
        echo "<pre>";
        print_r($registro0->getText());
        echo "</pre>";
        exit();
    }
}