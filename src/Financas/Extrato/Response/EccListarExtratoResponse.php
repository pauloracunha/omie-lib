<?php

namespace OmieLib\Financas\Extrato\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Extrato\ExtratoContaCorrenteJsonClient;
use OmieLib\Financas\Extrato\ListaMovimentos;
use OmieLib\Financas\Extrato\Request\EccListarExtratoRequest;

/**
 * Resposta da solicitação de consulta do Extrato de Conta Corrente.
 *
 * @pw_element integer $nCodCC Código da Conta Corrente.
 * @pw_element string $cCodIntCC Código de Integração da Conta Corrente.
 * @pw_element string $nCodAgencia Código da Agência.
 * @pw_element string $nCodBanco Código do Banco.
 * @pw_element string $nNumConta Número da Conta Corrente.
 * @pw_element string $cDescricao Descrição da Conta Corrente.
 * @pw_element string $cCodTipo Código do Tipo da Conta Corrente.
 * @pw_element string $cDesTipo Descrição do Tipo da Conta Corrente.
 * @pw_element string $cFluxoCaixa Conta Corrente é visível no Fluxo de Caixa (S/N).
 * @pw_element string $cResumoExecutivo Conta Corrente é visível no Resumo Executivo (S/N).
 * @pw_element string $dPeriodoInicial Período Inicial.<BR><BR>Preecher no formato DD/MM/AAAA.
 * @pw_element string $dPeriodoFinal Período final.<BR><BR>Preecher no formato DD/MM/AAAA.
 * @pw_element decimal $nSaldoAnterior Saldo Anterior Realizado.
 * @pw_element decimal $nSaldoAnteriorPrevisto Saldo Anterior Previsto.
 * @pw_element decimal $nSaldoAtual Saldo Atual Realizado disponível para hoje.
 * @pw_element decimal $nSaldoAtualPrevisto Saldo Atual Previsto.
 * @pw_element decimal $nSaldoConciliado Saldo Conciliado até o momento.
 * @pw_element decimal $nSaldoProvisorio Saldo provisório para hoje.
 * @pw_element decimal $nLimiteCreditoTotal Limite de Crédito Total.
 * @pw_element decimal $nSaldoDisponivel Saldo Disponível para hoje.
 * @pw_element listaMovimentosArray $listaMovimentos Lista de movimentos do período.
 * @pw_complex eccListarExtratoResponse
 */
class EccListarExtratoResponse{
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
	 * Código da Agência.
	 *
	 * @var string
	 */
	public string $nCodAgencia;
	/**
	 * Código do Banco.
	 *
	 * @var string
	 */
	public string $nCodBanco;
	/**
	 * Número da Conta Corrente.
	 *
	 * @var string
	 */
	public string $nNumConta;
	/**
	 * Descrição da Conta Corrente.
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Código do Tipo da Conta Corrente.
	 *
	 * @var string
	 */
	public string $cCodTipo;
	/**
	 * Descrição do Tipo da Conta Corrente.
	 *
	 * @var string
	 */
	public string $cDesTipo;
	/**
	 * Conta Corrente é visível no Fluxo de Caixa (S/N).
	 *
	 * @var string
	 */
	public string $cFluxoCaixa;
	/**
	 * Conta Corrente é visível no Resumo Executivo (S/N).
	 *
	 * @var string
	 */
	public string $cResumoExecutivo;
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
	 * Saldo Anterior Realizado.
	 *
	 * @var decimal
	 */
	public float $nSaldoAnterior;
	/**
	 * Saldo Anterior Previsto.
	 *
	 * @var decimal
	 */
	public float $nSaldoAnteriorPrevisto;
	/**
	 * Saldo Atual Realizado disponível para hoje.
	 *
	 * @var decimal
	 */
	public float $nSaldoAtual;
	/**
	 * Saldo Atual Previsto.
	 *
	 * @var decimal
	 */
	public float $nSaldoAtualPrevisto;
	/**
	 * Saldo Conciliado até o momento.
	 *
	 * @var decimal
	 */
	public float $nSaldoConciliado;
	/**
	 * Saldo provisório para hoje.
	 *
	 * @var decimal
	 */
	public float $nSaldoProvisorio;
	/**
	 * Limite de Crédito Total.
	 *
	 * @var decimal
	 */
	public float $nLimiteCreditoTotal;
	/**
	 * Saldo Disponível para hoje.
	 *
	 * @var decimal
	 */
	public float $nSaldoDisponivel;
	/**
	 * Lista de movimentos do período.
	 *
	 * @var ListaMovimentos[]
	 */
	public array $listaMovimentos;
}
