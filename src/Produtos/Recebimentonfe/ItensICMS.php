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
 * Informações do ICMS
 *
 * @pw_element string $cSitTrib Situação Tributária do ICMS
 * @pw_element string $cOrigem Origem
 * @pw_element string $cModBC Modalidade da Base de Cálculo do ICMS Substituição Tributária
 * @pw_element decimal $nRedBC Redução da BC do ICMS (%)
 * @pw_element decimal $nBC Base de Cálculo do ICMS
 * @pw_element decimal $nAliq Alíquota do ICMS (%)
 * @pw_element decimal $nValor Valor do ICMS
 * @pw_element decimal $nBCStRecAnt Base do ICMS Substituição Tributária Recebido Anteriormente
 * @pw_element decimal $nAliqStRecAnt Alíquota do ICMS Substituição Tributária Recebido Anteriormente
 * @pw_element decimal $nValorStRecAnt Valor do ICMS Substituição Tributária Recebido Anteriormente
 * @pw_element decimal $nPercDif Percentual do Diferimento (%)
 * @pw_element decimal $nValorDif Valor do ICMS Diferido
 * @pw_element decimal $nValorSubst Valor do ICMS do Substituto
 * @pw_element decimal $nValorOpProp Valor do ICMS Operação Própria
 * @pw_complex itensICMS
 */
class ItensICMS{
	/**
	 * Situação Tributária do ICMS
	 *
	 * @var string
	 */
	public string $cSitTrib;
	/**
	 * Origem
	 *
	 * @var string
	 */
	public string $cOrigem;
	/**
	 * Modalidade da Base de Cálculo do ICMS Substituição Tributária
	 *
	 * @var string
	 */
	public string $cModBC;
	/**
	 * Redução da BC do ICMS (%)
	 *
	 * @var decimal
	 */
	public float $nRedBC;
	/**
	 * Base de Cálculo do ICMS
	 *
	 * @var decimal
	 */
	public float $nBC;
	/**
	 * Alíquota do ICMS (%)
	 *
	 * @var decimal
	 */
	public float $nAliq;
	/**
	 * Valor do ICMS
	 *
	 * @var decimal
	 */
	public float $nValor;
	/**
	 * Base do ICMS Substituição Tributária Recebido Anteriormente
	 *
	 * @var decimal
	 */
	public float $nBCStRecAnt;
	/**
	 * Alíquota do ICMS Substituição Tributária Recebido Anteriormente
	 *
	 * @var decimal
	 */
	public float $nAliqStRecAnt;
	/**
	 * Valor do ICMS Substituição Tributária Recebido Anteriormente
	 *
	 * @var decimal
	 */
	public float $nValorStRecAnt;
	/**
	 * Percentual do Diferimento (%)
	 *
	 * @var decimal
	 */
	public float $nPercDif;
	/**
	 * Valor do ICMS Diferido
	 *
	 * @var decimal
	 */
	public float $nValorDif;
	/**
	 * Valor do ICMS do Substituto
	 *
	 * @var decimal
	 */
	public float $nValorSubst;
	/**
	 * Valor do ICMS Operação Própria
	 *
	 * @var decimal
	 */
	public float $nValorOpProp;
}
