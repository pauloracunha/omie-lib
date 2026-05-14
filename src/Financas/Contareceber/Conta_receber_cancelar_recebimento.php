<?php

namespace OmieLib\Financas\Contareceber;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contareceber\Request\LcrListarRequest;
use OmieLib\Financas\Contareceber\Response\LcrListarResponse;

/**
 * Requisição de cancelamento de lançamento de baixa do recebimento.
 *
 * @pw_element integer $codigo_baixa Código da Baixa
 * @pw_element string $codigo_baixa_integracao Código de Integração da Baixa
 * @pw_complex conta_receber_cancelar_recebimento
 */
class Conta_receber_cancelar_recebimento{
	/**
	 * Código da Baixa
	 *
	 * @var integer
	 */
	public int $codigo_baixa;
	/**
	 * Código de Integração da Baixa
	 *
	 * @var string
	 */
	public string $codigo_baixa_integracao;
}
