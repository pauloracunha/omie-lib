<?php

namespace OmieLib\Financas\Extrato\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Extrato\ExtratoContaCorrenteJsonClient;
use OmieLib\Financas\Extrato\ListaMovimentos;
use OmieLib\Financas\Extrato\Response\EccListarExtratoResponse;

/**
 * Solicitação de consulta do Extrato de Conta Corrente.
 *
 * @pw_element integer $nCodCC Código da Conta Corrente.
 * @pw_element string $cCodIntCC Código de Integração da Conta Corrente.
 * @pw_element string $dPeriodoInicial Período Inicial.<BR><BR>Preecher no formato DD/MM/AAAA.
 * @pw_element string $dPeriodoFinal Período final.<BR><BR>Preecher no formato DD/MM/AAAA.
 * @pw_element string $cExibirApenasSaldo Exibe apenas os saldos da Conta Corrente.
 * @pw_complex eccListarExtratoRequest
 */
class EccListarExtratoRequest{
	/**
	 * Código da Conta Corrente.
	 *
	 * @var integer
	 */
	public int $nCodCC;
	/**
	 * Código de Integração da Conta Corrente.
	 *
	 * @var string
	 */
	public string $cCodIntCC;
	/**
	 * Período Inicial.<BR><BR>Preecher no formato DD/MM/AAAA.
	 *
	 * @var string
	 */
	public string $dPeriodoInicial;
	/**
	 * Período final.<BR><BR>Preecher no formato DD/MM/AAAA.
	 *
	 * @var string
	 */
	public string $dPeriodoFinal;
	/**
	 * Exibe apenas os saldos da Conta Corrente.
	 *
	 * @var string
	 */
	public string $cExibirApenasSaldo;
}
