<?php

namespace OmieLib\Geral\Contacorrente;

use OmieLib\Common\OmieFail;

/**
 * Request do Lote da Conta Corrente
 *
 * @pw_element integer $lote Número do lote
 * @pw_element fin_conta_corrente_cadastroArray $fin_conta_corrente_cadastro Cadastro de contas correntes
 * @pw_complex fin_conta_corrente_lote_request
 */
class Fin_conta_corrente_lote_request{
	/**
	 * Número do lote
	 *
	 * @var integer
	 */
	public int $lote;
	/**
	 * Cadastro de contas correntes
	 *
	 * @var Fin_conta_corrente_cadastro[]
	 */
	public array $fin_conta_corrente_cadastro;
}
