<?php

namespace CobrancaBancaria\Cnab;

abstract class RegistroRemAbstract
{
    protected $data; // array contendo os dados do objeto
    protected $meta;
    protected $children;

    /* método __construct()
    * instancia registro qualquer
    * @$data = array de dados para o registro
    */
    public function __construct($data = NULL)
    {
        if ($data) // se o ID for informado
        {
            // carrega o objeto correspondente
            foreach ($this->meta as $key => $value) {
                $this->$key = (isset($data[$key])) ? $data[$key] : $this->meta[$key]['default'];
            }
        }
    }

    /*
    * método __set()
    * executado sempre que uma propriedade for atribuída.
    */
    public function __set($prop, $value)
    {
        // verifica se existe método set_<propriedade>
        if (method_exists($this, 'set_' . $prop)) {
            // executa o método set_<propriedade>
            call_user_func([$this, 'set_' . $prop], $value);
        } else {
            $metaData = (isset($this->meta[$prop])) ? $this->meta[$prop] : null;
            if (($value == "" || $value === NULL) && $metaData[$prop]['default'] != "") {
                $this->data[$prop] = $metaData[$prop]['default'];
            } else {
                // atribui o valor da propriedade
                $this->data[$prop] = $value;
            }
        }
    }

    /*
    * método __get()
    * executado sempre que uma propriedade for requerida
    */
    public function __get($prop)
    {
        // verifica se existe método get_<propriedade>
        if (method_exists($this, 'get_' . $prop)) {
            // executa o método get_<propriedade>
            return call_user_func([$this, 'get_' . $prop]);
        } else {
            return $this->___get($prop);
        }
    }

    /**
     * método ___get()
     * metodo auxiliar para ser chamado para dentro de metodo get personalizado
     * @param $prop
     * @return null|string
     * @throws \Exception
     */
    public function ___get($prop)
    {
        // retorna o valor da propriedade
        if (isset($this->meta[$prop])) {
            $metaData          = (isset($this->meta[$prop])) ? $this->meta[$prop] : null;
            $this->data[$prop] = !isset($this->data[$prop]) || $this->data[$prop] == '' ? $metaData['default'] : $this->data[$prop];
            if ($metaData['required'] == true && ($this->data[$prop] == '' || !isset($this->data[$prop]))) {
                throw new \Exception('Campo faltante ou com valor nulo:' . $prop);
            }
            switch ($metaData['tipo']) {
                case 'decimal':
                    $retorno = ($this->data[$prop]) ? number_format($this->data[$prop], $metaData['precision'], '', '') : '';

                    return str_pad($retorno, $metaData['tamanho'] + $metaData['precision'], '0', STR_PAD_LEFT);
                    break;
                case 'int':
                    $retorno = (isset($this->data[$prop])) ? abs($this->data[$prop]) : '';

                    return str_pad($retorno, $metaData['tamanho'], '0', STR_PAD_LEFT);
                    break;
                case 'alfa':
                    $retorno = ($this->data[$prop]) ? $this->prepareText($this->data[$prop]) : '';

                    return str_pad(mb_substr($retorno, 0, $metaData['tamanho'], "UTF-8"), $metaData['tamanho'], ' ', STR_PAD_RIGHT);
                    break;
                case 'alfa2':
                    $retorno = ($this->data[$prop]) ? $this->data[$prop] : '';

                    return str_pad(mb_substr($retorno, 0, $metaData['tamanho'], "UTF-8"), $metaData['tamanho'], ' ', STR_PAD_RIGHT);
                    break;
                case $metaData['tipo'] == 'date' && $metaData['tamanho'] == 6:
                    $retorno = ($this->data[$prop]) ? date("dmy", strtotime($this->data[$prop])) : '';

                    return str_pad($retorno, $metaData['tamanho'], '0', STR_PAD_LEFT);
                    break;
                case $metaData['tipo'] == 'date' && $metaData['tamanho'] == 8:
                    $retorno = ($this->data[$prop]) ? date("dmY", strtotime($this->data[$prop])) : '';

                    return str_pad($retorno, $metaData['tamanho'], '0', STR_PAD_LEFT);
                    break;
                default:
                    return null;
                    break;
            }
        }
    }

    /*
    * método getUnformated()
    * busca o valor de dentro do campo dentro do objeto de forma simples sem formata??o de valor por exemplo
    */
    public function getUnformated($prop)
    {
        // retorna o valor da propriedade
        if (isset($this->data[$prop])) {
            return $this->data[$prop];
        }
    }

    /* método prepareText()
    * metodo retirado do projeto andersondanilo/Cnab e usado como esta sem alteração
    * recebe um texto e prepara para inserir no arquivo de texto
    */
    private function prepareText($text, $remove = null)
    {
        $result = strtoupper($this->removeAccents(trim(html_entity_decode($text))));
        if ($remove)
            $result = str_replace(str_split($remove), '', $result);

        return $result;
    }

    /*
    * método removeAccents()
    * metodo retirado do projeto andersondanilo/Cnab e usado como esta sem altera??o
    * recebe um texto e prepara para inserir no arquivo de texto
    */
    private function removeAccents($string)
    {
        return preg_replace(
            [
                '/\xc3[\x80-\x85]/',
                '/\xc3\x87/',
                '/\xc3[\x88-\x8b]/',
                '/\xc3[\x8c-\x8f]/',
                '/\xc3([\x92-\x96]|\x98)/',
                '/\xc3[\x99-\x9c]/',

                '/\xc3[\xa0-\xa5]/',
                '/\xc3\xa7/',
                '/\xc3[\xa8-\xab]/',
                '/\xc3[\xac-\xaf]/',
                '/\xc3([\xb2-\xb6]|\xb8)/',
                '/\xc3[\xb9-\xbc]/',
            ],
            str_split('ACEIOUaceiou', 1),
            $this->isUtf8($string) ? $string : utf8_encode($string)
        );
    }

    /*
    * método removeAccents()
    * metodo retirado do projeto andersondanilo/Cnab e usado como esta sem alteração
    * recebe um texto e prepara para inserir no arquivo de texto
    */
    private function isUtf8($string)
    {
        return preg_match('%^(?:
            [\x09\x0A\x0D\x20-\x7E]
            | [\xC2-\xDF][\x80-\xBF]
            | \xE0[\xA0-\xBF][\x80-\xBF]
            | [\xE1-\xEC\xEE\xEF][\x80-\xBF]{2}
            | \xED[\x80-\x9F][\x80-\xBF]
            | \xF0[\x90-\xBF][\x80-\xBF]{2}
            | [\xF1-\xF3][\x80-\xBF]{3}
            | \xF4[\x80-\x8F][\x80-\xBF]{2}
            )*$%xs',
            $string
        );
    }

    /*
    * método getText()
    * metodo magico que trabalha recursivamente nos filhos e netos desse objeto 
    * prepara as linhas para serem exportadas para txt
    */
    public function getText()
    {
        $retorno = '';
        foreach ($this->meta as $key => $value) {
            $retorno .= $this->$key;
        }
        RemessaAbstract::$retorno[] = $retorno;
        if ($this->children) {
            // percorre todos objetos filhos
            foreach ($this->children as $child) {
                $child->getText();
            }
        }
    }
}