<?php

namespace OmieLib\Produtos\Requisicaocompra;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Requisicaocompra\Request\RcListarRequest;
use OmieLib\Produtos\Requisicaocompra\Response\RcListarResponse;

/**
 * Itens da Requisição de Compras
 *
 * @pw_element integer $codItem Código do Item da Requisição de Compras
 * @pw_element string $codIntItem Código de integração do Item da requisição de Compra.
 * @pw_element integer $codProd Código do Produto
 * @pw_element string $codIntProd Código do Integração do Produto
 * @pw_element decimal $qtde Quantidade
 * @pw_element decimal $precoUnit Preço unitário sugerido
 * @pw_element string $obsItem Observações do item,
 * @pw_complex ItensReqCompra
 */
class ItensReqCompra{
	/**
	 * Código do Item da Requisição de Compras
	 *
	 * @var integer
	 */
	public int $codItem;
	/**
	 * Código de integração do Item da requisição de Compra.
	 *
	 * @var string
	 */
	public string $codIntItem;
	/**
	 * Código do Produto
	 *
	 * @var integer
	 */
	public int $codProd;
	/**
	 * Código do Integração do Produto
	 *
	 * @var string
	 */
	public string $codIntProd;
	/**
	 * Quantidade
	 *
	 * @var decimal
	 */
	public float $qtde;
	/**
	 * Preço unitário sugerido
	 *
	 * @var decimal
	 */
	public float $precoUnit;
	/**
	 * Observações do item,
	 *
	 * @var string
	 */
	public string $obsItem;
}
