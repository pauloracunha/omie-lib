<?php

namespace OmieLib\Geral\Projetos;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Geral\Projetos\Request\ProjAlterarRequest;
use OmieLib\Geral\Projetos\Request\ProjConsultarRequest;
use OmieLib\Geral\Projetos\Request\ProjExcluirRequest;
use OmieLib\Geral\Projetos\Request\ProjIncluirRequest;
use OmieLib\Geral\Projetos\Request\ProjListarRequest;
use OmieLib\Geral\Projetos\Request\ProjUpsertRequest;
use OmieLib\Geral\Projetos\Response\ProjAlterarResponse;
use OmieLib\Geral\Projetos\Response\ProjConsultarResponse;
use OmieLib\Geral\Projetos\Response\ProjExcluirResponse;
use OmieLib\Geral\Projetos\Response\ProjIncluirResponse;
use OmieLib\Geral\Projetos\Response\ProjListarResponse;
use OmieLib\Geral\Projetos\Response\ProjUpsertResponse;

/**
 * @service ProjetosCadastroJsonClient
 * @author omie
 */
class ProjetosCadastroJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/projetos/';

	/**
	 * Inclui um novo projeto
	 *
	 * @param ProjIncluirRequest $projIncluirRequest Solicitação de Inclusão de um projeto
	 * @return ProjIncluirResponse Resposta da Solicitação de inclusão de um projeto.
	 */
	public function IncluirProjeto(ProjIncluirRequest $projIncluirRequest): ProjIncluirResponse{
		return $this->_Call('IncluirProjeto',Array(
			$projIncluirRequest
		));
	}

	/**
	 * Altera um projeto
	 *
	 * @param ProjAlterarRequest $projAlterarRequest Solicitação de Alteração de um projeto
	 * @return ProjAlterarResponse Resposta da Solicitação de alteração de um projeto.
	 */
	public function AlterarProjeto(ProjAlterarRequest $projAlterarRequest): ProjAlterarResponse{
		return $this->_Call('AlterarProjeto',Array(
			$projAlterarRequest
		));
	}

	/**
	 * Inclui / Altera um projeto.
	 *
	 * @param ProjUpsertRequest $projUpsertRequest Solicitação de Inclusão/Alteração de um projeto
	 * @return ProjUpsertResponse Resposta da Solicitação de inclusão/alteração de um projeto.
	 */
	public function UpsertProjeto(ProjUpsertRequest $projUpsertRequest): ProjUpsertResponse{
		return $this->_Call('UpsertProjeto',Array(
			$projUpsertRequest
		));
	}

	/**
	 * Exclui um projeto
	 *
	 * @param ProjExcluirRequest $projExcluirRequest Solicitação de Exclusão de um projeto.
	 * @return ProjExcluirResponse Resposta da Solicitação de exclusão de um projeto.
	 */
	public function ExcluirProjeto(ProjExcluirRequest $projExcluirRequest): ProjExcluirResponse{
		return $this->_Call('ExcluirProjeto',Array(
			$projExcluirRequest
		));
	}

	/**
	 * Consulta um projeto
	 *
	 * @param ProjConsultarRequest $projConsultarRequest Solicitação da Consulta de projeto
	 * @return ProjConsultarResponse Resposta da Consulta de Projeto
	 */
	public function ConsultarProjeto(ProjConsultarRequest $projConsultarRequest): ProjConsultarResponse{
		return $this->_Call('ConsultarProjeto',Array(
			$projConsultarRequest
		));
	}

	/**
	 * Lista os projetos cadastrados
	 *
	 * @param ProjListarRequest $projListarRequest Solicitação de Listagem de Projetos
	 * @return ProjListarResponse Resposta da listagem de Projetos
	 */
	public function ListarProjetos(ProjListarRequest $projListarRequest): ProjListarResponse{
		return $this->_Call('ListarProjetos',Array(
			$projListarRequest
		));
	}
}
