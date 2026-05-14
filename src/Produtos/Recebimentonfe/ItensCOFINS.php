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
 * Informações do COFINS
 *
 * @pw_element string $cSitTribCOFINS Situação Tributária do COFINS
 * @pw_element string $cTpCalcCOFINS Tipo de Cálculo para obter o COFINS
 * @pw_element decimal $nBCCOFINS Base de Cálculo do COFINS
 * @pw_element decimal $nAliqCOFINS Alíquota do COFINS (%)
 * @pw_element decimal $nQtdUTCOFINS Quantidade Unidades Tributáveis
 * @pw_element decimal $nVaCOFINSSUT Valor do COFINS Unidade Tributável
 * @pw_element decimal $nValCOFINS Valor do COFINS
 * @pw_complex itensCOFINS
 */
class ItensCOFINS{
	/**
	 * Situação Tributária do COFINS
	 *
	 * @var string
	 */
	public string $cSitTribCOFINS;
	/**
	 * Tipo de Cálculo para obter o COFINS
	 *
	 * @var string
	 */
	public string $cTpCalcCOFINS;
	/**
	 * Base de Cálculo do COFINS
	 *
	 * @var decimal
	 */
	public float $nBCCOFINS;
	/**
	 * Alíquota do COFINS (%)
	 *
	 * @var decimal
	 */
	public float $nAliqCOFINS;
	/**
	 * Quantidade Unidades Tributáveis
	 *
	 * @var decimal
	 */
	public float $nQtdUTCOFINS;
	/**
	 * Valor do COFINS Unidade Tributável
	 *
	 * @var decimal
	 */
	public float $nVaCOFINSSUT;
	/**
	 * Valor do COFINS
	 *
	 * @var decimal
	 */
	public float $nValCOFINS;
}
