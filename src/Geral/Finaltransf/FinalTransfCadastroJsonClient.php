<?php

namespace OmieLib\Geral\Finaltransf;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;

/**
 * @service FinalTransfCadastroJsonClient
 * @author omie
 */
class FinalTransfCadastroJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/finaltransf/';

	/**
	 * Consulta os dados de uma finalidade de transferência específica
	 *
	 * @param Final_transf_list_request_consulta $final_transf_list_request_consulta Requisição para consulta de finalidades de transferências cadastradas
	 * @return Cadastros Cadastro de finalidades de transferências
	 */
	public function ConsultarFinalTransf(Final_transf_list_request_consulta $final_transf_list_request_consulta): ?Cadastros {
		$res = $this->_Call('ConsultarFinalTransf',Array(
			$final_transf_list_request_consulta
		));
		return $this->_Cast($res, Cadastros::class);
	}

	/**
	 * Exibe uma lista com as finalidades de transferências cadastradas
	 *
	 * @param Final_transf_list_request $final_transf_list_request Requisição para listagem as finalidades de transferências cadastradas
	 * @return Final_transf_list_response Resposta da requisição de listagem de finalidades de transferência encontradas no omie.
	 */
	public function ListarFinalTransf(Final_transf_list_request $final_transf_list_request): ?Final_transf_list_response {
		$res = $this->_Call('ListarFinalTransf',Array(
			$final_transf_list_request
		));
		return $this->_Cast($res, Final_transf_list_response::class);
	}
}
