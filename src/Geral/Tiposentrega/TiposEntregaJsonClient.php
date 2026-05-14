<?php

namespace OmieLib\Geral\Tiposentrega;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Geral\Tiposentrega\Request\TeAlterarRequest;
use OmieLib\Geral\Tiposentrega\Request\TeConsultarRequest;
use OmieLib\Geral\Tiposentrega\Request\TeExcluirRequest;
use OmieLib\Geral\Tiposentrega\Request\TeIncluirRequest;
use OmieLib\Geral\Tiposentrega\Request\TeListarRequest;
use OmieLib\Geral\Tiposentrega\Response\TeAlterarResponse;
use OmieLib\Geral\Tiposentrega\Response\TeConsultarResponse;
use OmieLib\Geral\Tiposentrega\Response\TeExcluirResponse;
use OmieLib\Geral\Tiposentrega\Response\TeIncluirResponse;
use OmieLib\Geral\Tiposentrega\Response\TeListarResponse;

/**
 * @service TiposEntregaJsonClient
 * @author omie
 */
class TiposEntregaJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/tiposentrega/';

	/**
	 * Incluir tipo de entrega
	 *
	 * @param TeIncluirRequest $teIncluirRequest Requisição de inclusão de tipo de entrega
	 * @return TeIncluirResponse Resposta da solicitação de inclusão de tipo de entrega
	 */
	public function IncluirTipoEntrega(TeIncluirRequest $teIncluirRequest): TeIncluirResponse{
		return $this->_Call('IncluirTipoEntrega',Array(
			$teIncluirRequest
		));
	}

	/**
	 * Alterar tipo de entrega
	 *
	 * @param TeAlterarRequest $teAlterarRequest Requisição de alteração de tipo de entrega
	 * @return TeAlterarResponse Resposta da solicitação de alteração de tipo de entrega
	 */
	public function AlterarTipoEntrega(TeAlterarRequest $teAlterarRequest): TeAlterarResponse{
		return $this->_Call('AlterarTipoEntrega',Array(
			$teAlterarRequest
		));
	}

	/**
	 * Excluir tipo de entrega
	 *
	 * @param TeExcluirRequest $teExcluirRequest Requisição de exclusão de tipo de entrega
	 * @return TeExcluirResponse Resposta da solicitação de exclusão de tipo de entrega
	 */
	public function ExcluirTipoEntrega(TeExcluirRequest $teExcluirRequest): TeExcluirResponse{
		return $this->_Call('ExcluirTipoEntrega',Array(
			$teExcluirRequest
		));
	}

	/**
	 * Consultar tipo de entrega
	 *
	 * @param TeConsultarRequest $teConsultarRequest Requisição de consulta de tipo de entrega
	 * @return TeConsultarResponse Resposta da consulta de tipo de entrega
	 */
	public function ConsultarTipoEntrega(TeConsultarRequest $teConsultarRequest): TeConsultarResponse{
		return $this->_Call('ConsultarTipoEntrega',Array(
			$teConsultarRequest
		));
	}

	/**
	 * Listar tipo de entrega
	 *
	 * @param TeListarRequest $teListarRequest Requisição de listagem de tipos de entrega
	 * @return TeListarResponse Resposta da solicitação de listagem de tipos de entrega
	 */
	public function ListarTipoEntrega(TeListarRequest $teListarRequest): TeListarResponse{
		return $this->_Call('ListarTipoEntrega',Array(
			$teListarRequest
		));
	}
}
