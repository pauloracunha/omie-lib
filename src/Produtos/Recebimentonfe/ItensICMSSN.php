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
 * Informações do ICMS Simples Nacional
 *
 * @pw_element string $cSitTribSN Situação Tributária do ICMS
 * @pw_element string $cOrigem Origem
 * @pw_element decimal $nBCSNST Base de Cálculo do ICMS Retido
 * @pw_element decimal $nValorSNST Valor do ICMS Retido por ST
 * @pw_element decimal $nAliqCredSN Alíq. de Cálculo de Crédito (%)
 * @pw_element decimal $nCredSN Crédito do ICMS Aproveitado
 * @pw_element string $cModBCSN Modalidade da BC do ICMS
 * @pw_element decimal $nAliqRedBCSN Redução da BC do ICMS (%)
 * @pw_element decimal $nBCSN Base de Cálculo do ICMS
 * @pw_element decimal $nAliqSN Alíquota do ICMS (%)
 * @pw_element decimal $nValorSN Valor do ICMS
 * @pw_complex itensICMSSN
 */
class ItensICMSSN{
	/**
	 * Situação Tributária do ICMS
	 *
	 * @var string
	 */
	public string $cSitTribSN;
	/**
	 * Origem
	 *
	 * @var string
	 */
	public string $cOrigem;
	/**
	 * Base de Cálculo do ICMS Retido
	 *
	 * @var decimal
	 */
	public float $nBCSNST;
	/**
	 * Valor do ICMS Retido por ST
	 *
	 * @var decimal
	 */
	public float $nValorSNST;
	/**
	 * Alíq. de Cálculo de Crédito (%)
	 *
	 * @var decimal
	 */
	public float $nAliqCredSN;
	/**
	 * Crédito do ICMS Aproveitado
	 *
	 * @var decimal
	 */
	public float $nCredSN;
	/**
	 * Modalidade da BC do ICMS
	 *
	 * @var string
	 */
	public string $cModBCSN;
	/**
	 * Redução da BC do ICMS (%)
	 *
	 * @var decimal
	 */
	public float $nAliqRedBCSN;
	/**
	 * Base de Cálculo do ICMS
	 *
	 * @var decimal
	 */
	public float $nBCSN;
	/**
	 * Alíquota do ICMS (%)
	 *
	 * @var decimal
	 */
	public float $nAliqSN;
	/**
	 * Valor do ICMS
	 *
	 * @var decimal
	 */
	public float $nValorSN;
}
