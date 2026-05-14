<?php

namespace OmieLib\Produtos\VendasResumo;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\VendasResumo\Request\ObterResumoVendasRequest;
use OmieLib\Produtos\VendasResumo\Response\ObterResumoVendasResponse;

/**
 * Exibe os totais de venda de produtos.
 *
 * @pw_element string $cNome Descrição da operação (Proposta / Pedido de venda).
 * @pw_element string $cNomePlural Descrição da operação no plural (Proposta / Pedido de venda).
 * @pw_element emAberto $emAberto Estrutura contendo os valores em aberto.
 * @pw_element string $cIconePed Unicode do Ícone pendente.
 * @pw_element string $cCorPed Hexadecimal da cor.
 * @pw_element faturarHoje $faturarHoje Exibe os totais com o faturamento previsto para hoje.
 * @pw_element string $cIconeHoje Unicode do Ícone pendente.
 * @pw_element string $cCorHoje Hexadecimal da cor.
 * @pw_element string $cIcone Unicode do Ícone.
 * @pw_element string $cCor Hexadecimal da cor.
 * @pw_element decimal $nFaturadas Quantidade faturada.
 * @pw_element decimal $vFaturadas Valor faturado.
 * @pw_element decimal $nCanceladas Quantidade cancelada.
 * @pw_element decimal $vCanceladas Valor cancelado.
 * @pw_element decimal $nRejeitadas Quantidade rejeitada.
 * @pw_element decimal $vRejeitadas Valor rejeitado.
 * @pw_complex pedidoVenda
 */
class PedidoVenda{
	/**
	 * Descrição da operação (Proposta / Pedido de venda).
	 *
	 * @var string
	 */
	public string $cNome;
	/**
	 * Descrição da operação no plural (Proposta / Pedido de venda).
	 *
	 * @var string
	 */
	public string $cNomePlural;
	/**
	 * Estrutura contendo os valores em aberto.
	 *
	 * @var EmAberto
	 */
	public EmAberto $emAberto;
	/**
	 * Unicode do Ícone pendente.
	 *
	 * @var string
	 */
	public string $cIconePed;
	/**
	 * Hexadecimal da cor.
	 *
	 * @var string
	 */
	public string $cCorPed;
	/**
	 * Exibe os totais com o faturamento previsto para hoje.
	 *
	 * @var FaturarHoje
	 */
	public FaturarHoje $faturarHoje;
	/**
	 * Unicode do Ícone pendente.
	 *
	 * @var string
	 */
	public string $cIconeHoje;
	/**
	 * Hexadecimal da cor.
	 *
	 * @var string
	 */
	public string $cCorHoje;
	/**
	 * Unicode do Ícone.
	 *
	 * @var string
	 */
	public string $cIcone;
	/**
	 * Hexadecimal da cor.
	 *
	 * @var string
	 */
	public string $cCor;
	/**
	 * Quantidade faturada.
	 *
	 * @var decimal
	 */
	public float $nFaturadas;
	/**
	 * Valor faturado.
	 *
	 * @var decimal
	 */
	public float $vFaturadas;
	/**
	 * Quantidade cancelada.
	 *
	 * @var decimal
	 */
	public float $nCanceladas;
	/**
	 * Valor cancelado.
	 *
	 * @var decimal
	 */
	public float $vCanceladas;
	/**
	 * Quantidade rejeitada.
	 *
	 * @var decimal
	 */
	public float $nRejeitadas;
	/**
	 * Valor rejeitado.
	 *
	 * @var decimal
	 */
	public float $vRejeitadas;
}
