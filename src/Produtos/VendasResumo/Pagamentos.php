<?php

namespace OmieLib\Produtos\VendasResumo;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\VendasResumo\Request\ObterResumoVendasRequest;
use OmieLib\Produtos\VendasResumo\Response\ObterResumoVendasResponse;

/**
 * Exibe os totais de faturamento por forma de pagamento.
 *
 * @pw_element decimal $vDinheiro Total faturado em Dinheiro.
 * @pw_element decimal $vCartao Total faturado em Cartão.
 * @pw_element decimal $vCheque Total faturado em Cheque.
 * @pw_element decimal $vAprazo Total faturado a Prazo.
 * @pw_element decimal $vOutros Total faturado Outras formas de pagamento.
 * @pw_complex pagamentos
 */
class Pagamentos{
	/**
	 * Total faturado em Dinheiro.
	 *
	 * @var decimal
	 */
	public float $vDinheiro;
	/**
	 * Total faturado em Cartão.
	 *
	 * @var decimal
	 */
	public float $vCartao;
	/**
	 * Total faturado em Cheque.
	 *
	 * @var decimal
	 */
	public float $vCheque;
	/**
	 * Total faturado a Prazo.
	 *
	 * @var decimal
	 */
	public float $vAprazo;
	/**
	 * Total faturado Outras formas de pagamento.
	 *
	 * @var decimal
	 */
	public float $vOutros;
}
