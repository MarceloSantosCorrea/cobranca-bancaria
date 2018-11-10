<?php

namespace CobrancaBancaria\Cnab;

abstract class RemessaAbstract
{
    public static  $banco; // sera atribuido o nome do banco que tambem ? o nome da pasta que contem os layouts
    public static  $layout;// recebera o nome do layout na instacia?ao
    public static  $hearder; // armazena o objeto registro 0 do arquivo
    public static  $entryData; // mantem os dados passados em $data na instanciação
    public static  $loteCounter = 1; // contador de lotes
    private static $children    = []; // armazena os registros filhos da classe remessa
    public static  $retorno     = []; // durante a geração do txt de retorno se tornara um array com as linhas do arquvio

    /*
    * método __construct()
    * Recebe os parametros
    * @$banco = nome do banco no momento so Caixa
    * @$layout = nome do layout no momento so Cnab240_SIGCB
    * @$data = um array contendo os dados nessesarios para o arquvio
    */
    public function __construct($banco, $layout, $data)
    {
        self::$banco      = "B" . $banco;
        self::$layout     = $layout;
        $class            = '\CobrancaBancaria\Cnab\resources\\' . self::$banco . '\remessa\\' . self::$layout . '\Registro0';
        self::$entryData  = $data;
        self::$hearder    = new $class($data);
        self::$children[] = self::$hearder;
    }

    /*
    * método inserirDetalhe()
    * Recebe os parametros
    * @$data = um array contendo os dados nessesarios para o arquvio
    */
    public function inserirDetalhe($data)
    {
        $class = '\CobrancaBancaria\Cnab\resources\\' . self::$banco . '\remessa\\' . self::$layout . '\Registro1';
        self::addChild(new $class($data));
        //self::$counter++;
    }

    /*
    * método changeLayout()
    * Recebe os parametros
    * @$newLayout = altera o layout do lote , servira para enviar lotes de layouts diferentes no mesmo arquvio //(ALERTA) nao testado
    */
    public function changeLayout($newLayout)
    {
        self::$layout = $newLayout;
    }

    /*
    * método addChild()
    * Recebe os parametros abaixo e insere num array para uso fururo
    * @RegistroRemAbstract $child = recebe um filho de RegistroRemAbstract
    */

    static private function addChild(RegistroRemAbstract $child)
    {
        self::$children[] = $child;
    }

    /*
    * método addLote()
    * Recebe os parametros abaixo e insere num array para uso futuro
    * @array $data = recebe um array contendo os dados do lote a sera aberto e retorna para qualqer layout 240 o lote criado ou $this se outro
    */
    public function addLote(array $data)
    {
        if (strpos(self::$layout, '240')) {
            $class    = '\CobrancaBancaria\Cnab\resources\\' . self::$banco . '\remessa\\' . self::$layout . '\Registro1';
            $loteData = $data ? $data : RemessaAbstract::$entryData;
            $lote     = new $class($loteData);
            self::addChild($lote);
        } else {
            $lote = $this;
        }

        return $lote;
        self::$loteCounter++;
    }

    /*
    * método getLote()
    * Metodo statico para pegar o objeto do lote
    * @$index = o indice do lote , normalmente 1
    */
    public static function getLote($index)
    {
        return self::$children[$index];
    }

    /*
    * método getText()
    * Metodo que percorre todos os filhos acionando o metodo getText() deles
    */
    public function getText()
    {
        foreach (self::$children as $child) {
            $child->getText();
        }
        $class         = '\CobrancaBancaria\Cnab\resources\\' . self::$banco . '\remessa\\' . self::$layout . '\Registro9';
        $headerArquivo = new $class(['1' => 1]);
        $headerArquivo->getText();

        return implode("\r\n", self::$retorno) . "\r\n";
    }
}