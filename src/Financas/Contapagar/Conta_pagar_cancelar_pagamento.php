<?php

namespace OmieLib\Financas\Contapagar;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contapagar\Request\LcpListarRequest;
use OmieLib\Financas\Contapagar\Response\LcpListarResponse;

/**
 * Cancela um pagamento realizado para um título do Contas a Pagar.
 *
 * @pw_element integer $codigo_baixa Código para identificar a baixa do título no Contas a Pagar.
 * @pw_element string $codigo_baixa_integracao Código da baixa do integrador para identificar a baixa de um título do contas a pagar.
 * @pw_complex conta_pagar_cancelar_pagamento
 */
class Conta_pagar_cancelar_pagamento{
	/**
	 * Código para identificar a baixa do título no Contas a Pagar.
	 *
	 * @var integer
	 */
	public int $codigo_baixa;
	/**
	 * Código da baixa do integrador para identificar a baixa de um título do contas a pagar.
	 *
	 * @var string
	 */
	public string $codigo_baixa_integracao;
}
