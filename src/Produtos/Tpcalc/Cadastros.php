<?php

namespace OmieLib\Produtos\Tpcalc;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Tpcalc\Request\TpCalcListarRequest;
use OmieLib\Produtos\Tpcalc\Response\TpCalcListarResponse;

/**
 * Lista os CSOSN do ICMS encontrados.
 *
 * @pw_element string $nCodigo Código do Tipo de Cálculo.
 * @pw_element string $cDescricao Descrição do Tipo de Cálculo.
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código do Tipo de Cálculo.
	 *
	 * @var string
	 */
	public string $nCodigo;
	/**
	 * Descrição do Tipo de Cálculo.
	 *
	 * @var string
	 */
	public string $cDescricao;
}
