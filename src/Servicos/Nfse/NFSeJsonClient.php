<?php

namespace OmieLib\Servicos\Nfse;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Nfse\Request\NfseListarRequest;
use OmieLib\Servicos\Nfse\Response\NfseListarResponse;

/**
 * @service NFSeJsonClient
 * @author omie
 */
class NFSeJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='servicos/nfse/';

	/**
	 * Lista de NFS-es.
	 *
	 * @param NfseListarRequest $nfseListarRequest Solicitação de listagem de NFS-es emitidas.
	 * @return NfseListarResponse Resposta da solicitação de listagem de NFS-es emitidas.
	 */
	public function ListarNFSEs(NfseListarRequest $nfseListarRequest): ?NfseListarResponse {
		$res = $this->_Call('ListarNFSEs',Array(
			$nfseListarRequest
		));
		return $this->_Cast($res, NfseListarResponse::class);
	}
}
