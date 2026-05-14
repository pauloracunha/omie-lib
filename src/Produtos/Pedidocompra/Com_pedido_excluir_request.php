<?php

namespace OmieLib\Produtos\Pedidocompra;

use OmieLib\Common\OmieFail;

/**
 * Excluir um Pedido de Compra
 *
 * @pw_element integer $nCodPed Código interno do pedido de compra (este é o código do pedido no Omie)
 * @pw_element string $cCodIntPed Código de integração do pedido de compra (este é o código do pedido no seu sistema)
 * @pw_complex com_pedido_excluir_request
 */
class Com_pedido_excluir_request{
	/**
	 * Código interno do pedido de compra (este é o código do pedido no Omie)
	 *
	 * @var integer
	 */
	public int $nCodPed;
	/**
	 * Código de integração do pedido de compra (este é o código do pedido no seu sistema)
	 *
	 * @var string
	 */
	public string $cCodIntPed;
}
