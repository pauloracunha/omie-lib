<?php

namespace OmieLib\Common;

/**
 * Erro gerado pela aplicação Omie.
 */
class OmieFail {
    /**
     * Codigo do erro
     * @var integer
     */
    public $code;

    /**
     * Descricao do erro
     * @var string
     */
    public $description;

    /**
     * Origem do erro
     * @var string
     */
    public $referer;

    /**
     * Indica se eh um erro fatal
     * @var boolean
     */
    public $fatal;
}
