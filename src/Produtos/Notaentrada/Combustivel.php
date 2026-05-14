<?php

namespace OmieLib\Produtos\Notaentrada;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Notaentrada\Request\NeAlterarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeConsultarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeExcluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeIncluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeListarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeStatusRequest;
use OmieLib\Produtos\Notaentrada\Response\NeAlterarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeConsultarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeExcluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeIncluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeListarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeStatusResponse;

/**
 * Detalhamento específico de combustíveis
 *
 * @pw_element string $cCodigoANP Combustíveis - Código de produto da ANP
 * @pw_element string $cDescrANP Combustíveis - Descrição do Produto conforme ANP
 * @pw_element string $cCODIF Combustíveis - Código de autorização / registro do CODIF
 * @pw_element decimal $nPercGLP Combustíveis - Percentual de Gás Natural para o produto GLP
 * @pw_element decimal $nPercGasNacional Combustíveis - Percentual de Gás Natural Nacional
 * @pw_element decimal $nPercGasImportado Combustíveis - Percentual de Gás Natural Importado
 * @pw_element decimal $nValorPartida Combustíveis - Valor de Partida
 * @pw_element decimal $nQtdeFatTempAmb Combustíveis - Quantidade de combustível faturada à temperatura ambiente
 * @pw_element string $cUFConsumoComb Combustíveis - Sigla da UF de consumo
 * @pw_element decimal $nBC_CIDE Combustíveis - Base de Cálculo (em quantidade)  da CIDE.
 * @pw_element decimal $nAliquota_CIDE Combustíveis - Valor da Alíquota em Reais da CIDE.
 * @pw_element decimal $nValor_CIDE Combustíveis - Valor da CIDE.
 * @pw_complex combustivel
 */
class Combustivel{
	/**
	 * Combustíveis - Código de produto da ANP
	 *
	 * @var string
	 */
	public string $cCodigoANP;
	/**
	 * Combustíveis - Descrição do Produto conforme ANP
	 *
	 * @var string
	 */
	public string $cDescrANP;
	/**
	 * Combustíveis - Código de autorização / registro do CODIF
	 *
	 * @var string
	 */
	public string $cCODIF;
	/**
	 * Combustíveis - Percentual de Gás Natural para o produto GLP
	 *
	 * @var decimal
	 */
	public float $nPercGLP;
	/**
	 * Combustíveis - Percentual de Gás Natural Nacional
	 *
	 * @var decimal
	 */
	public float $nPercGasNacional;
	/**
	 * Combustíveis - Percentual de Gás Natural Importado
	 *
	 * @var decimal
	 */
	public float $nPercGasImportado;
	/**
	 * Combustíveis - Valor de Partida
	 *
	 * @var decimal
	 */
	public float $nValorPartida;
	/**
	 * Combustíveis - Quantidade de combustível faturada à temperatura ambiente
	 *
	 * @var decimal
	 */
	public float $nQtdeFatTempAmb;
	/**
	 * Combustíveis - Sigla da UF de consumo
	 *
	 * @var string
	 */
	public string $cUFConsumoComb;
	/**
	 * Combustíveis - Base de Cálculo (em quantidade)  da CIDE.
	 *
	 * @var decimal
	 */
	public float $nBC_CIDE;
	/**
	 * Combustíveis - Valor da Alíquota em Reais da CIDE.
	 *
	 * @var decimal
	 */
	public float $nAliquota_CIDE;
	/**
	 * Combustíveis - Valor da CIDE.
	 *
	 * @var decimal
	 */
	public float $nValor_CIDE;
}
