<?php

namespace OmieLib\Geral\Contacorrente;

use OmieLib\Common\OmieFail;

/**
 * Response do conta corrente
 *
 * @pw_element integer $lote Número do lote
 * @pw_element string $cCodStatus Código do status
 * @pw_element string $cDesStatus Descrição do Status
 * @pw_complex fin_conta_corrente_lote_response
 */
class Fin_conta_corrente_lote_response{
	/**
	 * Número do lote
	 *
	 * @var integer
	 */
	public int $lote;
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
