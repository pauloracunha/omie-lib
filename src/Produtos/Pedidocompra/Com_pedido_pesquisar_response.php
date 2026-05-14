<?php

namespace OmieLib\Produtos\Pedidocompra;

use OmieLib\Common\OmieFail;

/**
 * Resposta da Pesquisa de Pedidos de Compra
 *
 * @pw_element integer $nPagina Página da pesquisa
 * @pw_element integer $nRegsPorPagina Registros por página
 * @pw_element string $lApenasImportadoApi Exibir apenas pedidos importados por esta API
 * @pw_element string $lExibirPedidosPendentes Exibir os pedidos de compra pendentes
 * @pw_element string $lExibirPedidosFaturados Exibir os pedidos de compra faturados pelo fornecedor
 * @pw_element string $lExibirPedidosRecebidos Exibir os pedidos de compra recebidos
 * @pw_element string $lExibirPedidosCancelados Exibir os pedidos de compra cancelados
 * @pw_element string $lExibirPedidosEncerrados Exibir os pedidos de compra encerrados
 * @pw_element string $dDataInicial Exibir os pedidos de compra a partir desta data
 * @pw_element string $dDataFinal Exibir os pedidos de compra até esta data
 * @pw_element integer $nTotalPaginas Total de páginas disponíveis na pesquisa
 * @pw_element integer $nTotalRegistros Total de registros disponíveis na pesquisa
 * @pw_element pedidos_pesquisaArray $pedidos_pesquisa Lista com os pedidos de compra
 * @pw_complex com_pedido_pesquisar_response
 */
class Com_pedido_pesquisar_response{
	/**
	 * Página da pesquisa
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Registros por página
	 *
	 * @var integer
	 */
	public int $nRegsPorPagina;
	/**
	 * Exibir apenas pedidos importados por esta API
	 *
	 * @var string
	 */
	public string $lApenasImportadoApi;
	/**
	 * Exibir os pedidos de compra pendentes
	 *
	 * @var string
	 */
	public string $lExibirPedidosPendentes;
	/**
	 * Exibir os pedidos de compra faturados pelo fornecedor
	 *
	 * @var string
	 */
	public string $lExibirPedidosFaturados;
	/**
	 * Exibir os pedidos de compra recebidos
	 *
	 * @var string
	 */
	public string $lExibirPedidosRecebidos;
	/**
	 * Exibir os pedidos de compra cancelados
	 *
	 * @var string
	 */
	public string $lExibirPedidosCancelados;
	/**
	 * Exibir os pedidos de compra encerrados
	 *
	 * @var string
	 */
	public string $lExibirPedidosEncerrados;
	/**
	 * Exibir os pedidos de compra a partir desta data
	 *
	 * @var string
	 */
	public string $dDataInicial;
	/**
	 * Exibir os pedidos de compra até esta data
	 *
	 * @var string
	 */
	public string $dDataFinal;
	/**
	 * Total de páginas disponíveis na pesquisa
	 *
	 * @var integer
	 */
	public int $nTotalPaginas;
	/**
	 * Total de registros disponíveis na pesquisa
	 *
	 * @var integer
	 */
	public int $nTotalRegistros;
	/**
	 * Lista com os pedidos de compra
	 *
	 * @var Pedidos_pesquisa[]
	 */
	public array $pedidos_pesquisa;
}
