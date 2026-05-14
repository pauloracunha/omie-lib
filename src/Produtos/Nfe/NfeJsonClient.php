<?php

namespace OmieLib\Produtos\Nfe;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfe\Request\NfeCancelarRequest;
use OmieLib\Produtos\Nfe\Request\NfeExcluirRequest;
use OmieLib\Produtos\Nfe\Request\NfeImportarRequest;
use OmieLib\Produtos\Nfe\Request\NfeListarRequest;
use OmieLib\Produtos\Nfe\Response\NfeCancelarResponse;
use OmieLib\Produtos\Nfe\Response\NfeExcluirResponse;
use OmieLib\Produtos\Nfe\Response\NfeImportarResponse;
use OmieLib\Produtos\Nfe\Response\NfeListarResponse;

/**
 * @service nfeJsonClient
 * @author omie
 */
class NfeJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/nfe/';

	/**
	 * Importa o XML de uma Nota Fiscal Eletrônica.
	 *
	 * @param NfeImportarRequest $nfeImportarRequest Solicitação do Importação de NF-e.
	 * @return NfeImportarResponse Resposta da solicitação da Importação de NF-e.
	 */
	public function ImportarNFe(NfeImportarRequest $nfeImportarRequest): ?NfeImportarResponse {
		$res = $this->_Call('ImportarNFe',Array(
			$nfeImportarRequest
		));
		return $this->_Cast($res, NfeImportarResponse::class);
	}

	/**
	 * Exclui uma NF-e importada via integração.
	 *
	 * @param NfeExcluirRequest $nfeExcluirRequest Solicitação da Exclusão de NF-e.
	 * @return NfeExcluirResponse Resposta da solicitação da Exclusão de NF-e.
	 */
	public function ExcluirNFe(NfeExcluirRequest $nfeExcluirRequest): ?NfeExcluirResponse {
		$res = $this->_Call('ExcluirNFe',Array(
			$nfeExcluirRequest
		));
		return $this->_Cast($res, NfeExcluirResponse::class);
	}

	/**
	 * Lista as NFes importadas.
	 *
	 * @param NfeListarRequest $nfeListarRequest Listagem de NF-es importadas.
	 * @return NfeListarResponse Resposta da solicitação de listagem de NFes importadas.
	 */
	public function ListarNFe(NfeListarRequest $nfeListarRequest): ?NfeListarResponse {
		$res = $this->_Call('ListarNFe',Array(
			$nfeListarRequest
		));
		return $this->_Cast($res, NfeListarResponse::class);
	}

	/**
	 * Importa o XML de cancelamento de uma Nota Fiscal Eletrônica.
	 *
	 * @param NfeCancelarRequest $nfeCancelarRequest Solicitação de Cancelamento da NF-e.
	 * @return NfeCancelarResponse Resposta da solicitação de cancelamento da NF-e.
	 */
	public function ImportarCancNFe(NfeCancelarRequest $nfeCancelarRequest): ?NfeCancelarResponse {
		$res = $this->_Call('ImportarCancNFe',Array(
			$nfeCancelarRequest
		));
		return $this->_Cast($res, NfeCancelarResponse::class);
	}
}
