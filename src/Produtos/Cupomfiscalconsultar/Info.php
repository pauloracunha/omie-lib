<?php

namespace OmieLib\Produtos\Cupomfiscalconsultar;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cupomfiscalconsultar\Request\CfcItensRequest;
use OmieLib\Produtos\Cupomfiscalconsultar\Request\CfcListarRequest;
use OmieLib\Produtos\Cupomfiscalconsultar\Request\CfcPagamentosRequest;
use OmieLib\Produtos\Cupomfiscalconsultar\Response\CfcItensResponse;
use OmieLib\Produtos\Cupomfiscalconsultar\Response\CfcListarResponse;
use OmieLib\Produtos\Cupomfiscalconsultar\Response\CfcPagamentosResponse;

/**
 * Informações adicionais do Cupom Fiscal.
 *
 * @pw_element string $dDtInclusao Data de Inclusão do Documento.
 * @pw_element string $cHrInclusao Hora da Inclusão do Cupom Fiscal.<BR>No formato hh:mm:ss.
 * @pw_element string $uInc Usuário da Inclusão do Cupom Fiscal.
 * @pw_element string $dDtAlteracao Data de Alteração do Documento.
 * @pw_element string $cHrAlteracao Hora da Alteração do Cupom Fiscal.<BR>No formato hh:mm:ss.
 * @pw_element string $uAlt Usuário da Alteração do Cupom Fiscal.
 * @pw_element string $cCupomCancelado Cupom Fiscal Cancelado (S/N)?
 * @pw_element string $cCupomDevolvido Cupom Fiscal Devolvido (S/N)?
 * @pw_complex info
 */
class Info{
	/**
	 * Data de Inclusão do Documento.
	 *
	 * @var string
	 */
	public string $dDtInclusao;
	/**
	 * Hora da Inclusão do Cupom Fiscal.<BR>No formato hh:mm:ss.
	 *
	 * @var string
	 */
	public string $cHrInclusao;
	/**
	 * Usuário da Inclusão do Cupom Fiscal.
	 *
	 * @var string
	 */
	public string $uInc;
	/**
	 * Data de Alteração do Documento.
	 *
	 * @var string
	 */
	public string $dDtAlteracao;
	/**
	 * Hora da Alteração do Cupom Fiscal.<BR>No formato hh:mm:ss.
	 *
	 * @var string
	 */
	public string $cHrAlteracao;
	/**
	 * Usuário da Alteração do Cupom Fiscal.
	 *
	 * @var string
	 */
	public string $uAlt;
	/**
	 * Cupom Fiscal Cancelado (S/N)?
	 *
	 * @var string
	 */
	public string $cCupomCancelado;
	/**
	 * Cupom Fiscal Devolvido (S/N)?
	 *
	 * @var string
	 */
	public string $cCupomDevolvido;
}
