<?php

namespace OmieLib\Servicos\Os;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Os\Request\OsListarRequest;
use OmieLib\Servicos\Os\Request\OsObterRequest;
use OmieLib\Servicos\Os\Request\OsStatusRequest;
use OmieLib\Servicos\Os\Request\OsTrocarEtapaRequest;
use OmieLib\Servicos\Os\Response\OsListarResponse;
use OmieLib\Servicos\Os\Response\OsObterResponse;
use OmieLib\Servicos\Os\Response\OsStatusResponse;
use OmieLib\Servicos\Os\Response\OsTrocarEtapaResponse;

/**
 * @service OrdemServicoJsonClient
 * @author omie
 */
class OrdemServicoJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='servicos/os/';

	/**
	 * Operação para incluir uma Ordem de Serviço
	 *
	 * @param OsCadastro $osCadastro Cadastro de Ordem de Serviços
	 * @return OsStatus Retorno do cadastro da Ordem de Serviço
	 */
	public function IncluirOS(OsCadastro $osCadastro): OsStatus{
		return $this->_Call('IncluirOS',Array(
			$osCadastro
		));
	}

	/**
	 * Operação para alterar uma Ordem de Serviço.
	 *
	 * @param OsCadastro $osCadastro Cadastro de Ordem de Serviços
	 * @return OsStatus Retorno do cadastro da Ordem de Serviço
	 */
	public function AlterarOS(OsCadastro $osCadastro): OsStatus{
		return $this->_Call('AlterarOS',Array(
			$osCadastro
		));
	}

	/**
	 * Operação para excluir uma Ordem de Serviço.
	 *
	 * @param OsChave $osChave Chave de Pesquisa da Ordem de Serviço
	 * @return OsStatus Retorno do cadastro da Ordem de Serviço
	 */
	public function ExcluirOS(OsChave $osChave): OsStatus{
		return $this->_Call('ExcluirOS',Array(
			$osChave
		));
	}

	/**
	 * Consulta da Ordem de Serviço.
	 *
	 * @param OsChave $osChave Chave de Pesquisa da Ordem de Serviço
	 * @return OsCadastro Cadastro de Ordem de Serviços
	 */
	public function ConsultarOS(OsChave $osChave): OsCadastro{
		return $this->_Call('ConsultarOS',Array(
			$osChave
		));
	}

	/**
	 * Lista as Ordens de Serviços.
	 *
	 * @param OsListarRequest $osListarRequest Solicitação de Listagem de Ordens de Serviço
	 * @return OsListarResponse Resposta da listagem de Ordens de Serviço
	 */
	public function ListarOS(OsListarRequest $osListarRequest): OsListarResponse{
		return $this->_Call('ListarOS',Array(
			$osListarRequest
		));
	}

	/**
	 * Retorna o Status da Ordem de Serviço
	 *
	 * @param OsStatusRequest $osStatusRequest Solicitação de Status da Ordem de Serviço
	 * @return OsStatusResponse Resposta da solicitação do Status da Ordem de Serviço
	 */
	public function StatusOS(OsStatusRequest $osStatusRequest): OsStatusResponse{
		return $this->_Call('StatusOS',Array(
			$osStatusRequest
		));
	}

	/**
	 * Troca a Etapa da Ordem de Serviço.
	 *
	 * @param OsTrocarEtapaRequest $osTrocarEtapaRequest Solicitação de troca de etapa da Ordem de Serviço.
	 * @return OsTrocarEtapaResponse Resposta da solicitação de troca de etapa da Ordem de Serviço.
	 */
	public function TrocarEtapaOS(OsTrocarEtapaRequest $osTrocarEtapaRequest): OsTrocarEtapaResponse{
		return $this->_Call('TrocarEtapaOS',Array(
			$osTrocarEtapaRequest
		));
	}
}
