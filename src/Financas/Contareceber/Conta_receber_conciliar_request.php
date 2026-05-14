<?php

namespace OmieLib\Financas\Contareceber;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contareceber\Request\LcrListarRequest;
use OmieLib\Financas\Contareceber\Response\LcrListarResponse;

/**
 * Realiza a conciliação do documento
 *
 * @pw_element integer $codigo_baixa Código da Baixa
 * @pw_element string $codigo_baixa_integracao Código do lançamento gerado pelo integrador.
 * @pw_complex conta_receber_conciliar_request
 */
class Conta_receber_conciliar_request{
	/**
	 * Código da Baixa
	 *
	 * @var integer
	 */
	public int $codigo_baixa;
	/**
	 * Código do lançamento gerado pelo integrador.
	 *
	 * @var string
	 */
	public string $codigo_baixa_integracao;
}
