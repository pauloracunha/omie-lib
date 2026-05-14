<?php

namespace OmieLib\Crm\OportunidadesResumo;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\OportunidadesResumo\Request\ObterListaOpRequest;
use OmieLib\Crm\OportunidadesResumo\Request\ObterResumoOpRequest;
use OmieLib\Crm\OportunidadesResumo\Response\ObterListaOpResponse;
use OmieLib\Crm\OportunidadesResumo\Response\ObterResumoOpResponse;

/**
 * Saúde do pipeline.
 *
 * @pw_element decimal $vMeta Valor meta.
 * @pw_element decimal $vConquistado Valor conquistado.
 * @pw_element decimal $nConquistado Quantidade conquistado.
 * @pw_element decimal $vNecessario Valor necessário.
 * @pw_element decimal $vARealizar Percentual existente.
 * @pw_element decimal $pExistente Percentual existente.
 * @pw_element decimal $nSaude Valor saúde.
 * @pw_element decimal $nIndicador Indicador do status do pipeline.<BR><BR>Pode ser de 0 até 300.
 * @pw_element decimal $nMultiplicador Multiplicador da meta.
 * @pw_element string $cStatus Status da saúde do pipeline.<BR><BR><BR>Pode ser:<BR>Se <= 100 = CRÍTICO <BR>Se entre 100 e 200 = ACEITÁVEL<BR>Se maior que 200 = EXCELENTE<BR>
 * @pw_complex saudePipeline
 */
class SaudePipeline{
	/**
	 * Valor meta.
	 *
	 * @var decimal
	 */
	public float $vMeta;
	/**
	 * Valor conquistado.
	 *
	 * @var decimal
	 */
	public float $vConquistado;
	/**
	 * Quantidade conquistado.
	 *
	 * @var decimal
	 */
	public float $nConquistado;
	/**
	 * Valor necessário.
	 *
	 * @var decimal
	 */
	public float $vNecessario;
	/**
	 * Percentual existente.
	 *
	 * @var decimal
	 */
	public float $vARealizar;
	/**
	 * Percentual existente.
	 *
	 * @var decimal
	 */
	public float $pExistente;
	/**
	 * Valor saúde.
	 *
	 * @var decimal
	 */
	public float $nSaude;
	/**
	 * Indicador do status do pipeline.<BR><BR>Pode ser de 0 até 300.
	 *
	 * @var decimal
	 */
	public float $nIndicador;
	/**
	 * Multiplicador da meta.
	 *
	 * @var decimal
	 */
	public float $nMultiplicador;
	/**
	 * Status da saúde do pipeline.<BR><BR><BR>Pode ser:<BR>Se <= 100 = CRÍTICO <BR>Se entre 100 e 200 = ACEITÁVEL<BR>Se maior que 200 = EXCELENTE<BR>
	 *
	 * @var string
	 */
	public string $cStatus;
}
