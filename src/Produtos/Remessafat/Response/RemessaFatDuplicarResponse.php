<?php

namespace OmieLib\Produtos\Remessafat\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Remessafat\RemessaProdutoFaturamentoJsonClient;
use OmieLib\Produtos\Remessafat\Request\RemessaFatCancelarRequest;
use OmieLib\Produtos\Remessafat\Request\RemessaFatConcluirRequest;
use OmieLib\Produtos\Remessafat\Request\RemessaFatConferirRequest;
use OmieLib\Produtos\Remessafat\Request\RemessaFatDuplicarRequest;

/**
 * Resposta da duplicidade de remessa de produto
 *
 * @pw_element integer $nCodRem Código da Remessa
 * @pw_element string $cCodIntRem Código de Integração da Remessa
 * @pw_element string $cCodStatus Código do Status
 * @pw_element string $cDescStatus Descrição do Status
 * @pw_complex remessaFatDuplicarResponse
 */
class RemessaFatDuplicarResponse{
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
	/**
	 * Código do Status
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do Status
	 *
	 * @var string
	 */
	public string $cDescStatus;
}
