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
 * Solicitação da listagem de lançamentos.
 *
 * @pw_element string $dDia Informe aqui a data de registro para listar os lançamentos.<BR><BR>Default data atual.<BR><BR>Preenchimento opcional.
 * @pw_element string $cCodCateg Código da Categoria
 * @pw_element string $cTipo Informe aqui o tipo de Lançamento.<BR><BR>Pode ser:<BR>P - Lançamentos a Pagar.<BR>R - Lançamentos a Receber.<BR><BR>Preenchimento Obrigatório.
 * @pw_complex ObterListaFinancasRequest
 */
class ObterListaFinancasRequest{
	/**
	 * Informe aqui a data de registro para listar os lançamentos.<BR><BR>Default data atual.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $dDia;
	/**
	 * Código da Categoria
	 *
	 * @var string
	 */
	public string $cCodCateg;
	/**
	 * Informe aqui o tipo de Lançamento.<BR><BR>Pode ser:<BR>P - Lançamentos a Pagar.<BR>R - Lançamentos a Receber.<BR><BR>Preenchimento Obrigatório.
	 *
	 * @var string
	 */
	public string $cTipo;
}
