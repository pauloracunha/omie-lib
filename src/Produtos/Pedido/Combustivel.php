<?php

namespace OmieLib\Produtos\Pedido;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedido\Request\PvpAlterarPedFatRequest;
use OmieLib\Produtos\Pedido\Request\PvpConsultarRequest;
use OmieLib\Produtos\Pedido\Request\PvpDevolverRequest;
use OmieLib\Produtos\Pedido\Request\PvpExcluirRequest;
use OmieLib\Produtos\Pedido\Request\PvpListarRequest;
use OmieLib\Produtos\Pedido\Request\PvpSimularImpRequest;
use OmieLib\Produtos\Pedido\Request\PvpStatusRequest;
use OmieLib\Produtos\Pedido\Request\PvpTrocarEtapaRequest;
use OmieLib\Produtos\Pedido\Response\PvpAlterarPedFatResponse;
use OmieLib\Produtos\Pedido\Response\PvpConsultarResponse;
use OmieLib\Produtos\Pedido\Response\PvpDevolverResponse;
use OmieLib\Produtos\Pedido\Response\PvpExcluirResponse;
use OmieLib\Produtos\Pedido\Response\PvpListarResponse;
use OmieLib\Produtos\Pedido\Response\PvpSimularImpResponse;
use OmieLib\Produtos\Pedido\Response\PvpStatusResponse;
use OmieLib\Produtos\Pedido\Response\PvpTrocarEtapaResponse;

/**
 * Detalhamento específico de Combustível.
 *
 * @pw_element string $cCodigoANP Código de Produto da ANP.
 * @pw_element string $cDescrANP Descrição do Produto conforme ANP.
 * @pw_element string $cCODIF Registro do CODIF.
 * @pw_element decimal $nPercGLP Percentual de GLP Derivado do Petróleo.
 * @pw_element decimal $nPercGasNacional Percentual de Gás Natural Nacional.
 * @pw_element decimal $nPercGasImportado Percentual de Gás Natural Importado.
 * @pw_element decimal $nValorPartida Valor de Partida.
 * @pw_element decimal $nQtdeFatTempAmb Quantidade Faturada à Temperatura Ambiente.
 * @pw_element string $cUFConsumoComb UF de Consumo.
 * @pw_element decimal $nBC_CIDE Base de Cálculo (em quantidade)  da CIDE.
 * @pw_element decimal $nAliquota_CIDE Valor da Alíquota em Reais da CIDE.
 * @pw_element decimal $nValor_CIDE Valor da CIDE.
 * @pw_element decimal $nBC_UFRem Base de Cálculo da UF Remetente.<BR><BR>Base de Cálculo do ICMS retido anteriormente por Substituição Tributária.
 * @pw_element decimal $nValorUFRem Valor da UF Remetente.<BR><BR>Alíquota do ICMS retido anteriormente por Substituição Tributária.
 * @pw_element decimal $nBC_UFDest Base de Cálculo da UF Destino.<BR><BR>Base de Cálculo do ICMS ST da UF Destino.
 * @pw_element decimal $nValorUFDest Valor da UF Destino.<BR><BR>Base de Cálculo do ICMS ST da UF Destino.
 * @pw_complex combustivel
 */
class Combustivel{
	/**
	 * Código de Produto da ANP.
	 *
	 * @var string
	 */
	public string $cCodigoANP;
	/**
	 * Descrição do Produto conforme ANP.
	 *
	 * @var string
	 */
	public string $cDescrANP;
	/**
	 * Registro do CODIF.
	 *
	 * @var string
	 */
	public string $cCODIF;
	/**
	 * Percentual de GLP Derivado do Petróleo.
	 *
	 * @var decimal
	 */
	public float $nPercGLP;
	/**
	 * Percentual de Gás Natural Nacional.
	 *
	 * @var decimal
	 */
	public float $nPercGasNacional;
	/**
	 * Percentual de Gás Natural Importado.
	 *
	 * @var decimal
	 */
	public float $nPercGasImportado;
	/**
	 * Valor de Partida.
	 *
	 * @var decimal
	 */
	public float $nValorPartida;
	/**
	 * Quantidade Faturada à Temperatura Ambiente.
	 *
	 * @var decimal
	 */
	public float $nQtdeFatTempAmb;
	/**
	 * UF de Consumo.
	 *
	 * @var string
	 */
	public string $cUFConsumoComb;
	/**
	 * Base de Cálculo (em quantidade)  da CIDE.
	 *
	 * @var decimal
	 */
	public float $nBC_CIDE;
	/**
	 * Valor da Alíquota em Reais da CIDE.
	 *
	 * @var decimal
	 */
	public float $nAliquota_CIDE;
	/**
	 * Valor da CIDE.
	 *
	 * @var decimal
	 */
	public float $nValor_CIDE;
	/**
	 * Base de Cálculo da UF Remetente.<BR><BR>Base de Cálculo do ICMS retido anteriormente por Substituição Tributária.
	 *
	 * @var decimal
	 */
	public float $nBC_UFRem;
	/**
	 * Valor da UF Remetente.<BR><BR>Alíquota do ICMS retido anteriormente por Substituição Tributária.
	 *
	 * @var decimal
	 */
	public float $nValorUFRem;
	/**
	 * Base de Cálculo da UF Destino.<BR><BR>Base de Cálculo do ICMS ST da UF Destino.
	 *
	 * @var decimal
	 */
	public float $nBC_UFDest;
	/**
	 * Valor da UF Destino.<BR><BR>Base de Cálculo do ICMS ST da UF Destino.
	 *
	 * @var decimal
	 */
	public float $nValorUFDest;
}
