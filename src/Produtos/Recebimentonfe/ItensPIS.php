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
 * Informações do PIS
 *
 * @pw_element string $cSitTribPIS Situação Tributária do PIS
 * @pw_element string $cTpCalcPIS Tipo de Cálculo para obter o PIS
 * @pw_element decimal $nBCPIS Base de Cálculo do PIS
 * @pw_element decimal $nAliqPIS Alíquota do PIS (%)
 * @pw_element decimal $nQtdUTPIS Quantidade Unidades Tributáveis
 * @pw_element decimal $nValPISUT Valor do PIS por Unididade Tributável
 * @pw_element decimal $nValPIS Valor do PIS
 * @pw_complex itensPIS
 */
class ItensPIS{
	/**
	 * Situação Tributária do PIS
	 *
	 * @var string
	 */
	public string $cSitTribPIS;
	/**
	 * Tipo de Cálculo para obter o PIS
	 *
	 * @var string
	 */
	public string $cTpCalcPIS;
	/**
	 * Base de Cálculo do PIS
	 *
	 * @var decimal
	 */
	public float $nBCPIS;
	/**
	 * Alíquota do PIS (%)
	 *
	 * @var decimal
	 */
	public float $nAliqPIS;
	/**
	 * Quantidade Unidades Tributáveis
	 *
	 * @var decimal
	 */
	public float $nQtdUTPIS;
	/**
	 * Valor do PIS por Unididade Tributável
	 *
	 * @var decimal
	 */
	public float $nValPISUT;
	/**
	 * Valor do PIS
	 *
	 * @var decimal
	 */
	public float $nValPIS;
}
