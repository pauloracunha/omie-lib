<?php

namespace OmieLib\Produtos\Nfce;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfce\Request\ImportarNfceRequest;
use OmieLib\Produtos\Nfce\Response\ImportarNfceResponse;

/**
 * @service nfceJsonClient
 * @author omie
 */
class NfceJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/nfce/';

	/**
	 * Importa o XML de uma Nota Fiscal do Consumidor Eletrônica.
	 *
	 * @param ImportarNfceRequest $ImportarNfceRequest Importar Nota Fiscal Consumidor Eletrônica (NFC-e).
	 * @return ImportarNfceResponse Resposta da importação de Nota Fiscal Consumidor Eletrônica (NFC-e)
	 */
	public function ImportarNFCe(ImportarNfceRequest $ImportarNfceRequest): ?ImportarNfceResponse {
		$res = $this->_Call('ImportarNFCe',Array(
			$ImportarNfceRequest
		));
		return $this->_Cast($res, ImportarNfceResponse::class);
	}
}
