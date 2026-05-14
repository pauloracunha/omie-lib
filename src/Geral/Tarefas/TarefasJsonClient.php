<?php

namespace OmieLib\Geral\Tarefas;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Geral\Tarefas\Request\AlterarTarefaRequest;
use OmieLib\Geral\Tarefas\Request\ConsultarTarefaRequest;
use OmieLib\Geral\Tarefas\Request\ExcluirTarefaRequest;
use OmieLib\Geral\Tarefas\Request\IncluirTarefaRequest;
use OmieLib\Geral\Tarefas\Request\ListarTarefasRequest;
use OmieLib\Geral\Tarefas\Request\ObterCalendarioTarefasRequest;
use OmieLib\Geral\Tarefas\Request\ObterResumoTarefasRequest;
use OmieLib\Geral\Tarefas\Request\ObterTotalTarefasRequest;
use OmieLib\Geral\Tarefas\Response\AlterarTarefaResponse;
use OmieLib\Geral\Tarefas\Response\ConsultarTarefaResponse;
use OmieLib\Geral\Tarefas\Response\ExcluirTarefaResponse;
use OmieLib\Geral\Tarefas\Response\IncluirTarefaResponse;
use OmieLib\Geral\Tarefas\Response\ListarTarefasResponse;
use OmieLib\Geral\Tarefas\Response\ObterCalendarioTarefasResponse;
use OmieLib\Geral\Tarefas\Response\ObterResumoTarefasResponse;
use OmieLib\Geral\Tarefas\Response\ObterTotalTarefasResponse;

/**
 * @service TarefasJsonClient
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
	public static $_EndPoint='geral/tarefas/';

	/**
	 * Método para realizar a listagem de tarefas cadastradas no ERP.
	 *
	 * @param ListarTarefasRequest $ListarTarefasRequest Solicitação da listagem de tarefas cadastradas.
	 * @return ListarTarefasResponse Resposta da solicitação da listagem de tarefas cadastradas.
	 */
	public function ListarTarefas(ListarTarefasRequest $ListarTarefasRequest): ?ListarTarefasResponse {
		$res = $this->_Call('ListarTarefas',Array(
			$ListarTarefasRequest
		));
		return $this->_Cast($res, ListarTarefasResponse::class);
	}

	/**
	 * Método para realizar a inclusão de uma tarefa.
	 *
	 * @param IncluirTarefaRequest $IncluirTarefaRequest Solicitação de cadastro de tarefa.
	 * @return IncluirTarefaResponse Resposta da solicitação de cadastro de tarefas.
	 */
	public function IncluirTarefa(IncluirTarefaRequest $IncluirTarefaRequest): ?IncluirTarefaResponse {
		$res = $this->_Call('IncluirTarefa',Array(
			$IncluirTarefaRequest
		));
		return $this->_Cast($res, IncluirTarefaResponse::class);
	}

	/**
	 * Método para realizar a alteração de uma tarefa.
	 *
	 * @param AlterarTarefaRequest $AlterarTarefaRequest Solicitação de alteração de uma tarefa.
	 * @return AlterarTarefaResponse Resposta da solicitação de alteração de uma tarefa.
	 */
	public function AlterarTarefa(AlterarTarefaRequest $AlterarTarefaRequest): ?AlterarTarefaResponse {
		$res = $this->_Call('AlterarTarefa',Array(
			$AlterarTarefaRequest
		));
		return $this->_Cast($res, AlterarTarefaResponse::class);
	}

	/**
	 * Método para realizar a exclusão de uma tarefa.
	 *
	 * @param ExcluirTarefaRequest $ExcluirTarefaRequest Solicitação de exclusão de uma tarefa.
	 * @return ExcluirTarefaResponse Resposta da solicitação de exclusão de uma tarefa.
	 */
	public function ExcluirTarefa(ExcluirTarefaRequest $ExcluirTarefaRequest): ?ExcluirTarefaResponse {
		$res = $this->_Call('ExcluirTarefa',Array(
			$ExcluirTarefaRequest
		));
		return $this->_Cast($res, ExcluirTarefaResponse::class);
	}

	/**
	 * Método para realizar a consulta de uma tarefa.
	 *
	 * @param ConsultarTarefaRequest $ConsultarTarefaRequest Solicitação da consulta de uma tarefa.
	 * @return ConsultarTarefaResponse Resposta da solicitação de consulta de uma tarefa.
	 */
	public function ConsultarTarefa(ConsultarTarefaRequest $ConsultarTarefaRequest): ?ConsultarTarefaResponse {
		$res = $this->_Call('ConsultarTarefa',Array(
			$ConsultarTarefaRequest
		));
		return $this->_Cast($res, ConsultarTarefaResponse::class);
	}

	/**
	 * Método para obter o resumo das tarefas.
	 *
	 * @param ObterResumoTarefasRequest $ObterResumoTarefasRequest Solicitação para obter o resumo das tarefas.
	 * @return ObterResumoTarefasResponse Resposta da solicitação do resumo de tarefas.
	 */
	public function ObterResumoTarefas(ObterResumoTarefasRequest $ObterResumoTarefasRequest): ?ObterResumoTarefasResponse {
		$res = $this->_Call('ObterResumoTarefas',Array(
			$ObterResumoTarefasRequest
		));
		return $this->_Cast($res, ObterResumoTarefasResponse::class);
	}

	/**
	 * Método para obter o calendário de tarefas no intervalo informado, retornando o resumo diário de tare
	 *
	 * @param ObterCalendarioTarefasRequest $ObterCalendarioTarefasRequest Solicitação para obter informações do calendário das tarefas.
	 * @return ObterCalendarioTarefasResponse Resposta da solicitação do calendário de tarefas.
	 */
	public function ObterCalendarioTarefas(ObterCalendarioTarefasRequest $ObterCalendarioTarefasRequest): ?ObterCalendarioTarefasResponse {
		$res = $this->_Call('ObterCalendarioTarefas',Array(
			$ObterCalendarioTarefasRequest
		));
		return $this->_Cast($res, ObterCalendarioTarefasResponse::class);
	}

	/**
	 * Método para obter o número de tarefas de acordo com a origem e documento.
	 *
	 * @param ObterTotalTarefasRequest $ObterTotalTarefasRequest Solicitação para obter o número de tarefas por documento e origem.
	 * @return ObterTotalTarefasResponse Resposta da solicitação para obter o número de tarefas por documento e origem.
	 */
	public function ObterTotalTarefas(ObterTotalTarefasRequest $ObterTotalTarefasRequest): ?ObterTotalTarefasResponse {
		$res = $this->_Call('ObterTotalTarefas',Array(
			$ObterTotalTarefasRequest
		));
		return $this->_Cast($res, ObterTotalTarefasResponse::class);
	}
}
