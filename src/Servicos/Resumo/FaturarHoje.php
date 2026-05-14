<?php

namespace OmieLib\Servicos\Resumo;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Resumo\Request\ObterResumoServRequest;
use OmieLib\Servicos\Resumo\Response\ObterResumoServResponse;

/**
 * Exibe os totais com o faturamento previsto para hoje.
 *
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
