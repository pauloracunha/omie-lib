<?php

namespace OmieLib\Financas\Contapagar;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contapagar\Request\LcpListarRequest;
use OmieLib\Financas\Contapagar\Response\LcpListarResponse;

/**
 * Resposta do Cancelamento de um pagamento realizado para um título do Contas a Pagar.
 *
 * @pw_element integer $codigo_baixa Código para identificar a baixa do título no Contas a Pagar.
 * @pw_element string $codigo_baixa_integracao Código da baixa do integrador para identificar a baixa de um título do contas a pagar.
 * @pw_element string $codigo_status Código do Status da baixa do contas a pagar.
 * @pw_element string $descricao_status Descrição do Status da baixa do contas a pagar.
 * @pw_complex conta_pagar_cancelar_pagamento_resposta
 */
class Conta_pagar_cancelar_pagamento_resposta{
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
	/**
	 * Código do Status da baixa do contas a pagar.
	 *
	 * @var string
	 */
	public string $codigo_status;
	/**
	 * Descrição do Status da baixa do contas a pagar.
	 *
	 * @var string
	 */
	public string $descricao_status;
}
