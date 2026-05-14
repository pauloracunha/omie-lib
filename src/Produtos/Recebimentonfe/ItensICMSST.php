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
 * Informações do ICMS Substituição Tributária
 *
 * @pw_element string $cModBCST Modalidade da Base de Cálculo do ICMS Substituição Tributária
 * @pw_element decimal $nMargVrAd Margem de Valor Adicionado (%)
 * @pw_element decimal $nRedBCST Redução da BC do ICMS ST (%)
 * @pw_element decimal $nBCST Base de Cálculo do ICMS ST
 * @pw_element decimal $nAliqST Alíquota do ICMS ST (%)
 * @pw_element decimal $nAliqOP Alíquota do ICMS Operação Própria (%)
 * @pw_element decimal $nValorST Valor do ICMS ST
 * @pw_element string $cCEST CEST (Código Especificador da Substituição Tributária)
 * @pw_complex itensICMSST
 */
class ItensICMSST{
	/**
	 * Modalidade da Base de Cálculo do ICMS Substituição Tributária
	 *
	 * @var string
	 */
	public string $cModBCST;
	/**
	 * Margem de Valor Adicionado (%)
	 *
	 * @var decimal
	 */
	public float $nMargVrAd;
	/**
	 * Redução da BC do ICMS ST (%)
	 *
	 * @var decimal
	 */
	public float $nRedBCST;
	/**
	 * Base de Cálculo do ICMS ST
	 *
	 * @var decimal
	 */
	public float $nBCST;
	/**
	 * Alíquota do ICMS ST (%)
	 *
	 * @var decimal
	 */
	public float $nAliqST;
	/**
	 * Alíquota do ICMS Operação Própria (%)
	 *
	 * @var decimal
	 */
	public float $nAliqOP;
	/**
	 * Valor do ICMS ST
	 *
	 * @var decimal
	 */
	public float $nValorST;
	/**
	 * CEST (Código Especificador da Substituição Tributária)
	 *
	 * @var string
	 */
	public string $cCEST;
}
