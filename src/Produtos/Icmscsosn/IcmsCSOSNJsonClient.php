<?php

namespace OmieLib\Produtos\Icmscsosn;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Icmscsosn\Request\CsosnListarRequest;
use OmieLib\Produtos\Icmscsosn\Response\CsosnListarResponse;

/**
 * @service icmsCSOSNJsonClient
 * @author omie
 */
class IcmsCSOSNJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/icmscsosn/';

	/**
	 * Listar os CSOSN do ICMS.
	 *
	 * @param CsosnListarRequest $csosnListarRequest Solicitação da listagem de CSOSN do ICMS.
	 * @return CsosnListarResponse Resposta da solicitação da listagem de CSOSN do ICMS.
	 */
	public function ListarCSOSN(CsosnListarRequest $csosnListarRequest): CsosnListarResponse{
		return $this->_Call('ListarCSOSN',Array(
			$csosnListarRequest
		));
	}
}
