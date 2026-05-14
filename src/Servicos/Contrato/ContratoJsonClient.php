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
	public function IncluirContrato(ContratoCadastro $contratoCadastro): CsStatus{
		return $this->_Call('IncluirContrato',Array(
			$contratoCadastro
		));
	}

	/**
	 * Alterar um Contrato
	 *
	 * @param ContratoCadastro $contratoCadastro Cadastro de Contrato de Serviço
	 * @return CsStatus Retorno do cadastro de Contrato de Serviços
	 */
	public function AlterarContrato(ContratoCadastro $contratoCadastro): CsStatus{
		return $this->_Call('AlterarContrato',Array(
			$contratoCadastro
		));
	}

	/**
	 * Inclui / Altera um contrato
	 *
	 * @param ContratoCadastro $contratoCadastro Cadastro de Contrato de Serviço
	 * @return CsStatus Retorno do cadastro de Contrato de Serviços
	 */
	public function UpsertContrato(ContratoCadastro $contratoCadastro): CsStatus{
		return $this->_Call('UpsertContrato',Array(
			$contratoCadastro
		));
	}

	/**
	 * Consulta o Contrato de Serviço
	 *
	 * @param CsConsultarRequest $csConsultarRequest Solicitação da Consulta de Contrato de Serviço
	 * @return CsConsultarResponse Resposta da Consulta de Contrato de Serviço
	 */
	public function ConsultarContrato(CsConsultarRequest $csConsultarRequest): CsConsultarResponse{
		return $this->_Call('ConsultarContrato',Array(
			$csConsultarRequest
		));
	}

	/**
	 * Lista os contratos cadastrados.
	 *
	 * @param CsListarRequest $csListarRequest Solicitação de Listagem de Contratos de Serviço
	 * @return CsListarResponse Resposta da listagem de Contratos de Serviços
	 */
	public function ListarContratos(CsListarRequest $csListarRequest): CsListarResponse{
		return $this->_Call('ListarContratos',Array(
			$csListarRequest
		));
	}

	/**
	 * Exclui itens do contrato de serviços.
	 *
	 * @param CsExcluirItemRequest $csExcluirItemRequest Solicitação da Exclusão de itens do Contrato de Serviço
	 * @return CsExcluirItemResponse Resposta da solicitação de cancelamento de itens do contrato de serviços.
	 */
	public function ExcluirItem(CsExcluirItemRequest $csExcluirItemRequest): CsExcluirItemResponse{
		return $this->_Call('ExcluirItem',Array(
			$csExcluirItemRequest
		));
	}
}
