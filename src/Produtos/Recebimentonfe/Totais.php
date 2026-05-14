<?php

namespace OmieLib\Produtos\Recebimentonfe;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoAlterarEtapaRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoAlterarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConcAlterarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConcluirRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConsultarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoExcluirRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoListarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoReverterRequest;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoAlterarEtapaResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoAlterarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConcAlterarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConcluirResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConsultarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoExcluirResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoListarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoReverterResponse;

/**
 * Totais da NFe de recebimento
 *
 * @pw_element decimal $bcICMS Báse de Cálculo do ICMS
 * @pw_element decimal $vICMS Valor do ICMS
 * @pw_element decimal $vICMSDesonerado Valor do ICMS Desonerado
 * @pw_element decimal $bcICMSST Base de Cálculo ICMS ST
 * @pw_element decimal $vICMSSubstituicao Valor ICMS Substituição
 * @pw_element decimal $vTotalProdutos Valor Total dos Produtos
 * @pw_element decimal $vFrete Valor do Frete
 * @pw_element decimal $vSeguro Valor do Seguro
 * @pw_element decimal $vOutrasDespesas Valor Total de Outras Despesas Acessórias
 * @pw_element decimal $vTotalIPI Valor Total do IPI
 * @pw_element decimal $vTotalNFe Valot Total da Nota Fiscal
 * @pw_element decimal $vTotalDescontos Valor Total do Desconto
 * @pw_element decimal $vTotalPIS Valor Total do PIS
 * @pw_element decimal $vTotalCOFINS Valor Total do COFINS
 * @pw_element decimal $vAproxTributos Valor Aproximado dos Tributos
 * @pw_complex totais
 */
class Totais{
	/**
	 * Báse de Cálculo do ICMS
	 *
	 * @var decimal
	 */
	public float $bcICMS;
	/**
	 * Valor do ICMS
	 *
	 * @var decimal
	 */
	public float $vICMS;
	/**
	 * Valor do ICMS Desonerado
	 *
	 * @var decimal
	 */
	public float $vICMSDesonerado;
	/**
	 * Base de Cálculo ICMS ST
	 *
	 * @var decimal
	 */
	public float $bcICMSST;
	/**
	 * Valor ICMS Substituição
	 *
	 * @var decimal
	 */
	public float $vICMSSubstituicao;
	/**
	 * Valor Total dos Produtos
	 *
	 * @var decimal
	 */
	public float $vTotalProdutos;
	/**
	 * Valor do Frete
	 *
	 * @var decimal
	 */
	public float $vFrete;
	/**
	 * Valor do Seguro
	 *
	 * @var decimal
	 */
	public float $vSeguro;
	/**
	 * Valor Total de Outras Despesas Acessórias
	 *
	 * @var decimal
	 */
	public float $vOutrasDespesas;
	/**
	 * Valor Total do IPI
	 *
	 * @var decimal
	 */
	public float $vTotalIPI;
	/**
	 * Valot Total da Nota Fiscal
	 *
	 * @var decimal
	 */
	public float $vTotalNFe;
	/**
	 * Valor Total do Desconto
	 *
	 * @var decimal
	 */
	public float $vTotalDescontos;
	/**
	 * Valor Total do PIS
	 *
	 * @var decimal
	 */
	public float $vTotalPIS;
	/**
	 * Valor Total do COFINS
	 *
	 * @var decimal
	 */
	public float $vTotalCOFINS;
	/**
	 * Valor Aproximado dos Tributos
	 *
	 * @var decimal
	 */
	public float $vAproxTributos;
}
