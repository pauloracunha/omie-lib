<?php

namespace OmieLib\Produtos\Nfconsultar;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfconsultar\Request\NfListarRequest;
use OmieLib\Produtos\Nfconsultar\Response\NfListarResponse;

/**
 * Dados do Item do Pedido de Venda
 *
 * @pw_element integer $nIdItemPedido Id do item do Pedido de Venda.
 * @pw_element string $cItemDevolvido Indica se o Item do Pedido de Vendas foi devolvido (S/N).
 * @pw_element decimal $nItemQtdDevolvida Quantidade devolvida do Item do Pedido de Vendas.
 * @pw_complex itemPedido
 */
class ItemPedido{
	/**
	 * Id do item do Pedido de Venda.
	 *
	 * @var integer
	 */
	public int $nIdItemPedido;
	/**
	 * Indica se o Item do Pedido de Vendas foi devolvido (S/N).
	 *
	 * @var string
	 */
	public string $cItemDevolvido;
	/**
	 * Quantidade devolvida do Item do Pedido de Vendas.
	 *
	 * @var decimal
	 */
	public float $nItemQtdDevolvida;
}
