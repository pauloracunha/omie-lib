<?php

namespace OmieLib\Financas\Contareceber;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contareceber\Request\LcrListarRequest;
use OmieLib\Financas\Contareceber\Response\LcrListarResponse;

/**
 * Chave da conta a a receber
 *
 * @pw_element integer $chave_lancamento Chave do Lançamento
 * @pw_element string $codigo_lancamento_integracao Código do lançamento gerado pelo integrador.
 * @pw_complex conta_receber_cadastro_chave
 */
class Conta_receber_cadastro_chave{
	/**
	 * Chave do Lançamento
	 *
	 * @var integer
	 */
	public int $chave_lancamento;
	/**
	 * Código do lançamento gerado pelo integrador.
	 *
	 * @var string
	 */
	public string $codigo_lancamento_integracao;
}
