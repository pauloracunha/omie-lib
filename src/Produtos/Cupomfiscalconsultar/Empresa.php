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
 * Informações do estabelecimento.
 *
 * @pw_element string $cCNPJ CNPJ do estabelecimento.
 * @pw_element string $cRazaoSocial Razão social do estabelecimento
 * @pw_element string $cNomeFantasia Nome Fantasia do estabelecimento.
 * @pw_element string $cIE Inscrição Estadual do estabelecimento
 * @pw_complex empresa
 */
class Empresa{
	/**
	 * CNPJ do estabelecimento.
	 *
	 * @var string
	 */
	public string $cCNPJ;
	/**
	 * Razão social do estabelecimento
	 *
	 * @var string
	 */
	public string $cRazaoSocial;
	/**
	 * Nome Fantasia do estabelecimento.
	 *
	 * @var string
	 */
	public string $cNomeFantasia;
	/**
	 * Inscrição Estadual do estabelecimento
	 *
	 * @var string
	 */
	public string $cIE;
}
