<?php

namespace OmieLib\Financas\Resumo;

use OmieLib\Common\AbstractOmieJsonClient;
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
 * @service ResumoFinancasJsonClient
 * @author omie
 */
class ResumoFinancasJsonClient extends AbstractOmieJsonClient {
	/**
	 * The WSDL URI
	 *
	 * @var string
	 */
	
	/**
	 * The PHP SoapClient object
	 *
	 * @var object
	 */
	public static $_Server=null;
	/**
	 * The endpoint URI
	 *
	 * @var string
	 */
	public static $_EndPoint='financas/resumo/';

	/**
	 * Obtem o resumo das finanças.
	 *
	 * @param ObterResumoFinRequest $ObterResumoFinRequest Solicitação do resumo de finanças
	 * @return ObterResumoFinResponse Resposta da solicitação do resumo de finanças.
	 */
	public function ObterResumoFinancas(ObterResumoFinRequest $ObterResumoFinRequest): ObterResumoFinResponse{
		return $this->_Call('ObterResumoFinancas',Array(
			$ObterResumoFinRequest
		));
	}

	/**
	 * Obtem a lista de Lançamentos.
	 *
	 * @param ObterListaFinancasRequest $ObterListaFinancasRequest Solicitação da listagem de lançamentos.
	 * @return ObterListaFinancasResponse Resposta da solicitação da listagem de Lançamentos.
	 */
	public function ObterListaFinancas(ObterListaFinancasRequest $ObterListaFinancasRequest): ObterListaFinancasResponse{
		return $this->_Call('ObterListaFinancas',Array(
			$ObterListaFinancasRequest
		));
	}

	/**
	 * Lista de lançamentos em aberto.
	 *
	 * @param ObterListaEmAbertoRequest $ObterListaEmAbertoRequest Solicitação da listagem de lançamentos em aberto.
	 * @return ObterListaEmAbertoResponse Resposta da solicitação da listagem de lançamentos em aberto.
	 */
	public function ObterListaEmAberto(ObterListaEmAbertoRequest $ObterListaEmAbertoRequest): ObterListaEmAbertoResponse{
		return $this->_Call('ObterListaEmAberto',Array(
			$ObterListaEmAbertoRequest
		));
	}

	/**
	 * Detalhes do lançamento em aberto.
	 *
	 * @param ObterDetalhesLancamentoRequest $ObterDetalhesLancamentoRequest Solicitação dos detalhes de um lançamento em aberto.
	 * @return ObterDetalhesLancamentoResponse Resposta da solicitação dos detalhes de um lançamento em aberto.
	 */
	public function ObterDetalhesLancamento(ObterDetalhesLancamentoRequest $ObterDetalhesLancamentoRequest): ObterDetalhesLancamentoResponse{
		return $this->_Call('ObterDetalhesLancamento',Array(
			$ObterDetalhesLancamentoRequest
		));
	}
}
