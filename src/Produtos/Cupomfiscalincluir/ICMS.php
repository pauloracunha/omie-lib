<?php

namespace OmieLib\Produtos\Cupomfiscalincluir;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfFecharCaixaRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirEcfRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirNfceRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirRpsRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirSatRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfInutilizarNfceRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfFecharCaixaResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirEcfResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirNfceResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirRpsResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirSatResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfInutilizarNfceResponse;

/**
 * Dados do ICMS.
 *
 * @pw_element string $CST Código da Situação Tributária.
 * @pw_element decimal $vBC Valor da Base de Cálculo.
 * @pw_element decimal $pICMS Alíquota do ICMS.
 * @pw_element decimal $vICMS Valor do ICMS.
 * @pw_complex ICMS
 */
class ICMS{
	/**
	 * Código da Situação Tributária.
	 *
	 * @var string
	 */
	public string $CST;
	/**
	 * Valor da Base de Cálculo.
	 *
	 * @var decimal
	 */
	public float $vBC;
	/**
	 * Alíquota do ICMS.
	 *
	 * @var decimal
	 */
	public float $pICMS;
	/**
	 * Valor do ICMS.
	 *
	 * @var decimal
	 */
	public float $vICMS;
}
