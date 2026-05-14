<?php

namespace OmieLib\Produtos\Cest;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cest\Request\CestListarRequest;
use OmieLib\Produtos\Cest\Response\CestListarResponse;

/**
 * @service CESTJsonClient
 * @author omie
 */
class CESTJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/cest/';

	/**
	 * Listar CEST.
	 *
	 * @param CestListarRequest $cestListarRequest Solicitação da listagem de CEST.
	 * @return CestListarResponse Resposta da solicitação da listagem do CEST.
	 */
	public function ListarCEST(CestListarRequest $cestListarRequest): CestListarResponse{
		return $this->_Call('ListarCEST',Array(
			$cestListarRequest
		));
	}
}
