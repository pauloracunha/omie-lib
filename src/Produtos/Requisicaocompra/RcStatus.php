<?php

namespace OmieLib\Produtos\Requisicaocompra;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Requisicaocompra\Request\RcListarRequest;
use OmieLib\Produtos\Requisicaocompra\Response\RcListarResponse;

/**
 * Status da Requisição de Compras
 *
 * @pw_element integer $codReqCompra Código da Requisição de Compras
 * @pw_element string $codIntReqCompra Código de Integração da Requisição de Compras
 * @pw_element string $cCodStatus Código do Status
 * @pw_element string $cDesStatus Descrição do Status da Remessa
 * @pw_complex rcStatus
 */
class RcStatus{
	/**
	 * Código da Requisição de Compras
	 *
	 * @var integer
	 */
	public int $codReqCompra;
	/**
	 * Código de Integração da Requisição de Compras
	 *
	 * @var string
	 */
	public string $codIntReqCompra;
	/**
	 * Código do Status
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do Status da Remessa
	 *
	 * @var string
	 */
	public string $cDesStatus;
}
