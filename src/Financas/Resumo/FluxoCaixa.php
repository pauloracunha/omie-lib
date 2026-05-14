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
 * Exibe as informações de resumo do caixa.
 *
 * @pw_element string $dDia Informe aqui a data de registro para listar os lançamentos.<BR><BR>Default data atual.<BR><BR>Preenchimento opcional.
 * @pw_element decimal $vPagar Valor total de títulos a pagar.
 * @pw_element decimal $vReceber Valor total de títulos a receber.
 * @pw_element decimal $vSaldo Valor total do saldo bancário.
 * @pw_complex fluxoCaixa
 */
class FluxoCaixa{
	/**
	 * Informe aqui a data de registro para listar os lançamentos.<BR><BR>Default data atual.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $dDia;
	/**
	 * Valor total de títulos a pagar.
	 *
	 * @var decimal
	 */
	public float $vPagar;
	/**
	 * Valor total de títulos a receber.
	 *
	 * @var decimal
	 */
	public float $vReceber;
	/**
	 * Valor total do saldo bancário.
	 *
	 * @var decimal
	 */
	public float $vSaldo;
}
