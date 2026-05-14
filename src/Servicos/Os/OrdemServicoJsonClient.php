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
	public function IncluirOS(OsCadastro $osCadastro): ?OsStatus {
		$res = $this->_Call('IncluirOS',Array(
			$osCadastro
		));
		return $this->_Cast($res, OsStatus::class);
	}

	/**
	 * Operação para alterar uma Ordem de Serviço.
	 *
	 * @param OsCadastro $osCadastro Cadastro de Ordem de Serviços
	 * @return OsStatus Retorno do cadastro da Ordem de Serviço
	 */
	public function AlterarOS(OsCadastro $osCadastro): ?OsStatus {
		$res = $this->_Call('AlterarOS',Array(
			$osCadastro
		));
		return $this->_Cast($res, OsStatus::class);
	}

	/**
	 * Operação para excluir uma Ordem de Serviço.
	 *
	 * @param OsChave $osChave Chave de Pesquisa da Ordem de Serviço
	 * @return OsStatus Retorno do cadastro da Ordem de Serviço
	 */
	public function ExcluirOS(OsChave $osChave): ?OsStatus {
		$res = $this->_Call('ExcluirOS',Array(
			$osChave
		));
		return $this->_Cast($res, OsStatus::class);
	}

	/**
	 * Consulta da Ordem de Serviço.
	 *
	 * @param OsChave $osChave Chave de Pesquisa da Ordem de Serviço
	 * @return OsCadastro Cadastro de Ordem de Serviços
	 */
	public function ConsultarOS(OsChave $osChave): ?OsCadastro {
		$res = $this->_Call('ConsultarOS',Array(
			$osChave
		));
		return $this->_Cast($res, OsCadastro::class);
	}

	/**
	 * Lista as Ordens de Serviços.
	 *
	 * @param OsListarRequest $osListarRequest Solicitação de Listagem de Ordens de Serviço
	 * @return OsListarResponse Resposta da listagem de Ordens de Serviço
	 */
	public function ListarOS(OsListarRequest $osListarRequest): ?OsListarResponse {
		$res = $this->_Call('ListarOS',Array(
			$osListarRequest
		));
		return $this->_Cast($res, OsListarResponse::class);
	}

	/**
	 * Retorna o Status da Ordem de Serviço
	 *
	 * @param OsStatusRequest $osStatusRequest Solicitação de Status da Ordem de Serviço
	 * @return OsStatusResponse Resposta da solicitação do Status da Ordem de Serviço
	 */
	public function StatusOS(OsStatusRequest $osStatusRequest): ?OsStatusResponse {
		$res = $this->_Call('StatusOS',Array(
			$osStatusRequest
		));
		return $this->_Cast($res, OsStatusResponse::class);
	}

	/**
	 * Troca a Etapa da Ordem de Serviço.
	 *
	 * @param OsTrocarEtapaRequest $osTrocarEtapaRequest Solicitação de troca de etapa da Ordem de Serviço.
	 * @return OsTrocarEtapaResponse Resposta da solicitação de troca de etapa da Ordem de Serviço.
	 */
	public function TrocarEtapaOS(OsTrocarEtapaRequest $osTrocarEtapaRequest): ?OsTrocarEtapaResponse {
		$res = $this->_Call('TrocarEtapaOS',Array(
			$osTrocarEtapaRequest
		));
		return $this->_Cast($res, OsTrocarEtapaResponse::class);
	}
}
