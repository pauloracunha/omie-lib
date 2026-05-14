<?php

namespace OmieLib\Financas\Resumo\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Resumo\BoletoInfo;
use OmieLib\Financas\Resumo\ContaCorrente;
use OmieLib\Financas\Resumo\ContaPagar;
use OmieLib\Financas\Resumo\ContaPagarAtraso;
use OmieLib\Financas\Resumo\ContaPagarCategoria;
use OmieLib\Financas\Resumo\ContaReceber;
use OmieLib\Financas\Resumo\ContaReceberAtraso;
use OmieLib\Financas\Resumo\ContaReceberCategoria;
use OmieLib\Financas\Resumo\FluxoCaixa;
use OmieLib\Financas\Resumo\ListaAnexos;
use OmieLib\Financas\Resumo\ListaDetalhesFinancas;
use OmieLib\Financas\Resumo\ListaEmEberto;
use OmieLib\Financas\Resumo\PixInfo;
use OmieLib\Financas\Resumo\Request\ObterDetalhesLancamentoRequest;
use OmieLib\Financas\Resumo\Request\ObterListaEmAbertoRequest;
use OmieLib\Financas\Resumo\Request\ObterListaFinancasRequest;
use OmieLib\Financas\Resumo\Request\ObterResumoFinRequest;
use OmieLib\Financas\Resumo\ResumoFinancasJsonClient;

/**
 * Resposta da solicitação do resumo de finanças.
 *
 * @pw_element string $dDia Informe aqui a data de registro para listar os lançamentos.<BR><BR>Default data atual.<BR><BR>Preenchimento opcional.
 * @pw_element contaCorrente $contaCorrente Exibe o total de saldo das contas correntes.
 * @pw_element contaPagar $contaPagar Exibe os totais dos lançamentos a pagar.
 * @pw_element contaReceber $contaReceber Exibe os totais dos lançamentos a receber.
 * @pw_element contaPagarCategoriaArray $contaPagarCategoria Exibe os totais por categoria dos lançamentos a pagar.
 * @pw_element contaReceberCategoriaArray $contaReceberCategoria Exibe os totais por categoria dos lançamentos a receber.
 * @pw_element contaPagarAtrasoArray $contaPagarAtraso Exibe os lançamentos a pagar atrasados.
 * @pw_element contaReceberAtrasoArray $contaReceberAtraso Exibe os lançamentos a receber atrasados.
 * @pw_element fluxoCaixa $fluxoCaixa Exibe as informações de resumo do caixa.
 * @pw_complex ObterResumoFinResponse
 */
class ObterResumoFinResponse{
	/**
	 * Informe aqui a data de registro para listar os lançamentos.<BR><BR>Default data atual.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $dDia;
	/**
	 * Exibe o total de saldo das contas correntes.
	 *
	 * @var ContaCorrente
	 */
	public ContaCorrente $contaCorrente;
	/**
	 * Exibe os totais dos lançamentos a pagar.
	 *
	 * @var ContaPagar
	 */
	public ContaPagar $contaPagar;
	/**
	 * Exibe os totais dos lançamentos a receber.
	 *
	 * @var ContaReceber
	 */
	public ContaReceber $contaReceber;
	/**
	 * Exibe os totais por categoria dos lançamentos a pagar.
	 *
	 * @var ContaPagarCategoria[]
	 */
	public array $contaPagarCategoria;
	/**
	 * Exibe os totais por categoria dos lançamentos a receber.
	 *
	 * @var ContaReceberCategoria[]
	 */
	public array $contaReceberCategoria;
	/**
	 * Exibe os lançamentos a pagar atrasados.
	 *
	 * @var ContaPagarAtraso[]
	 */
	public array $contaPagarAtraso;
	/**
	 * Exibe os lançamentos a receber atrasados.
	 *
	 * @var ContaReceberAtraso[]
	 */
	public array $contaReceberAtraso;
	/**
	 * Exibe as informações de resumo do caixa.
	 *
	 * @var FluxoCaixa
	 */
	public FluxoCaixa $fluxoCaixa;
}
