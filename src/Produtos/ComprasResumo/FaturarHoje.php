<?php

namespace OmieLib\Produtos\ComprasResumo;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\ComprasResumo\Request\ObterResumoComprasRequest;
use OmieLib\Produtos\ComprasResumo\Response\ObterResumoComprasResponse;

/**
 * @pw_element decimal $nTotal Quantidade total.
 * @pw_element decimal $vTotal Valor total.
 * @pw_complex faturarHoje
 */
class FaturarHoje{
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
