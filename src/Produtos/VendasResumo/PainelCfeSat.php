<?php

namespace OmieLib\Produtos\VendasResumo;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\VendasResumo\Request\ObterResumoVendasRequest;
use OmieLib\Produtos\VendasResumo\Response\ObterResumoVendasResponse;

/**
 * Exibe os totais de faturamentos de Cupons Fiscais Eletrônicos.
 *
 * @pw_element decimal $nFaturadas Quantidade faturada.
 * @pw_element decimal $vFaturadas Valor faturado.
 * @pw_element decimal $nCanceladas Quantidade cancelada.
 * @pw_element decimal $vCanceladas Valor cancelado.
 * @pw_element decimal $nTotal Quantidade total.
 * @pw_element decimal $vTotal Valor total.
 * @pw_element pagamentos $pagamentos Exibe os totais de faturamento por forma de pagamento.
 * @pw_element string $cIcone Unicode do Ícone.
 * @pw_element string $cCor Hexadecimal da cor.
 * @pw_complex painelCfeSat
 */
class PainelCfeSat{
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
	 * Quantidade total.
	 *
	 * @var decimal
	 */
	public float $nTotal;
	/**
	 * Valor total.
	 *
	 * @var decimal
	 */
	public float $vTotal;
	/**
	 * Exibe os totais de faturamento por forma de pagamento.
	 *
	 * @var Pagamentos
	 */
	public Pagamentos $pagamentos;
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
