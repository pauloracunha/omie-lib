<?php

namespace OmieLib\Geral\Contacorrente;

use OmieLib\Common\OmieFail;

/**
 * Response do cadastro do conta corrente.
 *
 * @pw_element integer $nCodCC Código da conta corrente no Omie.
 * @pw_element string $cCodCCInt Código de Integração do Parceiro.
 * @pw_element string $cCodStatus Código do status
 * @pw_element string $cDesStatus Descrição do Status
 * @pw_complex fin_conta_corrente_cadastro_response
 */
class Fin_conta_corrente_cadastro_response{
	/**
	 * Código da conta corrente no Omie.
	 *
	 * @var integer
	 */
	public int $nCodCC;
	/**
	 * Código de Integração do Parceiro.
	 *
	 * @var string
	 */
	public string $cCodCCInt;
	/**
	 * Código do status
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do Status
	 *
	 * @var string
	 */
	public string $cDesStatus;
}
