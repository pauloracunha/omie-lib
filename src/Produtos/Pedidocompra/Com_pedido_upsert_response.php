<?php

namespace OmieLib\Produtos\Pedidocompra;

use OmieLib\Common\OmieFail;

/**
 * Resposta do Upsert de um Pedido de Compra
 *
 * @pw_element integer $nCodPed Código interno do pedido de compra (este é o código do pedido no Omie)
 * @pw_element string $cCodIntPed Código de integração do pedido de compra (este é o código do pedido no seu sistema)
 * @pw_element string $cCodStatus Código do status
 * @pw_element string $cDescStatus Descrição do status
 * @pw_element string $cNumero Número do pedido de compra
 * @pw_complex com_pedido_upsert_response
 */
class Com_pedido_upsert_response{
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
	/**
	 * Código do status
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do status
	 *
	 * @var string
	 */
	public string $cDescStatus;
	/**
	 * Número do pedido de compra
	 *
	 * @var string
	 */
	public string $cNumero;
}
