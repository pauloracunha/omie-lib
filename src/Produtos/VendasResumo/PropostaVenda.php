<?php

namespace OmieLib\Produtos\VendasResumo;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\VendasResumo\Request\ObterResumoVendasRequest;
use OmieLib\Produtos\VendasResumo\Response\ObterResumoVendasResponse;

/**
 * Exibe os totais das propostas de venda de produtos.
 *
 * @pw_element string $cVisualizar Indica se o aplicativo possuí a configuração desse tipo de documento.<BR><BR>Pode ser: <BR>S<BR>N<BR>
 * @pw_element string $cNome Descrição da operação (Proposta / Pedido de venda).
 * @pw_element string $cNomePlural Descrição da operação no plural (Proposta / Pedido de venda).
 * @pw_element emAberto $emAberto Estrutura contendo os valores em aberto.
 * @pw_element string $cIcone Unicode do Ícone.
 * @pw_element string $cCor Hexadecimal da cor.
 * @pw_complex propostaVenda
 */
class PropostaVenda{
	/**
	 * Indica se o aplicativo possuí a configuração desse tipo de documento.<BR><BR>Pode ser: <BR>S<BR>N<BR>
	 *
	 * @var string
	 */
	public string $cVisualizar;
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
}
