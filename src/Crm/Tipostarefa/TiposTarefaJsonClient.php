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
	public function AlterarTipoTarefa(TipostarefaAlterarRequest $tipostarefaAlterarRequest): TipostarefaAlterarResponse{
		return $this->_Call('AlterarTipoTarefa',Array(
			$tipostarefaAlterarRequest
		));
	}

	/**
	 * Consulta tipo de tarefa
	 *
	 * @param TipostarefaConsultarRequest $tipostarefaConsultarRequest Solicitação da consulta de tipo de tarefa
	 * @return TipostarefaConsultarResponse Cadastro do tipo de tarefa
	 */
	public function ConsultarTipoTarefa(TipostarefaConsultarRequest $tipostarefaConsultarRequest): TipostarefaConsultarResponse{
		return $this->_Call('ConsultarTipoTarefa',Array(
			$tipostarefaConsultarRequest
		));
	}

	/**
	 * Excluir tipo de tarefa
	 *
	 * @param TipostarefaExcluirRequest $tipostarefaExcluirRequest Solicitação da exclusão do tipo de tarefa
	 * @return TipostarefaExcluirResponse Resposta da exclusão do tipo de tarefa
	 */
	public function ExcluirTipoTarefa(TipostarefaExcluirRequest $tipostarefaExcluirRequest): TipostarefaExcluirResponse{
		return $this->_Call('ExcluirTipoTarefa',Array(
			$tipostarefaExcluirRequest
		));
	}

	/**
	 * Lista tipos de tarefa
	 *
	 * @param TipostarefaListarRequest $tipostarefaListarRequest Solicitação da listagem de tipos de tarefa
	 * @return TipostarefaListarResponse Resposta da solicitação da listagem de tipos de tarefas.
	 */
	public function ListarTiposTarefa(TipostarefaListarRequest $tipostarefaListarRequest): TipostarefaListarResponse{
		return $this->_Call('ListarTiposTarefa',Array(
			$tipostarefaListarRequest
		));
	}

	/**
	 * Incluir tipo de tarefa
	 *
	 * @param TipostarefaIncluirRequest $tipostarefaIncluirRequest Cadastro do tipo de tarefa
	 * @return TipostarefaIncluirResponse Resposta da inclusão do tipo de tarefa
	 */
	public function IncluirTipoTarefa(TipostarefaIncluirRequest $tipostarefaIncluirRequest): TipostarefaIncluirResponse{
		return $this->_Call('IncluirTipoTarefa',Array(
			$tipostarefaIncluirRequest
		));
	}
}
