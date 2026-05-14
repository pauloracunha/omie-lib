<?php

namespace OmieLib\Produtos\Remessa;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Remessa\Request\RemessaDevolverRequest;
use OmieLib\Produtos\Remessa\Request\RemessaListarRequest;
use OmieLib\Produtos\Remessa\Request\RemessaStatusRequest;
use OmieLib\Produtos\Remessa\Response\RemessaDevolverResponse;
use OmieLib\Produtos\Remessa\Response\RemessaListarResponse;
use OmieLib\Produtos\Remessa\Response\RemessaStatusResponse;

/**
 * Itens da Remessa
 *
 * @pw_element integer $nCodIt Código do item da remessa
 * @pw_element string $cCodItInt Código de Integração do Item
 * @pw_element integer $nCodProd Código do Produto
 * @pw_element string $cCodProdInt Código de Integração do Produto
 * @pw_element string $cCFOP Código da CFOP
 * @pw_element decimal $nQtde Quantidade
 * @pw_element decimal $nValUnit Valor do Item
 * @pw_element string $cNCM Código NCM
 * @pw_element string $cEAN Código EAN (GTIN)
 * @pw_element decimal $nDesconto Valor do Desconto
 * @pw_element ICMS $ICMS Informações do ICMS.
 * @pw_element ICMS_ST $ICMS_ST Informações do ICMS-ST.
 * @pw_element ICMS_SN $ICMS_SN Informações do ICMS-Simples Nacional.
 * @pw_element IPI $IPI IPI
 * @pw_element PIS $PIS PIS
 * @pw_element COFINS $COFINS COFINS
 * @pw_element infAdicItem $infAdicItem Informações Adicionais da Remessa
 * @pw_element string $cCest CEST
 * @pw_element rastreabilidade $rastreabilidade Rastreabilidade do produto
 * @pw_element lote_validadeArray $lote_validade Informações referentes ao lote e validade do produto.<BR><BR>A tag só deve ser informada se o produto possuir controle de lote e se a intenção é informar os lotes "manualmente" por API.
 * @pw_element integer $codigo_local_estoque Código do Local do Estoque.<BR><BR>Preenchimento opcional.<BR><BR>Caso não preenchido assumirá o Local de Estoque padrão.
 * @pw_element string $reservado Indica se o item está com o estoque reservado [S/N]
 * @pw_element IBS_CBS $IBS_CBS Informações unificadas sobre o IBS e CBS.
 * @pw_element IBS $IBS Informações sobre o IBS.
 * @pw_element CBS $CBS Informações sobre o CBS.
 * @pw_element TRIB_REG $TRIB_REG Informações sobre a Tributação Regular do IBS e CBS.
 * @pw_complex produtos
 */
class Produtos{
	/**
	 * Código do item da remessa
	 *
	 * @var integer
	 */
	public int $nCodIt;
	/**
	 * Código de Integração do Item
	 *
	 * @var string
	 */
	public string $cCodItInt;
	/**
	 * Código do Produto
	 *
	 * @var integer
	 */
	public int $nCodProd;
	/**
	 * Código de Integração do Produto
	 *
	 * @var string
	 */
	public string $cCodProdInt;
	/**
	 * Código da CFOP
	 *
	 * @var string
	 */
	public string $cCFOP;
	/**
	 * Quantidade
	 *
	 * @var decimal
	 */
	public float $nQtde;
	/**
	 * Valor do Item
	 *
	 * @var decimal
	 */
	public float $nValUnit;
	/**
	 * Código NCM
	 *
	 * @var string
	 */
	public string $cNCM;
	/**
	 * Código EAN (GTIN)
	 *
	 * @var string
	 */
	public string $cEAN;
	/**
	 * Valor do Desconto
	 *
	 * @var decimal
	 */
	public float $nDesconto;
	/**
	 * Informações do ICMS.
	 *
	 * @var ICMS
	 */
	public ICMS $ICMS;
	/**
	 * Informações do ICMS-ST.
	 *
	 * @var ICMS_ST
	 */
	public ICMS_ST $ICMS_ST;
	/**
	 * Informações do ICMS-Simples Nacional.
	 *
	 * @var ICMS_SN
	 */
	public ICMS_SN $ICMS_SN;
	/**
	 * IPI
	 *
	 * @var IPI
	 */
	public IPI $IPI;
	/**
	 * PIS
	 *
	 * @var PIS
	 */
	public PIS $PIS;
	/**
	 * COFINS
	 *
	 * @var COFINS
	 */
	public COFINS $COFINS;
	/**
	 * Informações Adicionais da Remessa
	 *
	 * @var InfAdicItem
	 */
	public InfAdicItem $infAdicItem;
	/**
	 * CEST
	 *
	 * @var string
	 */
	public string $cCest;
	/**
	 * Rastreabilidade do produto
	 *
	 * @var Rastreabilidade
	 */
	public Rastreabilidade $rastreabilidade;
	/**
	 * Informações referentes ao lote e validade do produto.<BR><BR>A tag só deve ser informada se o produto possuir controle de lote e se a intenção é informar os lotes "manualmente" por API.
	 *
	 * @var Lote_validade[]
	 */
	public array $lote_validade;
	/**
	 * Código do Local do Estoque.<BR><BR>Preenchimento opcional.<BR><BR>Caso não preenchido assumirá o Local de Estoque padrão.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
	/**
	 * Indica se o item está com o estoque reservado [S/N]
	 *
	 * @var string
	 */
	public string $reservado;
	/**
	 * Informações unificadas sobre o IBS e CBS.
	 *
	 * @var IBS_CBS
	 */
	public IBS_CBS $IBS_CBS;
	/**
	 * Informações sobre o IBS.
	 *
	 * @var IBS
	 */
	public IBS $IBS;
	/**
	 * Informações sobre o CBS.
	 *
	 * @var CBS
	 */
	public CBS $CBS;
	/**
	 * Informações sobre a Tributação Regular do IBS e CBS.
	 *
	 * @var TRIB_REG
	 */
	public TRIB_REG $TRIB_REG;
}
