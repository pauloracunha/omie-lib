<?php

namespace OmieLib\Crm\Tarefas;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Crm\Tarefas\Request\TarefaAlterarRequest;
use OmieLib\Crm\Tarefas\Request\TarefaConsultarRequest;
use OmieLib\Crm\Tarefas\Request\TarefaEmailListarRequest;
use OmieLib\Crm\Tarefas\Request\TarefaIncluirRequest;
use OmieLib\Crm\Tarefas\Request\TarefaListarRequest;
use OmieLib\Crm\Tarefas\Request\TarefaUpsertRequest;
use OmieLib\Crm\Tarefas\Response\TarefaAlterarResponse;
use OmieLib\Crm\Tarefas\Response\TarefaConsultarResponse;
use OmieLib\Crm\Tarefas\Response\TarefaEmailListarResponse;
use OmieLib\Crm\Tarefas\Response\TarefaExcluirResponse;
use OmieLib\Crm\Tarefas\Response\TarefaIncluirResponse;
use OmieLib\Crm\Tarefas\Response\TarefaListarResponse;
use OmieLib\Crm\Tarefas\Response\TarefaUpsertResponse;

/**
 * @service tarefasJsonClient
 * @author omie
 */
class TarefasJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='crm/tarefas/';

	/**
	 * Inclui uma tarefa na oportunidade.
	 *
	 * @param TarefaIncluirRequest $tarefaIncluirRequest Solicitação de inclusão de tarefa de uma oportunidade.
	 * @return TarefaIncluirResponse Resposta da inclusão da tarefa de uma oportunidade.
	 */
	public function IncluirTarefa(TarefaIncluirRequest $tarefaIncluirRequest): TarefaIncluirResponse{
		return $this->_Call('IncluirTarefa',Array(
			$tarefaIncluirRequest
		));
	}

	/**
	 * Altera uma tarefa.
	 *
	 * @param TarefaAlterarRequest $tarefaAlterarRequest Solicitação de alteração de tarefa de uma oportunidade.
	 * @return TarefaAlterarResponse Resposta da alteração da tarefa de uma oportunidade.
	 */
	public function AlterarTarefa(TarefaAlterarRequest $tarefaAlterarRequest): TarefaAlterarResponse{
		return $this->_Call('AlterarTarefa',Array(
			$tarefaAlterarRequest
		));
	}

	/**
	 * Exclui um tarefa.
	 *
	 * @param TarefaConsultarRequest $tarefaConsultarRequest Solicitação da consulta da tarefa de uma oportunidade.
	 * @return TarefaExcluirResponse Resposta da exclusão da tarefa de uma oportunidade.
	 */
	public function ExcluirTarefa(TarefaConsultarRequest $tarefaConsultarRequest): TarefaExcluirResponse{
		return $this->_Call('ExcluirTarefa',Array(
			$tarefaConsultarRequest
		));
	}

	/**
	 * Inclusão / alteração de uma tarefa.
	 *
	 * @param TarefaUpsertRequest $tarefaUpsertRequest Solicitação de inclusão/alteração de tarefa de uma oportunidade.
	 * @return TarefaUpsertResponse Resposta da inclusão/alteração da tarefa de uma oportunidade.
	 */
	public function UpsertTarefa(TarefaUpsertRequest $tarefaUpsertRequest): TarefaUpsertResponse{
		return $this->_Call('UpsertTarefa',Array(
			$tarefaUpsertRequest
		));
	}

	/**
	 * Consulta uma tarefa da oportunidade.
	 *
	 * @param TarefaConsultarRequest $tarefaConsultarRequest Solicitação da consulta da tarefa de uma oportunidade.
	 * @return TarefaConsultarResponse Resposta da solicitação de consulta de tarefa de uma oportunidade.
	 */
	public function ConsultarTarefa(TarefaConsultarRequest $tarefaConsultarRequest): TarefaConsultarResponse{
		return $this->_Call('ConsultarTarefa',Array(
			$tarefaConsultarRequest
		));
	}

	/**
	 * Tarefas da oportunidade.
	 *
	 * @param TarefaListarRequest $tarefaListarRequest Solicitação da listagem de tarefas da oportunidade.
	 * @return TarefaListarResponse Resposta da solicitação da listagem de tarefas da oportunidade.
	 */
	public function ListarTarefas(TarefaListarRequest $tarefaListarRequest): TarefaListarResponse{
		return $this->_Call('ListarTarefas',Array(
			$tarefaListarRequest
		));
	}

	/**
	 * Lista os  emails tarefas.
	 *
	 * @param TarefaEmailListarRequest $tarefaEmailListarRequest Solicitação da listagem de emails "tarefas" da oportunidade.
	 * @return TarefaEmailListarResponse Resposta da solicitação da listagem de emails "tarefas" da oportunidade.
	 */
	public function ListarEmailsTarefas(TarefaEmailListarRequest $tarefaEmailListarRequest): TarefaEmailListarResponse{
		return $this->_Call('ListarEmailsTarefas',Array(
			$tarefaEmailListarRequest
		));
	}

	/**
	 * Obtém o Calendário de Tarefas no Formato (ICS)
	 *
	 * @param Tarefa_ics_request $tarefa_ics_request Request Calendar Events (ICS)
	 * @return Tarefa_ics_response Response Calendar Events (ICS)
	 */
	public function CalendarioTarefas(Tarefa_ics_request $tarefa_ics_request): Tarefa_ics_response{
		return $this->_Call('CalendarioTarefas',Array(
			$tarefa_ics_request
		));
	}
}
