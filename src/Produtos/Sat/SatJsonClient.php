<?php

namespace OmieLib\Produtos\Sat;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Sat\Request\ImportarSatRequest;
use OmieLib\Produtos\Sat\Response\ImportarSatResponse;

/**
 * @service satJsonClient
 * @author omie
 */
class SatJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/sat/';

	/**
	 * Importa o XML de um CF-e SAT.
	 *
	 * @param ImportarSatRequest $ImportarSatRequest Importar CF-e SAT.
	 * @return ImportarSatResponse Resposta da importação de CF-e SAT.
	 */
	public function ImportarCfeSat(ImportarSatRequest $ImportarSatRequest): ImportarSatResponse{
		return $this->_Call('ImportarCfeSat',Array(
			$ImportarSatRequest
		));
	}
}
