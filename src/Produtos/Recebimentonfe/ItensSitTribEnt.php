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
 * Situações Tributárias de Entrada do item
 *
 * @pw_element string $cSitTribICMSE Situação Tributária do ICMS
 * @pw_element string $cSitTribIPIE Situação Tributária do IPI
 * @pw_element string $cSitTribPISE Situação Tributária do PIS
 * @pw_element string $cSitTribCOFINSE Situação Tributária do COFINS
 * @pw_element decimal $nBCPISE Base de Cálculo do PIS
 * @pw_element decimal $nAliqPISE Alíquota do PIS (%)
 * @pw_element decimal $nValPISE Valor do PIS
 * @pw_element decimal $nBCCOFINSE Base de Cálculo do COFINS
 * @pw_element decimal $nAliqCOFINSE Alíquota do COFINS (%)
 * @pw_element decimal $nValCOFINSE Valor do COFINS
 * @pw_element string $cNaoCredICMSE Não deve se creditar do ICMS na entrada desse item.<BR><BR>Informar: <BR>S - Sim <BR>N - Não
 * @pw_element itensSitTribICMSSTEnt $itensSitTribICMSSTEnt ICMS ST (Substituição Tributária)<BR>Opcional. Trata-se do ICMS-ST a ser recolhido por antecipação, quando o fornecedor não calculou o ICMS-ST na NF-e.
 * @pw_complex itensSitTribEnt
 */
class ItensSitTribEnt{
	/**
	 * Situação Tributária do ICMS
	 *
	 * @var string
	 */
	public string $cSitTribICMSE;
	/**
	 * Situação Tributária do IPI
	 *
	 * @var string
	 */
	public string $cSitTribIPIE;
	/**
	 * Situação Tributária do PIS
	 *
	 * @var string
	 */
	public string $cSitTribPISE;
	/**
	 * Situação Tributária do COFINS
	 *
	 * @var string
	 */
	public string $cSitTribCOFINSE;
	/**
	 * Base de Cálculo do PIS
	 *
	 * @var decimal
	 */
	public float $nBCPISE;
	/**
	 * Alíquota do PIS (%)
	 *
	 * @var decimal
	 */
	public float $nAliqPISE;
	/**
	 * Valor do PIS
	 *
	 * @var decimal
	 */
	public float $nValPISE;
	/**
	 * Base de Cálculo do COFINS
	 *
	 * @var decimal
	 */
	public float $nBCCOFINSE;
	/**
	 * Alíquota do COFINS (%)
	 *
	 * @var decimal
	 */
	public float $nAliqCOFINSE;
	/**
	 * Valor do COFINS
	 *
	 * @var decimal
	 */
	public float $nValCOFINSE;
	/**
	 * Não deve se creditar do ICMS na entrada desse item.<BR><BR>Informar: <BR>S - Sim <BR>N - Não
	 *
	 * @var string
	 */
	public string $cNaoCredICMSE;
	/**
	 * ICMS ST (Substituição Tributária)<BR>Opcional. Trata-se do ICMS-ST a ser recolhido por antecipação, quando o fornecedor não calculou o ICMS-ST na NF-e.
	 *
	 * @var ItensSitTribICMSSTEnt
	 */
	public ItensSitTribICMSSTEnt $itensSitTribICMSSTEnt;
}
