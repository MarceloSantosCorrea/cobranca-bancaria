<?php

namespace CobrancaBancaria;

abstract class AbstractRemessaRegistro
{
    protected $data;
    protected $meta;
    protected $codigo_banco;
    protected $children;
    /**
     * @var Remessa
     */
    protected $remessa;

    public function __construct(Remessa $remessa)
    {
        $this->remessa = $remessa;

        foreach ($this->meta as $key => $value) {
            $this->$key = $this->meta[$key]['default'];
        }
    }

    /**
     * @return mixed
     */
    public function get_codigo_banco()
    {
        return $this->codigo_banco;
    }

    /**
     * @param mixed $codigo_banco
     * @return AbstractRemessaRegistro
     */
    public function set_codigo_banco($value)
    {
        $this->codigo_banco = $this->remessa->getBanco()->getCodigo();

        return $this;
    }

    public function __set($prop, $value)
    {
        if (method_exists($this, 'set_' . $prop)) {
            call_user_func([$this, 'set_' . $prop], $value);
        } else {
            $metaData = (isset($this->meta[$prop])) ? $this->meta[$prop] : null;

            if (($value == "" || $value === NULL) && $metaData['default'] != "") {
                $this->data[$prop] = $metaData[$prop]['default'];
            } else {
                $this->data[$prop] = $value;
            }
        }
    }

    /**
     * @param $prop
     * @return mixed|null|string
     * @throws \Exception
     */
    public function __get($prop)
    {
        if (method_exists($this, 'get_' . $prop)) {
            return call_user_func([$this, 'get_' . $prop]);
        } else {
            return $this->___get($prop);
        }
    }

    /**
     * @param $prop
     * @return null|string
     * @throws \Exception
     */
    public function ___get($prop)
    {
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

    public function getUnformated($prop)
    {
        if (isset($this->data[$prop])) {
            return $this->data[$prop];
        }
    }

    private function prepareText($text, $remove = null)
    {
        $result = strtoupper($this->removeAccents(trim(html_entity_decode($text))));
        if ($remove)
            $result = str_replace(str_split($remove), '', $result);

        return $result;
    }

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

    public function getText()
    {
        $retorno = '';
        foreach ($this->meta as $key => $value) {
            $retorno .= $this->$key;
        }
        AbstractRemessa::$retorno[] = $retorno;
        if ($this->children) {
            // percorre todos objetos filhos
            foreach ($this->children as $child) {
                $child->getText();
            }
        }
    }
}