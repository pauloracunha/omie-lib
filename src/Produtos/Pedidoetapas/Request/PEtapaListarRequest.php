<?php

namespace OmieLib\Produtos\Pedidoetapas\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedidoetapas\Cancelamento;
use OmieLib\Produtos\Pedidoetapas\Devolucao;
use OmieLib\Produtos\Pedidoetapas\EtapasPedido;
use OmieLib\Produtos\Pedidoetapas\Faturamento;
use OmieLib\Produtos\Pedidoetapas\Info;
use OmieLib\Produtos\Pedidoetapas\PedidoVendaEtapaJsonClient;
use OmieLib\Produtos\Pedidoetapas\Response\PEtapaListarResponse;

/**
 * Solicitação de listagem de mudanças de etapa do pedido de vendas.
 *
 * @pw_element integer $nPagina Número da página resgatada.
 * @pw_element integer $nRegPorPagina Número de registros retornados na página.
 * @pw_element string $cOrdenarPor Ordem os resultados da página por:<BR>CODIGO - Código do Pedido de Venda.<BR>DATAHORA - Data + Hora da mudança da etapa do pedido.<BR>
 * @pw_element string $cOrdemDecrescente Indica se a ordem de exibição é Decrescente caso seja informado "S".
 * @pw_element string $dDtInicial Data inicial.<BR>No formato dd/mm/aaaa.
 * @pw_element string $dDtFinal Data final.<BR>No formato dd/mm/aaaa.
 * @pw_element string $cHrInicial Hora inicial.<BR>No formato hh:mm:ss
 * @pw_element string $cHrFinal Hora final.<BR>No Formato hh:mm:ss.
 * @pw_element integer $nCodPed Código do Pedido de Venda de Produto.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno do Pedido de Venda gerado pelo Omie.
 * @pw_element string $cCodIntPed Código de Integração do Pedido de Venda de Produto.
 * @pw_element string $cEtapa Etapa do Pedido de Venda.
 * @pw_complex pEtapaListarRequest
 */
class PEtapaListarRequest{
	/**
	 * Número da página resgatada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $nRegPorPagina;
	/**
	 * Ordem os resultados da página por:<BR>CODIGO - Código do Pedido de Venda.<BR>DATAHORA - Data + Hora da mudança da etapa do pedido.<BR>
	 *
	 * @var string
	 */
	public string $cOrdenarPor;
	/**
	 * Indica se a ordem de exibição é Decrescente caso seja informado "S".
	 *
	 * @var string
	 */
	public string $cOrdemDecrescente;
	/**
	 * Data inicial.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtInicial;
	/**
	 * Data final.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtFinal;
	/**
	 * Hora inicial.<BR>No formato hh:mm:ss
	 *
	 * @var string
	 */
	public string $cHrInicial;
	/**
	 * Hora final.<BR>No Formato hh:mm:ss.
	 *
	 * @var string
	 */
	public string $cHrFinal;
	/**
	 * Código do Pedido de Venda de Produto.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno do Pedido de Venda gerado pelo Omie.
	 *
	 * @var integer
	 */
	public int $nCodPed;
	/**
	 * Código de Integração do Pedido de Venda de Produto.
	 *
	 * @var string
	 */
	public string $cCodIntPed;
	/**
	 * Etapa do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $cEtapa;
}
