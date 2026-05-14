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
 * Informações do IPI
 *
 * @pw_element string $cSitTribIPI Situação Tributária do IPI
 * @pw_element string $cTpCalcIPI Tipo de Cálculo para obter o IPI
 * @pw_element decimal $nBCIPI Base de Cálculo do IPI
 * @pw_element decimal $nAliqIPI Alíquota do IPI (%)
 * @pw_element decimal $nQtdUTIPI Quantidade de Unidades Tributáveis
 * @pw_element decimal $nValIPIUT Valor do IPI por UnididadeTributável
 * @pw_element string $cEnqIPI Enquadramento do IPI
 * @pw_element decimal $nValIPI Valor do IPI
 * @pw_element decimal $nValIPIDev Valor do IPI Devolvido
 * @pw_complex itensIPI
 */
class ItensIPI{
	/**
	 * Situação Tributária do IPI
	 *
	 * @var string
	 */
	public string $cSitTribIPI;
	/**
	 * Tipo de Cálculo para obter o IPI
	 *
	 * @var string
	 */
	public string $cTpCalcIPI;
	/**
	 * Base de Cálculo do IPI
	 *
	 * @var decimal
	 */
	public float $nBCIPI;
	/**
	 * Alíquota do IPI (%)
	 *
	 * @var decimal
	 */
	public float $nAliqIPI;
	/**
	 * Quantidade de Unidades Tributáveis
	 *
	 * @var decimal
	 */
	public float $nQtdUTIPI;
	/**
	 * Valor do IPI por UnididadeTributável
	 *
	 * @var decimal
	 */
	public float $nValIPIUT;
	/**
	 * Enquadramento do IPI
	 *
	 * @var string
	 */
	public string $cEnqIPI;
	/**
	 * Valor do IPI
	 *
	 * @var decimal
	 */
	public float $nValIPI;
	/**
	 * Valor do IPI Devolvido
	 *
	 * @var decimal
	 */
	public float $nValIPIDev;
}
