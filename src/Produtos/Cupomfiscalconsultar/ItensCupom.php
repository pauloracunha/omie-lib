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
 * Informações dos Itens do Cupom Fiscal.
 *
 * @pw_element integer $idItem ID do item do cupom fiscal
 * @pw_element integer $idProduto ID do produto do item do cupom fiscal
 * @pw_element decimal $nQuant Quantidade do item do cupom fiscal
 * @pw_element decimal $vUnit Valor unitário do item do cupom fiscal
 * @pw_element decimal $vDesc Valor desconto do item do cupom fiscal
 * @pw_element decimal $vAcresc Valor acréscimo do item do cupom fiscal
 * @pw_element decimal $vItem Valor líquido do item do cupom fiscal
 * @pw_element decimal $nAliqPIS Alíquota do PIS.
 * @pw_element decimal $nValorPIS Valor do PIS.
 * @pw_element decimal $nAliqCOFINS Alíquota do COFINS.
 * @pw_element decimal $nValorCOFINS Valor do COFINS.
 * @pw_element decimal $nAliqICMS Alíquota do ICMS.
 * @pw_element decimal $nValorICMS Valor do ICMS.
 * @pw_element string $cCFOP CFOP do Item.
 * @pw_element string $cNCM NCM do Item.
 * @pw_element string $xProd Descrição do item do cupom fiscal
 * @pw_element string $cUn Unidade do item do cupom fiscal
 * @pw_element string $cCodigo Código do Produto no Cupom Fiscal.
 * @pw_element string $emiProduto Código do PDV do item do cupom fiscal
 * @pw_element decimal $nValorOutros Outros valores.
 * @pw_element string $cItemCancelado Item do Cupom Fiscal Cancelado (S/N)?
 * @pw_element string $cItemDevolvido Item do Cupom Fiscal Devolvido (S/N)?
 * @pw_element integer $nSequencia Sequência do item no Cupom Fiscal.
 * @pw_complex itensCupom
 */
class ItensCupom{
	/**
	 * ID do item do cupom fiscal
	 *
	 * @var integer
	 */
	public int $idItem;
	/**
	 * ID do produto do item do cupom fiscal
	 *
	 * @var integer
	 */
	public int $idProduto;
	/**
	 * Quantidade do item do cupom fiscal
	 *
	 * @var decimal
	 */
	public float $nQuant;
	/**
	 * Valor unitário do item do cupom fiscal
	 *
	 * @var decimal
	 */
	public float $vUnit;
	/**
	 * Valor desconto do item do cupom fiscal
	 *
	 * @var decimal
	 */
	public float $vDesc;
	/**
	 * Valor acréscimo do item do cupom fiscal
	 *
	 * @var decimal
	 */
	public float $vAcresc;
	/**
	 * Valor líquido do item do cupom fiscal
	 *
	 * @var decimal
	 */
	public float $vItem;
	/**
	 * Alíquota do PIS.
	 *
	 * @var decimal
	 */
	public float $nAliqPIS;
	/**
	 * Valor do PIS.
	 *
	 * @var decimal
	 */
	public float $nValorPIS;
	/**
	 * Alíquota do COFINS.
	 *
	 * @var decimal
	 */
	public float $nAliqCOFINS;
	/**
	 * Valor do COFINS.
	 *
	 * @var decimal
	 */
	public float $nValorCOFINS;
	/**
	 * Alíquota do ICMS.
	 *
	 * @var decimal
	 */
	public float $nAliqICMS;
	/**
	 * Valor do ICMS.
	 *
	 * @var decimal
	 */
	public float $nValorICMS;
	/**
	 * CFOP do Item.
	 *
	 * @var string
	 */
	public string $cCFOP;
	/**
	 * NCM do Item.
	 *
	 * @var string
	 */
	public string $cNCM;
	/**
	 * Descrição do item do cupom fiscal
	 *
	 * @var string
	 */
	public string $xProd;
	/**
	 * Unidade do item do cupom fiscal
	 *
	 * @var string
	 */
	public string $cUn;
	/**
	 * Código do Produto no Cupom Fiscal.
	 *
	 * @var string
	 */
	public string $cCodigo;
	/**
	 * Código do PDV do item do cupom fiscal
	 *
	 * @var string
	 */
	public string $emiProduto;
	/**
	 * Outros valores.
	 *
	 * @var decimal
	 */
	public float $nValorOutros;
	/**
	 * Item do Cupom Fiscal Cancelado (S/N)?
	 *
	 * @var string
	 */
	public string $cItemCancelado;
	/**
	 * Item do Cupom Fiscal Devolvido (S/N)?
	 *
	 * @var string
	 */
	public string $cItemDevolvido;
	/**
	 * Sequência do item no Cupom Fiscal.
	 *
	 * @var integer
	 */
	public int $nSequencia;
}
