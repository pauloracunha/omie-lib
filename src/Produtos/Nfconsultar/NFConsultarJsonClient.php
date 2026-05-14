<?php

namespace OmieLib\Produtos\Nfconsultar;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfconsultar\Request\NfListarRequest;
use OmieLib\Produtos\Nfconsultar\Response\NfListarResponse;

/**
 * @service NFConsultarJsonClient
 * @author omie
 */
class NFConsultarJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/nfconsultar/';

	/**
	 * Consulta um Nota Fiscal
	 *
	 * @param NfChave $nfChave Chave de pesquisa da Nota Fiscal&nbsp;
	 * @return NfCadastro Dados da Nota Fiscal&nbsp;
	 */
	public function ConsultarNF(NfChave $nfChave): ?NfCadastro {
		$res = $this->_Call('ConsultarNF',Array(
			$nfChave
		));
		return $this->_Cast($res, NfCadastro::class);
	}

	/**
	 * Listar as Notas Fiscais cadastradas.
	 *
	 * @param NfListarRequest $nfListarRequest Solicitação de Listagem de Notas Fiscais
	 * @return NfListarResponse Resposta da listagem de Notas Fiscais
	 */
	public function ListarNF(NfListarRequest $nfListarRequest): ?NfListarResponse {
		$res = $this->_Call('ListarNF',Array(
			$nfListarRequest
		));
		return $this->_Cast($res, NfListarResponse::class);
	}
}
