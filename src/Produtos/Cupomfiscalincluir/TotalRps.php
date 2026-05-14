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
 * Total do cupom RPS.
 *
 * @pw_element decimal $vItem Valor total do item. É o valor líquido dos produtos vendidos no cupom.<BR><BR>vItem = vProd - vDesc + vAcresc<BR><BR>Preenchimento obrigatório.
 * @pw_element decimal $vDesc Valor do desconto.
 * @pw_element decimal $vRPS Valor do Cupom/RPS.
 * @pw_complex totalRps
 */
class TotalRps{
	/**
	 * Valor total do item. É o valor líquido dos produtos vendidos no cupom.<BR><BR>vItem = vProd - vDesc + vAcresc<BR><BR>Preenchimento obrigatório.
	 *
	 * @var decimal
	 */
	public float $vItem;
	/**
	 * Valor do desconto.
	 *
	 * @var decimal
	 */
	public float $vDesc;
	/**
	 * Valor do Cupom/RPS.
	 *
	 * @var decimal
	 */
	public float $vRPS;
}
