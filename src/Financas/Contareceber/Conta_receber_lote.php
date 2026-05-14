<?php

namespace OmieLib\Financas\Contareceber;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contareceber\Request\LcrListarRequest;
use OmieLib\Financas\Contareceber\Response\LcrListarResponse;

/**
 * Inclusão de Contas a Receber por Lote
 *
 * @pw_element integer $lote Número do lote processado
 * @pw_element conta_receber_cadastroArray $conta_receber_cadastro Cadastro de contas a receber.
 * @pw_complex conta_receber_lote
 */
class Conta_receber_lote{
	/**
	 * Número do lote processado
	 *
	 * @var integer
	 */
	public int $lote;
	/**
	 * Cadastro de contas a receber.
	 *
	 * @var Conta_receber_cadastro[]
	 */
	public array $conta_receber_cadastro;
}
