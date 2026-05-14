<?php

namespace OmieLib\Produtos\Pedidoetapas\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedidoetapas\Cancelamento;
use OmieLib\Produtos\Pedidoetapas\Devolucao;
use OmieLib\Produtos\Pedidoetapas\EtapasPedido;
use OmieLib\Produtos\Pedidoetapas\Faturamento;
use OmieLib\Produtos\Pedidoetapas\Info;
use OmieLib\Produtos\Pedidoetapas\PedidoVendaEtapaJsonClient;
use OmieLib\Produtos\Pedidoetapas\Request\PEtapaListarRequest;

/**
 * Resposta da listagem de Status do Pedido de Vendas.
 *
 * @pw_element integer $nPagina Número da página resgatada.
 * @pw_element integer $nTotPaginas Número total de páginas encontradas.
 * @pw_element integer $nRegistros Número de registros retornados na página.
 * @pw_element integer $nTotRegistros Número total de registros encontrados.
 * @pw_element etapasPedidoArray $etapasPedido Lista de status do pedido encontrados.
 * @pw_complex pEtapaListarResponse
 */
class PEtapaListarResponse{
	/**
	 * Número da página resgatada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número total de páginas encontradas.
	 *
	 * @var integer
	 */
	public int $nTotPaginas;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $nRegistros;
	/**
	 * Número total de registros encontrados.
	 *
	 * @var integer
	 */
	public int $nTotRegistros;
	/**
	 * Lista de status do pedido encontrados.
	 *
	 * @var EtapasPedido[]
	 */
	public array $etapasPedido;
}
