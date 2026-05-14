<?php

namespace OmieLib\Financas\Contacorrentelancamentos;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccAlterarRequest;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccConsultarRequest;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccExcluirRequest;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccIncluirRequest;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccListarRequest;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccAlterarResponse;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccConsultarResponse;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccExcluirResponse;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccIncluirResponse;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccListarResponse;

/**
 * Cabeçalho do lançamento do conta corrente.
 *
 * @pw_element integer $nCodCC Código da conta corrente.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno da conta corrente cadastrada no Omie.<BR>
 * @pw_element string $dDtLanc Data do lançamento na conta corrente.<BR>No formato dd/mm/aaaa.<BR>
 * @pw_element decimal $nValorLanc Valor do lançamento
 * @pw_complex cabecalho
 */
class Cabecalho{
	/**
	 * Código da conta corrente.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno da conta corrente cadastrada no Omie.<BR>
	 *
	 * @var integer
	 */
	public int $nCodCC;
	/**
	 * Data do lançamento na conta corrente.<BR>No formato dd/mm/aaaa.<BR>
	 *
	 * @var string
	 */
	public string $dDtLanc;
	/**
	 * Valor do lançamento
	 *
	 * @var decimal
	 */
	public float $nValorLanc;
}
