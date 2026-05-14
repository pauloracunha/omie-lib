<?php

namespace OmieLib\Financas\Resumo;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Resumo\Request\ObterDetalhesLancamentoRequest;
use OmieLib\Financas\Resumo\Request\ObterListaEmAbertoRequest;
use OmieLib\Financas\Resumo\Request\ObterListaFinancasRequest;
use OmieLib\Financas\Resumo\Request\ObterResumoFinRequest;
use OmieLib\Financas\Resumo\Response\ObterDetalhesLancamentoResponse;
use OmieLib\Financas\Resumo\Response\ObterListaEmAbertoResponse;
use OmieLib\Financas\Resumo\Response\ObterListaFinancasResponse;
use OmieLib\Financas\Resumo\Response\ObterResumoFinResponse;

/**
 * Exibe o total de saldo das contas correntes.
 *
 * @pw_element decimal $vTotal Valor total.
 * @pw_element decimal $vLimiteCredito Valor total Saldo + Limite de Crédito.
 * @pw_element string $cIcone Unicode do Ícone.
 * @pw_element string $cCor Hexadecimal da cor.
 * @pw_complex contaCorrente
 */
class ContaCorrente{
	/**
	 * Valor total.
	 *
	 * @var decimal
	 */
	public float $vTotal;
	/**
	 * Valor total Saldo + Limite de Crédito.
	 *
	 * @var decimal
	 */
	public float $vLimiteCredito;
	/**
	 * Unicode do Ícone.
	 *
	 * @var string
	 */
	public string $cIcone;
	/**
	 * Hexadecimal da cor.
	 *
	 * @var string
	 */
	public string $cCor;
}
