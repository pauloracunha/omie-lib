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
 * Informações do produto.
 *
 * @pw_element string $cProd Código do produto conforme destacado no Cupom Fiscal.<BR><BR>Preenchimento obrigatório.
 * @pw_element string $xProd Descrição do produto conforme destacado no Cupom Fiscal.<BR><BR>Preenchimento obrigatório.
 * @pw_element string $CFOP CFOP.<BR><BR>Preenchimento obrigatório.
 * @pw_element string $NCM NCM.<BR><BR>Preenchimento obrigatório.
 * @pw_element string $cEAN EAN do produto.
 * @pw_element string $cUn Unidade de medida.<BR><BR>Preenchimento obrigatório.
 * @pw_element decimal $nQuant Quantidade.<BR><BR>Preenchimento obrigatório.
 * @pw_element decimal $vUnit Valor unitário.<BR><BR>Preenchimento obrigatório.
 * @pw_element decimal $vProd Valor total do item. É o valor líquido dos produtos vendidos no cupom.<BR><BR>vItem = vProd - vDesc + vAcresc<BR><BR>Preenchimento obrigatório.
 * @pw_element decimal $vDesc Valor do desconto.
 * @pw_element decimal $vAcresc Valor de acréscimo.
 * @pw_element decimal $vItem Valor do Cupom Fiscal.<BR><BR>Preenchimento obrigatório.
 * @pw_complex prod
 */
class Prod{
	/**
	 * Código do produto conforme destacado no Cupom Fiscal.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $cProd;
	/**
	 * Descrição do produto conforme destacado no Cupom Fiscal.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $xProd;
	/**
	 * CFOP.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $CFOP;
	/**
	 * NCM.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $NCM;
	/**
	 * EAN do produto.
	 *
	 * @var string
	 */
	public string $cEAN;
	/**
	 * Unidade de medida.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $cUn;
	/**
	 * Quantidade.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var decimal
	 */
	public float $nQuant;
	/**
	 * Valor unitário.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var decimal
	 */
	public float $vUnit;
	/**
	 * Valor total do item. É o valor líquido dos produtos vendidos no cupom.<BR><BR>vItem = vProd - vDesc + vAcresc<BR><BR>Preenchimento obrigatório.
	 *
	 * @var decimal
	 */
	public float $vProd;
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
	 * Valor do Cupom Fiscal.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var decimal
	 */
	public float $vItem;
}
