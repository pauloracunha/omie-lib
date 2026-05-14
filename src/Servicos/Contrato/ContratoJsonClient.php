<?php

namespace OmieLib\Servicos\Contrato;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contrato\Request\CsConsultarRequest;
use OmieLib\Servicos\Contrato\Request\CsExcluirItemRequest;
use OmieLib\Servicos\Contrato\Request\CsListarRequest;
use OmieLib\Servicos\Contrato\Response\CsConsultarResponse;
use OmieLib\Servicos\Contrato\Response\CsExcluirItemResponse;
use OmieLib\Servicos\Contrato\Response\CsListarResponse;

/**
 * @service ContratoJsonClient
 * @author omie
 */
class ContratoJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='servicos/contrato/';

	/**
	 * Inclusão de Contrato
	 *
	 * @param ContratoCadastro $contratoCadastro Cadastro de Contrato de Serviço
	 * @return CsStatus Retorno do cadastro de Contrato de Serviços
	 */
	public function IncluirContrato(ContratoCadastro $contratoCadastro): ?CsStatus {
		$res = $this->_Call('IncluirContrato',Array(
			$contratoCadastro
		));
		return $this->_Cast($res, CsStatus::class);
	}

	/**
	 * Alterar um Contrato
	 *
	 * @param ContratoCadastro $contratoCadastro Cadastro de Contrato de Serviço
	 * @return CsStatus Retorno do cadastro de Contrato de Serviços
	 */
	public function AlterarContrato(ContratoCadastro $contratoCadastro): ?CsStatus {
		$res = $this->_Call('AlterarContrato',Array(
			$contratoCadastro
		));
		return $this->_Cast($res, CsStatus::class);
	}

	/**
	 * Inclui / Altera um contrato
	 *
	 * @param ContratoCadastro $contratoCadastro Cadastro de Contrato de Serviço
	 * @return CsStatus Retorno do cadastro de Contrato de Serviços
	 */
	public function UpsertContrato(ContratoCadastro $contratoCadastro): ?CsStatus {
		$res = $this->_Call('UpsertContrato',Array(
			$contratoCadastro
		));
		return $this->_Cast($res, CsStatus::class);
	}

	/**
	 * Consulta o Contrato de Serviço
	 *
	 * @param CsConsultarRequest $csConsultarRequest Solicitação da Consulta de Contrato de Serviço
	 * @return CsConsultarResponse Resposta da Consulta de Contrato de Serviço
	 */
	public function ConsultarContrato(CsConsultarRequest $csConsultarRequest): ?CsConsultarResponse {
		$res = $this->_Call('ConsultarContrato',Array(
			$csConsultarRequest
		));
		return $this->_Cast($res, CsConsultarResponse::class);
	}

	/**
	 * Lista os contratos cadastrados.
	 *
	 * @param CsListarRequest $csListarRequest Solicitação de Listagem de Contratos de Serviço
	 * @return CsListarResponse Resposta da listagem de Contratos de Serviços
	 */
	public function ListarContratos(CsListarRequest $csListarRequest): ?CsListarResponse {
		$res = $this->_Call('ListarContratos',Array(
			$csListarRequest
		));
		return $this->_Cast($res, CsListarResponse::class);
	}

	/**
	 * Exclui itens do contrato de serviços.
	 *
	 * @param CsExcluirItemRequest $csExcluirItemRequest Solicitação da Exclusão de itens do Contrato de Serviço
	 * @return CsExcluirItemResponse Resposta da solicitação de cancelamento de itens do contrato de serviços.
	 */
	public function ExcluirItem(CsExcluirItemRequest $csExcluirItemRequest): ?CsExcluirItemResponse {
		$res = $this->_Call('ExcluirItem',Array(
			$csExcluirItemRequest
		));
		return $this->_Cast($res, CsExcluirItemResponse::class);
	}
}
