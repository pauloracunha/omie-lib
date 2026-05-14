<?php

namespace OmieLib\Produtos\Remessafat\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Remessafat\RemessaProdutoFaturamentoJsonClient;
use OmieLib\Produtos\Remessafat\Response\RemessaFatCancelarResponse;
use OmieLib\Produtos\Remessafat\Response\RemessaFatConcluirResponse;
use OmieLib\Produtos\Remessafat\Response\RemessaFatConferirResponse;
use OmieLib\Produtos\Remessafat\Response\RemessaFatDuplicarResponse;

/**
 * Requisição para conclusão de remessa de produto
 *
 * @pw_element integer $nCodRem Código da Remessa
 * @pw_element string $cCodIntRem Código de Integração da Remessa
 * @pw_complex remessaFatConcluirRequest
 */
class RemessaFatConcluirRequest{
	/**
	 * Código da Remessa
	 *
	 * @var integer
	 */
	public int $nCodRem;
	/**
	 * Código de Integração da Remessa
	 *
	 * @var string
	 */
	public string $cCodIntRem;
}
