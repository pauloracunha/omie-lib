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
 * Informações do custo
 *
 * @pw_element string $cICMSCusto ICMS é custo de estoque.<BR><BR>Informar "S" ou "N".
 * @pw_element string $cPISCusto PIS é custo de estoque.<BR><BR>Informar "S" ou "N".
 * @pw_element string $cICMSSTCusto ICMS ST é custo de estoque.<BR><BR>Informar "S" ou "N".
 * @pw_element string $cCOFINSCusto COFINS é custo de estoque.<BR><BR>Informar "S" ou "N".
 * @pw_element string $cIPICusto IPI é custo de estoque.<BR><BR>Informar "S" ou "N".
 * @pw_element string $cFreteCusto Frete é custo de estoque.<BR><BR>Informar "S" ou "N".
 * @pw_element string $cSeguroCusto Seguro é custo de estoque.<BR><BR>Informar "S" ou "N".
 * @pw_element string $cOutrosDespCusto Outras Desp. é custo de estoque.<BR><BR>Informar "S" ou "N".
 * @pw_element decimal $nValorICMSSTCusto Valor do ICMS ST
 * @pw_element decimal $nAliqCredPISCusto % Alíquota de Crédito do PIS
 * @pw_element decimal $nAliqCredCOFINSCusto % Alíquota de Crédito do COFINS
 * @pw_complex itensCustoEstoque
 */
class ItensCustoEstoque{
	/**
	 * ICMS é custo de estoque.<BR><BR>Informar "S" ou "N".
	 *
	 * @var string
	 */
	public string $cICMSCusto;
	/**
	 * PIS é custo de estoque.<BR><BR>Informar "S" ou "N".
	 *
	 * @var string
	 */
	public string $cPISCusto;
	/**
	 * ICMS ST é custo de estoque.<BR><BR>Informar "S" ou "N".
	 *
	 * @var string
	 */
	public string $cICMSSTCusto;
	/**
	 * COFINS é custo de estoque.<BR><BR>Informar "S" ou "N".
	 *
	 * @var string
	 */
	public string $cCOFINSCusto;
	/**
	 * IPI é custo de estoque.<BR><BR>Informar "S" ou "N".
	 *
	 * @var string
	 */
	public string $cIPICusto;
	/**
	 * Frete é custo de estoque.<BR><BR>Informar "S" ou "N".
	 *
	 * @var string
	 */
	public string $cFreteCusto;
	/**
	 * Seguro é custo de estoque.<BR><BR>Informar "S" ou "N".
	 *
	 * @var string
	 */
	public string $cSeguroCusto;
	/**
	 * Outras Desp. é custo de estoque.<BR><BR>Informar "S" ou "N".
	 *
	 * @var string
	 */
	public string $cOutrosDespCusto;
	/**
	 * Valor do ICMS ST
	 *
	 * @var decimal
	 */
	public float $nValorICMSSTCusto;
	/**
	 * % Alíquota de Crédito do PIS
	 *
	 * @var decimal
	 */
	public float $nAliqCredPISCusto;
	/**
	 * % Alíquota de Crédito do COFINS
	 *
	 * @var decimal
	 */
	public float $nAliqCredCOFINSCusto;
}
