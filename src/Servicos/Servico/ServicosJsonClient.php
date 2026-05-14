<?php

namespace OmieLib\Servicos\Servico;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Servico\Request\SrvAssociarRequest;
use OmieLib\Servicos\Servico\Request\SrvConsultarRequest;
use OmieLib\Servicos\Servico\Request\SrvEditarRequest;
use OmieLib\Servicos\Servico\Request\SrvExcluirRequest;
use OmieLib\Servicos\Servico\Request\SrvIncluirRequest;
use OmieLib\Servicos\Servico\Request\SrvListarRequest;
use OmieLib\Servicos\Servico\Request\SrvUpsertRequest;
use OmieLib\Servicos\Servico\Response\SrvAssociarResponse;
use OmieLib\Servicos\Servico\Response\SrvConsultarResponse;
use OmieLib\Servicos\Servico\Response\SrvEditarResponse;
use OmieLib\Servicos\Servico\Response\SrvExcluirResponse;
use OmieLib\Servicos\Servico\Response\SrvIncluirResponse;
use OmieLib\Servicos\Servico\Response\SrvListarResponse;
use OmieLib\Servicos\Servico\Response\SrvUpsertResponse;

/**
 * @service ServicosJsonClient
 * @author omie
 */
class ServicosJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='servicos/servico/';

	/**
	 * Inclusão de serviço.
	 *
	 * @param SrvIncluirRequest $srvIncluirRequest Requisição de inclusão do cadastro do serviço.
	 * @return SrvIncluirResponse Resposta da solicitação de inclusão do cadastro do serviço.
	 */
	public function IncluirCadastroServico(SrvIncluirRequest $srvIncluirRequest): SrvIncluirResponse{
		return $this->_Call('IncluirCadastroServico',Array(
			$srvIncluirRequest
		));
	}

	/**
	 * Alteração de Serviço.
	 *
	 * @param SrvEditarRequest $srvEditarRequest Requisição de alteração do cadastro do serviço.
	 * @return SrvEditarResponse Resposta da solicitação de alteração do cadastro do serviço.
	 */
	public function AlterarCadastroServico(SrvEditarRequest $srvEditarRequest): SrvEditarResponse{
		return $this->_Call('AlterarCadastroServico',Array(
			$srvEditarRequest
		));
	}

	/**
	 * Upsert de serviço.
	 *
	 * @param SrvUpsertRequest $srvUpsertRequest Requisição de upsert do cadastro do serviço.
	 * @return SrvUpsertResponse Resposta da solicitação de upsert do cadastro do serviço.
	 */
	public function UpsertCadastroServico(SrvUpsertRequest $srvUpsertRequest): SrvUpsertResponse{
		return $this->_Call('UpsertCadastroServico',Array(
			$srvUpsertRequest
		));
	}

	/**
	 * Exclusão do cadastro de serviço.
	 *
	 * @param SrvExcluirRequest $srvExcluirRequest Requisição da exclusão do Serviço.
	 * @return SrvExcluirResponse Resposta da solicitação de exclusão do cadastro do serviço.
	 */
	public function ExcluirCadastroServico(SrvExcluirRequest $srvExcluirRequest): SrvExcluirResponse{
		return $this->_Call('ExcluirCadastroServico',Array(
			$srvExcluirRequest
		));
	}

	/**
	 * Consulta do cadastro de serviço.
	 *
	 * @param SrvConsultarRequest $srvConsultarRequest Requisição da consulta do serviço.
	 * @return SrvConsultarResponse Resposta da requisição de consulta de serviços.
	 */
	public function ConsultarCadastroServico(SrvConsultarRequest $srvConsultarRequest): SrvConsultarResponse{
		return $this->_Call('ConsultarCadastroServico',Array(
			$srvConsultarRequest
		));
	}

	/**
	 * Lista os serviços cadastrados.
	 *
	 * @param SrvListarRequest $srvListarRequest Solicitação da listagem de serviços.
	 * @return SrvListarResponse Resposta da solicitação da listagem de serviços.
	 */
	public function ListarCadastroServico(SrvListarRequest $srvListarRequest): SrvListarResponse{
		return $this->_Call('ListarCadastroServico',Array(
			$srvListarRequest
		));
	}

	/**
	 * Associa um Código de Integração a um serviço.
	 *
	 * @param SrvAssociarRequest $srvAssociarRequest Requisição da associação do código de integração do cadastro do serviço.
	 * @return SrvAssociarResponse Resposta da solicitação de associação do código de integração do cadastro do serviço.
	 */
	public function AssociarCodIntServico(SrvAssociarRequest $srvAssociarRequest): SrvAssociarResponse{
		return $this->_Call('AssociarCodIntServico',Array(
			$srvAssociarRequest
		));
	}
}
