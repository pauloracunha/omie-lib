<?php

namespace OmieLib\Produtos\Pedidoetapas;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedidoetapas\Request\PEtapaListarRequest;
use OmieLib\Produtos\Pedidoetapas\Response\PEtapaListarResponse;

/**
 * Dados da Devolução.
 *
 * @pw_element string $cDevolvido Pedido de Vendas foi devolvido (S/N)?
 * @pw_element string $dDtDev Data da Devolução do Pedido.<BR>No formato dd/mm/aaaa.
 * @pw_element string $cHrDev Hora da Devolução do Pedido.<BR>No formato hh:mm:ss.
 * @pw_element string $cUsDev Usuário que realizou a devolução do pedido.
 * @pw_complex devolucao
 */
class Devolucao{
	/**
	 * Pedido de Vendas foi devolvido (S/N)?
	 *
	 * @var string
	 */
	public string $cDevolvido;
	/**
	 * Data da Devolução do Pedido.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtDev;
	/**
	 * Hora da Devolução do Pedido.<BR>No formato hh:mm:ss.
	 *
	 * @var string
	 */
	public string $cHrDev;
	/**
	 * Usuário que realizou a devolução do pedido.
	 *
	 * @var string
	 */
	public string $cUsDev;
}
