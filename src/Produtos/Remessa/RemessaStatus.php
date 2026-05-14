<?php

namespace OmieLib\Produtos\Remessa;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Remessa\Request\RemessaDevolverRequest;
use OmieLib\Produtos\Remessa\Request\RemessaListarRequest;
use OmieLib\Produtos\Remessa\Request\RemessaStatusRequest;
use OmieLib\Produtos\Remessa\Response\RemessaDevolverResponse;
use OmieLib\Produtos\Remessa\Response\RemessaListarResponse;
use OmieLib\Produtos\Remessa\Response\RemessaStatusResponse;

/**
 * Status da Remessa no Omie
 *
 * @pw_element integer $nCodRem Código da Remessa no Omie
 * @pw_element string $cCodIntRem Código de Integração da Remessa
 * @pw_element string $cCodStatus Código do Status do processamento.
 * @pw_element string $cDesStatus Descrição do status de processamento.
 * @pw_element string $cNumeroRemessa Número da Remessa exibido na tela.
 * @pw_complex remessaStatus
 */
class RemessaStatus{
	/**
	 * Código da Remessa no Omie
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
	 * Código do Status do processamento.
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do status de processamento.
	 *
	 * @var string
	 */
	public string $cDesStatus;
	/**
	 * Número da Remessa exibido na tela.
	 *
	 * @var string
	 */
	public string $cNumeroRemessa;
}
