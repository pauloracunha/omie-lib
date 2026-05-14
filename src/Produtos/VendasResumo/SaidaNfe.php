<?php

namespace OmieLib\Produtos\VendasResumo;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\VendasResumo\Request\ObterResumoVendasRequest;
use OmieLib\Produtos\VendasResumo\Response\ObterResumoVendasResponse;

/**
 * Exibe os totais de faturamentos das Notas Fiscais (NF-e) de saída.
 *
 * @pw_element decimal $nFaturadas Quantidade faturada.
 * @pw_element decimal $vFaturadas Valor faturado.
 * @pw_element decimal $nCanceladas Quantidade cancelada.
 * @pw_element decimal $vCanceladas Valor cancelado.
 * @pw_element decimal $nPendentes Quantidade pendente.
 * @pw_element decimal $vPendentes Valor pendente.
 * @pw_element decimal $nRejeitadas Quantidade rejeitada.
 * @pw_element decimal $vRejeitadas Valor rejeitado.
 * @pw_element decimal $nTotal Quantidade total.
 * @pw_element decimal $vTotal Valor total.
 * @pw_complex saidaNfe
 */
class SaidaNfe{
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
	 * Quantidade pendente.
	 *
	 * @var decimal
	 */
	public float $nPendentes;
	/**
	 * Valor pendente.
	 *
	 * @var decimal
	 */
	public float $vPendentes;
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
}
