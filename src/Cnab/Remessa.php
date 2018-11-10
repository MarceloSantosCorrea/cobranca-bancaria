<?php

namespace CobrancaBancaria\Cnab;

class Remessa extends RemessaAbstract
{
    public function __construct($banco, $layout, $data)
    {
        parent::__construct($banco, $layout, $data);
    }
}