<?php

namespace OmieLib\Crm\Tipostarefa;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Crm\Tipostarefa\Request\TipostarefaAlterarRequest;
use OmieLib\Crm\Tipostarefa\Request\TipostarefaConsultarRequest;
use OmieLib\Crm\Tipostarefa\Request\TipostarefaExcluirRequest;
use OmieLib\Crm\Tipostarefa\Request\TipostarefaIncluirRequest;
use OmieLib\Crm\Tipostarefa\Request\TipostarefaListarRequest;
use OmieLib\Crm\Tipostarefa\Response\TipostarefaAlterarResponse;
use OmieLib\Crm\Tipostarefa\Response\TipostarefaConsultarResponse;
use OmieLib\Crm\Tipostarefa\Response\TipostarefaExcluirResponse;
use OmieLib\Crm\Tipostarefa\Response\TipostarefaIncluirResponse;
use OmieLib\Crm\Tipostarefa\Response\TipostarefaListarResponse;

/**
 * @service TiposTarefaJsonClient
 * @author omie
 */
class TiposTarefaJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='crm/tipostarefa/';

	/**
	 * Alterar tipo de tarefa
	 *
	 * @param TipostarefaAlterarRequest $tipostarefaAlterarRequest Cadastro do tipo de tarefa
	 * @return TipostarefaAlterarResponse Resposta da inclusão do tipo de tarefa
	 */
	public function AlterarTipoTarefa(TipostarefaAlterarRequest $tipostarefaAlterarRequest): ?TipostarefaAlterarResponse {
		$res = $this->_Call('AlterarTipoTarefa',Array(
			$tipostarefaAlterarRequest
		));
		return $this->_Cast($res, TipostarefaAlterarResponse::class);
	}

	/**
	 * Consulta tipo de tarefa
	 *
	 * @param TipostarefaConsultarRequest $tipostarefaConsultarRequest Solicitação da consulta de tipo de tarefa
	 * @return TipostarefaConsultarResponse Cadastro do tipo de tarefa
	 */
	public function ConsultarTipoTarefa(TipostarefaConsultarRequest $tipostarefaConsultarRequest): ?TipostarefaConsultarResponse {
		$res = $this->_Call('ConsultarTipoTarefa',Array(
			$tipostarefaConsultarRequest
		));
		return $this->_Cast($res, TipostarefaConsultarResponse::class);
	}

	/**
	 * Excluir tipo de tarefa
	 *
	 * @param TipostarefaExcluirRequest $tipostarefaExcluirRequest Solicitação da exclusão do tipo de tarefa
	 * @return TipostarefaExcluirResponse Resposta da exclusão do tipo de tarefa
	 */
	public function ExcluirTipoTarefa(TipostarefaExcluirRequest $tipostarefaExcluirRequest): ?TipostarefaExcluirResponse {
		$res = $this->_Call('ExcluirTipoTarefa',Array(
			$tipostarefaExcluirRequest
		));
		return $this->_Cast($res, TipostarefaExcluirResponse::class);
	}

	/**
	 * Lista tipos de tarefa
	 *
	 * @param TipostarefaListarRequest $tipostarefaListarRequest Solicitação da listagem de tipos de tarefa
	 * @return TipostarefaListarResponse Resposta da solicitação da listagem de tipos de tarefas.
	 */
	public function ListarTiposTarefa(TipostarefaListarRequest $tipostarefaListarRequest): ?TipostarefaListarResponse {
		$res = $this->_Call('ListarTiposTarefa',Array(
			$tipostarefaListarRequest
		));
		return $this->_Cast($res, TipostarefaListarResponse::class);
	}

	/**
	 * Incluir tipo de tarefa
	 *
	 * @param TipostarefaIncluirRequest $tipostarefaIncluirRequest Cadastro do tipo de tarefa
	 * @return TipostarefaIncluirResponse Resposta da inclusão do tipo de tarefa
	 */
	public function IncluirTipoTarefa(TipostarefaIncluirRequest $tipostarefaIncluirRequest): ?TipostarefaIncluirResponse {
		$res = $this->_Call('IncluirTipoTarefa',Array(
			$tipostarefaIncluirRequest
		));
		return $this->_Cast($res, TipostarefaIncluirResponse::class);
	}
}
