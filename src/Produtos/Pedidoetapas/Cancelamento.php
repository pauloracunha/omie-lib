<?php

namespace OmieLib\Produtos\Pedidoetapas;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedidoetapas\Request\PEtapaListarRequest;
use OmieLib\Produtos\Pedidoetapas\Response\PEtapaListarResponse;

/**
 * Dados do Cancelamento.
 *
 * @pw_element string $cCancelado Pedido de Vendas foi cancelado (S/N)?
 * @pw_element string $dDtCanc Data do Cancelamento do Pedido.<BR>No formato dd/mm/aaaa.
 * @pw_element string $cHrCanc Hora do Cancelamento do Pedido.<BR>No formato hh:mm:ss.
 * @pw_element string $cUsCanc Usuário que realizou o Cancelamento do pedido.
 * @pw_complex cancelamento
 */
class Cancelamento{
	/**
	 * Pedido de Vendas foi cancelado (S/N)?
	 *
	 * @var string
	 */
	public string $cCancelado;
	/**
	 * Data do Cancelamento do Pedido.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtCanc;
	/**
	 * Hora do Cancelamento do Pedido.<BR>No formato hh:mm:ss.
	 *
	 * @var string
	 */
	public string $cHrCanc;
	/**
	 * Usuário que realizou o Cancelamento do pedido.
	 *
	 * @var string
	 */
	public string $cUsCanc;
}
