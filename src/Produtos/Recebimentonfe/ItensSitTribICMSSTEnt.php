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
 * ICMS ST (Substituição Tributária)
 *
 * @pw_element decimal $nMargVrAdE Margem de Valor Adicional
 * @pw_element decimal $nRedBCSTE Redução da BC do ICMS ST (%)
 * @pw_element decimal $nBCSTE Base de Cálculo do ICMS ST
 * @pw_element decimal $nAliqSTE Alíquota do ICMS ST (%)
 * @pw_element decimal $nValorST Valor do ICMS ST
 * @pw_element decimal $nBCFCPE Base de Cálculo do Fundo de Combate a Pobreza
 * @pw_element decimal $nAliqFCPE % do Fundo de Combate a Pobreza (ICMS ST)
 * @pw_element decimal $nValorFCPE Valor do Fundo de Combate a Pobreza
 * @pw_complex itensSitTribICMSSTEnt
 */
class ItensSitTribICMSSTEnt{
	/**
	 * Margem de Valor Adicional
	 *
	 * @var decimal
	 */
	public float $nMargVrAdE;
	/**
	 * Redução da BC do ICMS ST (%)
	 *
	 * @var decimal
	 */
	public float $nRedBCSTE;
	/**
	 * Base de Cálculo do ICMS ST
	 *
	 * @var decimal
	 */
	public float $nBCSTE;
	/**
	 * Alíquota do ICMS ST (%)
	 *
	 * @var decimal
	 */
	public float $nAliqSTE;
	/**
	 * Valor do ICMS ST
	 *
	 * @var decimal
	 */
	public float $nValorST;
	/**
	 * Base de Cálculo do Fundo de Combate a Pobreza
	 *
	 * @var decimal
	 */
	public float $nBCFCPE;
	/**
	 * % do Fundo de Combate a Pobreza (ICMS ST)
	 *
	 * @var decimal
	 */
	public float $nAliqFCPE;
	/**
	 * Valor do Fundo de Combate a Pobreza
	 *
	 * @var decimal
	 */
	public float $nValorFCPE;
}
