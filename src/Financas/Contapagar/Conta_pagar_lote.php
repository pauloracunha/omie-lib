<?php

namespace OmieLib\Financas\Contapagar;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contapagar\Request\LcpListarRequest;
use OmieLib\Financas\Contapagar\Response\LcpListarResponse;

/**
 * Inclusão em Lote de contas a pagar
 *
 * @pw_element integer $lote Número do lote processado
 * @pw_element conta_pagar_cadastroArray $conta_pagar_cadastro Cadastro de contas a pagar.
 * @pw_complex conta_pagar_lote
 */
class Conta_pagar_lote{
	/**
	 * Número do lote processado
	 *
	 * @var integer
	 */
	public int $lote;
	/**
	 * Cadastro de contas a pagar.
	 *
	 * @var Conta_pagar_cadastro[]
	 */
	public array $conta_pagar_cadastro;
}
