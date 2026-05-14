<?php

namespace OmieLib\Geral\Contacorrente;

use OmieLib\Common\OmieFail;

/**
 * Chave de pesquisa da Conta Corrente
 *
 * @pw_element integer $nCodCC Código da conta corrente no Omie.
 * @pw_element string $cCodCCInt Código de Integração do Parceiro.
 * @pw_complex fin_conta_corrente_chave
 */
class Fin_conta_corrente_chave{
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
}
