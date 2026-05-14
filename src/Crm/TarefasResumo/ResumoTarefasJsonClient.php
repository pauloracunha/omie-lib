<?php

namespace OmieLib\Crm\TarefasResumo;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Crm\TarefasResumo\Request\ObterDetalhesTarefasRequest;
use OmieLib\Crm\TarefasResumo\Request\ObterListaTarefasRequest;
use OmieLib\Crm\TarefasResumo\Request\ObterResumoTarefasRequest;
use OmieLib\Crm\TarefasResumo\Response\ObterDetalhesTarefasResponse;
use OmieLib\Crm\TarefasResumo\Response\ObterListaTarefasResponse;
use OmieLib\Crm\TarefasResumo\Response\ObterResumoTarefasResponse;

/**
 * @service ResumoTarefasJsonClient
 * @author omie
 */
class ResumoTarefasJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='crm/tarefas-resumo/';

	/**
	 * Resumos das tarefas do CRM.
	 *
	 * @param ObterResumoTarefasRequest $obterResumoTarefasRequest Solicitação do resumo das tarefas do CRM.
	 * @return ObterResumoTarefasResponse Resposta da solicitação das tarefas do CRM.
	 */
	public function ObterResumoTarefas(ObterResumoTarefasRequest $obterResumoTarefasRequest): ?ObterResumoTarefasResponse {
		$res = $this->_Call('ObterResumoTarefas',Array(
			$obterResumoTarefasRequest
		));
		return $this->_Cast($res, ObterResumoTarefasResponse::class);
	}

	/**
	 * Solicitação da listagem de detalhes das tarefas.
	 *
	 * @param ObterListaTarefasRequest $ObterListaTarefasRequest Solicitação da listagem do resumo das tarefas do CRM.
	 * @return ObterListaTarefasResponse Resposta da solicitação da listagem do resumo das tarefas do CRM
	 */
	public function ObterListaTarefas(ObterListaTarefasRequest $ObterListaTarefasRequest): ?ObterListaTarefasResponse {
		$res = $this->_Call('ObterListaTarefas',Array(
			$ObterListaTarefasRequest
		));
		return $this->_Cast($res, ObterListaTarefasResponse::class);
	}

	/**
	 * Consulta os detalhes de uma tafera.
	 *
	 * @param ObterDetalhesTarefasRequest $ObterDetalhesTarefasRequest Consulta os detalhes de uma tafera.
	 * @return ObterDetalhesTarefasResponse Resposta da consulta de detalhes de uma tarefa.
	 */
	public function ObterDetalhesTarefa(ObterDetalhesTarefasRequest $ObterDetalhesTarefasRequest): ?ObterDetalhesTarefasResponse {
		$res = $this->_Call('ObterDetalhesTarefa',Array(
			$ObterDetalhesTarefasRequest
		));
		return $this->_Cast($res, ObterDetalhesTarefasResponse::class);
	}
}
