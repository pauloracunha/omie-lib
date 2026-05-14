<?php

namespace OmieLib\Servicos\Nfse;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Nfse\Request\NfseListarRequest;
use OmieLib\Servicos\Nfse\Response\NfseListarResponse;

/**
 * Distribuição por Departamentos.
 *
 * @pw_element string $cCodigoDepartamento Código do Departamento.
 * @pw_element decimal $nPercentualDistribuicao Percentual da distribuição.
 * @pw_element decimal $nValorDistribuicao Valor da distribuição.
 * @pw_element string $nValorFixo Indica que o valor foi fixado na distribuição (S/N).
 * @pw_complex Departamentos
 */
class Departamentos{
	/**
	 * Código do Departamento.
	 *
	 * @var string
	 */
	public string $cCodigoDepartamento;
	/**
	 * Percentual da distribuição.
	 *
	 * @var decimal
	 */
	public float $nPercentualDistribuicao;
	/**
	 * Valor da distribuição.
	 *
	 * @var decimal
	 */
	public float $nValorDistribuicao;
	/**
	 * Indica que o valor foi fixado na distribuição (S/N).
	 *
	 * @var string
	 */
	public string $nValorFixo;
}
