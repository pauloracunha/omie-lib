<?php

namespace OmieLib\Produtos\Pedidoetapas;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedidoetapas\Request\PEtapaListarRequest;
use OmieLib\Produtos\Pedidoetapas\Response\PEtapaListarResponse;

/**
 * Lista de status do pedido encontrados.
 *
 * @pw_element integer $nCodPed Código do Pedido de Venda de Produto.
 * @pw_element string $cCodIntPed Código de Integração do Pedido de Venda de Produto.
 * @pw_element string $cNumero Número do Pedido de Venda.<BR>(Visualizado na tela do Omie.)
 * @pw_element string $cEtapa Etapa do Pedido de Venda.
 * @pw_element string $dDtEtapa Data da Etapa do Pedido de Venda.<BR>No formato dd/mm/aaaa.
 * @pw_element string $cHrEtapa Hora da Etapa do Pedido de Venda.<BR>No formato hh:mm:ss.
 * @pw_element string $cUsEtapa Usuário que mudou a Etapa do Pedido de Venda.
 * @pw_element faturamento $faturamento Dados do faturamento
 * @pw_element cancelamento $cancelamento Dados do Cancelamento.
 * @pw_element devolucao $devolucao Dados da Devolução.
 * @pw_element info $info Outras informações do pedido
 * @pw_complex etapasPedido
 */
class EtapasPedido{
	/**
	 * Código do Pedido de Venda de Produto.
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
	 * Número do Pedido de Venda.<BR>(Visualizado na tela do Omie.)
	 *
	 * @var string
	 */
	public string $cNumero;
	/**
	 * Etapa do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $cEtapa;
	/**
	 * Data da Etapa do Pedido de Venda.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtEtapa;
	/**
	 * Hora da Etapa do Pedido de Venda.<BR>No formato hh:mm:ss.
	 *
	 * @var string
	 */
	public string $cHrEtapa;
	/**
	 * Usuário que mudou a Etapa do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $cUsEtapa;
	/**
	 * Dados do faturamento
	 *
	 * @var Faturamento
	 */
	public Faturamento $faturamento;
	/**
	 * Dados do Cancelamento.
	 *
	 * @var Cancelamento
	 */
	public Cancelamento $cancelamento;
	/**
	 * Dados da Devolução.
	 *
	 * @var Devolucao
	 */
	public Devolucao $devolucao;
	/**
	 * Outras informações do pedido
	 *
	 * @var Info
	 */
	public Info $info;
}
