<?php

namespace OmieLib\Produtos\Requisicaocompra;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Requisicaocompra\Request\RcListarRequest;
use OmieLib\Produtos\Requisicaocompra\Response\RcListarResponse;

/**
 * Dados para pesquisa da Requisição de Compras
 *
 * @pw_element integer $codReqCompra Código da Requisição de Compras
 * @pw_element string $codIntReqCompra Código de integração da requisição de Compra.
 * @pw_complex rcChave
 */
class RcChave{
	/**
	 * Código da Requisição de Compras
	 *
	 * @var integer
	 */
	public int $codReqCompra;
	/**
	 * Código de integração da requisição de Compra.
	 *
	 * @var string
	 */
	public string $codIntReqCompra;
}
