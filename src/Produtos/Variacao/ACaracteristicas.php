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
 * Lista com as característica para a criação da variação do produto.
 *
 * @pw_element integer $nIdCaract Id da Característica.
 * @pw_complex aCaracteristicas
 */
class ACaracteristicas{
	/**
	 * Id da Característica.
	 *
	 * @var integer
	 */
	public int $nIdCaract;
}
