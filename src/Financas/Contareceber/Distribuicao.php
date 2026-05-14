<?php

namespace OmieLib\Financas\Contareceber;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contareceber\Request\LcrListarRequest;
use OmieLib\Financas\Contareceber\Response\LcrListarResponse;

/**
 * Distribuição por Departamentos
 *
 * @pw_element string $cCodDep Código do Departamento
 * @pw_element string $cDesDep Descrição do Departamento
 * @pw_element decimal $nValDep Valor do rateio
 * @pw_element decimal $nPerDep Percentual do rateio
 * @pw_complex distribuicao
 */
class Distribuicao{
	/**
	 * Código do Departamento
	 *
	 * @var string
	 */
	public string $cCodDep;
	/**
	 * Descrição do Departamento
	 *
	 * @var string
	 */
	public string $cDesDep;
	/**
	 * Valor do rateio
	 *
	 * @var decimal
	 */
	public float $nValDep;
	/**
	 * Percentual do rateio
	 *
	 * @var decimal
	 */
	public float $nPerDep;
}
