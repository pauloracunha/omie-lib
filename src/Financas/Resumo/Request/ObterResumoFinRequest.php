<?php

namespace OmieLib\Financas\Resumo\Request;

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
use OmieLib\Financas\Resumo\Response\ObterDetalhesLancamentoResponse;
use OmieLib\Financas\Resumo\Response\ObterListaEmAbertoResponse;
use OmieLib\Financas\Resumo\Response\ObterListaFinancasResponse;
use OmieLib\Financas\Resumo\Response\ObterResumoFinResponse;
use OmieLib\Financas\Resumo\ResumoFinancasJsonClient;

/**
 * Solicitação do resumo de finanças
 *
 * @pw_element string $dDia Informe aqui a data de registro para listar os lançamentos.<BR><BR>Default data atual.<BR><BR>Preenchimento opcional.
 * @pw_element boolean $lApenasResumo Exibir apenas o resumo.<BR><BR>Quando true será retornado as estruturas:<BR><BR>contaCorrente<BR>contaPagar<BR>contaReceber<BR><BR>Quando false retornará todas as estruturas.<BR><BR>Default = true
 * @pw_element boolean $lExibirCategoria Exibir os valores dos lançamentos por categoria.<BR><BR>Quando true será retornado as estruturas:<BR><BR>contaPagarCategoria<BR>contaReceberCategoria<BR><BR>Default = true
 * @pw_complex ObterResumoFinRequest
 */
class ObterResumoFinRequest{
	/**
	 * Informe aqui a data de registro para listar os lançamentos.<BR><BR>Default data atual.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $dDia;
	/**
	 * Exibir apenas o resumo.<BR><BR>Quando true será retornado as estruturas:<BR><BR>contaCorrente<BR>contaPagar<BR>contaReceber<BR><BR>Quando false retornará todas as estruturas.<BR><BR>Default = true
	 *
	 * @var boolean
	 */
	public bool $lApenasResumo;
	/**
	 * Exibir os valores dos lançamentos por categoria.<BR><BR>Quando true será retornado as estruturas:<BR><BR>contaPagarCategoria<BR>contaReceberCategoria<BR><BR>Default = true
	 *
	 * @var boolean
	 */
	public bool $lExibirCategoria;
}
