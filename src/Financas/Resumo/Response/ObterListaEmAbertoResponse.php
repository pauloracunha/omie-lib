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
 * Resposta da solicitação da listagem de lançamentos em aberto.
 *
 * @pw_element ListaEmEberto[] $ListaEmEberto Lista de Lançamentos em aberto.
 * @pw_element integer $nRegistros Número de registros retornados
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nTotPaginas Total de páginas encontradas.
 * @pw_element integer $nTotRegistros Total de registros encontrados.
 * @pw_complex ObterListaEmAbertoResponse
 */
class ObterListaEmAbertoResponse{
	/**
	 * Lista de Lançamentos em aberto.
	 *
	 * @var ListaEmEberto[]
	 */
	public array $ListaEmEberto;
	/**
	 * Número de registros retornados
	 *
	 * @var integer
	 */
	public int $nRegistros;
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Total de páginas encontradas.
	 *
	 * @var integer
	 */
	public int $nTotPaginas;
	/**
	 * Total de registros encontrados.
	 *
	 * @var integer
	 */
	public int $nTotRegistros;
}
