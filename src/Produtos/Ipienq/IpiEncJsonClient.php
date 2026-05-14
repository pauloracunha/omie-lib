<?php

namespace OmieLib\Produtos\Ipienq;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Ipienq\Request\IpiEnqListarRequest;
use OmieLib\Produtos\Ipienq\Response\IpiEnqListarResponse;

/**
 * @service ipiEncJsonClient
 * @author omie
 */
class IpiEncJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/ipienq/';

	/**
	 * Listar Enquadramento do IPI.
	 *
	 * @param IpiEnqListarRequest $ipiEnqListarRequest Solicitação da listagem de Enquadramento do IPI.
	 * @return IpiEnqListarResponse Resposta da solicitação da listagem do Enquadramento do IPI.
	 */
	public function ListarEnqIpi(IpiEnqListarRequest $ipiEnqListarRequest): ?IpiEnqListarResponse {
		$res = $this->_Call('ListarEnqIpi',Array(
			$ipiEnqListarRequest
		));
		return $this->_Cast($res, IpiEnqListarResponse::class);
	}
}
