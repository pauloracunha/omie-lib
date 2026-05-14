<?php

namespace OmieLib\Crm\OportunidadesResumo;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\OportunidadesResumo\Request\ObterListaOpRequest;
use OmieLib\Crm\OportunidadesResumo\Request\ObterResumoOpRequest;
use OmieLib\Crm\OportunidadesResumo\Response\ObterListaOpResponse;
use OmieLib\Crm\OportunidadesResumo\Response\ObterResumoOpResponse;

/**
 * Resumo total próximos meses.
 *
 * @pw_element decimal $nEmProcesso Quantidade em processo.
 * @pw_element decimal $nBoasChances Quantidade boas chances.
 * @pw_element decimal $nComprometido Quantidade comprometido.
 * @pw_element decimal $vEmProcesso Valor em processo.
 * @pw_element decimal $vBoasChances Valor boas chances.
 * @pw_element decimal $vComprometido Valor comprometido.
 * @pw_complex mesesSeguintes
 */
class MesesSeguintes{
	/**
	 * Quantidade em processo.
	 *
	 * @var decimal
	 */
	public float $nEmProcesso;
	/**
	 * Quantidade boas chances.
	 *
	 * @var decimal
	 */
	public float $nBoasChances;
	/**
	 * Quantidade comprometido.
	 *
	 * @var decimal
	 */
	public float $nComprometido;
	/**
	 * Valor em processo.
	 *
	 * @var decimal
	 */
	public float $vEmProcesso;
	/**
	 * Valor boas chances.
	 *
	 * @var decimal
	 */
	public float $vBoasChances;
	/**
	 * Valor comprometido.
	 *
	 * @var decimal
	 */
	public float $vComprometido;
}
