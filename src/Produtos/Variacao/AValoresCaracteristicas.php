<?php

namespace OmieLib\Produtos\Variacao;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Variacao\Request\VariacaoConsultarRequest;
use OmieLib\Produtos\Variacao\Request\VariacaoIncluirRequest;
use OmieLib\Produtos\Variacao\Request\VariacaoListarRequest;
use OmieLib\Produtos\Variacao\Response\VariacaoConsultarResponse;
use OmieLib\Produtos\Variacao\Response\VariacaoIncluirResponse;
use OmieLib\Produtos\Variacao\Response\VariacaoListarResponse;

/**
 * Informação da característica e valor.
 *
 * @pw_element integer $nIdCaract Id da Característica.
 * @pw_element integer $nIdValor Id do valor da característica.
 * @pw_complex aValoresCaracteristicas
 */
class AValoresCaracteristicas{
	/**
	 * Id da Característica.
	 *
	 * @var integer
	 */
	public int $nIdCaract;
	/**
	 * Id do valor da característica.
	 *
	 * @var integer
	 */
	public int $nIdValor;
}
