<?php

namespace OmieLib\Financas\Contapagar;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contapagar\Request\LcpListarRequest;
use OmieLib\Financas\Contapagar\Response\LcpListarResponse;

/**
 * Resposta do Lançamento de contas a pagar por lote
 *
 * @pw_element integer $lote Número do lote processado
 * @pw_element string $codigo_status Código do Status da baixa do contas a pagar.
 * @pw_element string $descricao_status Descrição do Status da baixa do contas a pagar.
 * @pw_complex conta_pagar_lote_response
 */
class Conta_pagar_lote_response{
	/**
	 * Número do lote processado
	 *
	 * @var integer
	 */
	public int $lote;
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
