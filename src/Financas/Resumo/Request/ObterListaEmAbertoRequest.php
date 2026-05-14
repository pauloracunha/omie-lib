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
 * Solicitação da listagem de lançamentos em aberto.
 *
 * @pw_element string $dDia Informe aqui a data de registro para listar os lançamentos.<BR><BR>Default data atual.<BR><BR>Preenchimento opcional.
 * @pw_element string $cTipo Informe aqui o tipo de Lançamento.<BR><BR>Pode ser:<BR>P - Lançamentos a Pagar.<BR>R - Lançamentos a Receber.<BR><BR>Preenchimento Obrigatório.
 * @pw_element integer $nCodCliente Código de Cliente / Fornecedor
 * @pw_element string $cNomeCliente Nome do Cliente/Fornecedor.
 * @pw_element integer $nRegPorPagina Número da página que será listada.
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_complex ObterListaEmAbertoRequest
 */
class ObterListaEmAbertoRequest{
	/**
	 * Informe aqui a data de registro para listar os lançamentos.<BR><BR>Default data atual.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $dDia;
	/**
	 * Informe aqui o tipo de Lançamento.<BR><BR>Pode ser:<BR>P - Lançamentos a Pagar.<BR>R - Lançamentos a Receber.<BR><BR>Preenchimento Obrigatório.
	 *
	 * @var string
	 */
	public string $cTipo;
	/**
	 * Código de Cliente / Fornecedor
	 *
	 * @var integer
	 */
	public int $nCodCliente;
	/**
	 * Nome do Cliente/Fornecedor.
	 *
	 * @var string
	 */
	public string $cNomeCliente;
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $nRegPorPagina;
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $nPagina;
}
