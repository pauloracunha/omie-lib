<?php

namespace OmieLib\Produtos\Nfconsultar;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfconsultar\Request\NfListarRequest;
use OmieLib\Produtos\Nfconsultar\Response\NfListarResponse;

/**
 * Grupo de Valores Totais referentes ao ICMS
 *
 * @pw_element decimal $vBC Base de Cálculo do ICMS
 * @pw_element decimal $vICMS Valor Total do ICMS
 * @pw_element decimal $vBCST Base de Cálculo do ICMS ST
 * @pw_element decimal $vST Valor Total do ICMS ST
 * @pw_element decimal $vProd Valor Total dos produtos e serviços
 * @pw_element decimal $vFrete Valor Total do Frete
 * @pw_element decimal $vSeg Valor Total do Seguro
 * @pw_element decimal $vDesc Valor Total do Desconto
 * @pw_element decimal $vII Valor Total do II
 * @pw_element decimal $vIPI Valor Total do IPI
 * @pw_element decimal $vPIS Valor Retido de PIS
 * @pw_element decimal $vCOFINS Valor Retido de COFINS
 * @pw_element decimal $vOutro Outras Despesas acessórias
 * @pw_element decimal $vNF Valor Total da NF-e
 * @pw_element decimal $vTotTrib Valor aproximado total de tributos federais, estaduais e municipais
 * @pw_element decimal $vICMSDesonerado Valor do ICMS Desonerado.
 * @pw_element decimal $vBCFCP Base de Cálculo do Fundo de Combate a Pobreza
 * @pw_element decimal $vFCP Valor do Fundo de Combate a Pobreza
 * @pw_element decimal $vBCFCPST Base de Cálculo do Fundo de Combate a Pobreza ST
 * @pw_element decimal $vFCPST Valor do Fundo de Combate a Pobreza ST
 * @pw_complex ICMSTot
 */
class ICMSTot{
	/**
	 * Base de Cálculo do ICMS
	 *
	 * @var decimal
	 */
	public float $vBC;
	/**
	 * Valor Total do ICMS
	 *
	 * @var decimal
	 */
	public float $vICMS;
	/**
	 * Base de Cálculo do ICMS ST
	 *
	 * @var decimal
	 */
	public float $vBCST;
	/**
	 * Valor Total do ICMS ST
	 *
	 * @var decimal
	 */
	public float $vST;
	/**
	 * Valor Total dos produtos e serviços
	 *
	 * @var decimal
	 */
	public float $vProd;
	/**
	 * Valor Total do Frete
	 *
	 * @var decimal
	 */
	public float $vFrete;
	/**
	 * Valor Total do Seguro
	 *
	 * @var decimal
	 */
	public float $vSeg;
	/**
	 * Valor Total do Desconto
	 *
	 * @var decimal
	 */
	public float $vDesc;
	/**
	 * Valor Total do II
	 *
	 * @var decimal
	 */
	public float $vII;
	/**
	 * Valor Total do IPI
	 *
	 * @var decimal
	 */
	public float $vIPI;
	/**
	 * Valor Retido de PIS
	 *
	 * @var decimal
	 */
	public float $vPIS;
	/**
	 * Valor Retido de COFINS
	 *
	 * @var decimal
	 */
	public float $vCOFINS;
	/**
	 * Outras Despesas acessórias
	 *
	 * @var decimal
	 */
	public float $vOutro;
	/**
	 * Valor Total da NF-e
	 *
	 * @var decimal
	 */
	public float $vNF;
	/**
	 * Valor aproximado total de tributos federais, estaduais e municipais
	 *
	 * @var decimal
	 */
	public float $vTotTrib;
	/**
	 * Valor do ICMS Desonerado.
	 *
	 * @var decimal
	 */
	public float $vICMSDesonerado;
	/**
	 * Base de Cálculo do Fundo de Combate a Pobreza
	 *
	 * @var decimal
	 */
	public float $vBCFCP;
	/**
	 * Valor do Fundo de Combate a Pobreza
	 *
	 * @var decimal
	 */
	public float $vFCP;
	/**
	 * Base de Cálculo do Fundo de Combate a Pobreza ST
	 *
	 * @var decimal
	 */
	public float $vBCFCPST;
	/**
	 * Valor do Fundo de Combate a Pobreza ST
	 *
	 * @var decimal
	 */
	public float $vFCPST;
}
