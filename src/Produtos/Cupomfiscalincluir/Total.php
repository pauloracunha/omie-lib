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
 * Totais do cupom fiscal.
 *
 * @pw_element decimal $vItem Valor total do item. É o valor líquido dos produtos vendidos no cupom.<BR><BR>vItem = vProd - vDesc + vAcresc<BR><BR>Preenchimento obrigatório.
 * @pw_element decimal $vICMS Valor do ICMS.
 * @pw_element decimal $vDesc Valor do desconto.
 * @pw_element decimal $vAcresc Valor de acréscimo.
 * @pw_element decimal $vTaxa Valor da taxa da administradora de cartões.
 * @pw_element decimal $vCF Valor do Cupom Fiscal.<BR><BR>Preenchimento obrigatório.
 * @pw_element decimal $vTotTrib Valor aproximado dos tributos (IBPT).
 * @pw_complex total
 */
class Total{
	/**
	 * Valor total do item. É o valor líquido dos produtos vendidos no cupom.<BR><BR>vItem = vProd - vDesc + vAcresc<BR><BR>Preenchimento obrigatório.
	 *
	 * @var decimal
	 */
	public float $vItem;
	/**
	 * Valor do ICMS.
	 *
	 * @var decimal
	 */
	public float $vICMS;
	/**
	 * Valor do desconto.
	 *
	 * @var decimal
	 */
	public float $vDesc;
	/**
	 * Valor de acréscimo.
	 *
	 * @var decimal
	 */
	public float $vAcresc;
	/**
	 * Valor da taxa da administradora de cartões.
	 *
	 * @var decimal
	 */
	public float $vTaxa;
	/**
	 * Valor do Cupom Fiscal.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var decimal
	 */
	public float $vCF;
	/**
	 * Valor aproximado dos tributos (IBPT).
	 *
	 * @var decimal
	 */
	public float $vTotTrib;
}
