<?php

namespace OmieLib\Financas\Contareceber;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contareceber\Request\LcrListarRequest;
use OmieLib\Financas\Contareceber\Response\LcrListarResponse;

/**
 * Detalhes do lançamento
 *
 * @pw_element string $nCodInt Código de Integração
 * @pw_element string $COO COO
 * @pw_element string $CCF CCF
 * @pw_complex lancamento_detalhe
 */
class Lancamento_detalhe{
	/**
	 * Código de Integração
	 *
	 * @var string
	 */
	public string $nCodInt;
	/**
	 * COO
	 *
	 * @var string
	 */
	public string $COO;
	/**
	 * CCF
	 *
	 * @var string
	 */
	public string $CCF;
}
