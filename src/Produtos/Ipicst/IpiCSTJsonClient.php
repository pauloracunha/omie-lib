<?php

namespace OmieLib\Produtos\Ipicst;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Ipicst\Request\IpiCstListarRequest;
use OmieLib\Produtos\Ipicst\Response\IpiCstListarResponse;

/**
 * @service ipiCSTJsonClient
 * @author omie
 */
class IpiCSTJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/ipicst/';

	/**
	 * Listar CST do IPI.
	 *
	 * @param IpiCstListarRequest $ipiCstListarRequest Solicitação da listagem de CST do IPI.
	 * @return IpiCstListarResponse Resposta da solicitação da listagem de CST do IPI.
	 */
	public function ListarCstIpi(IpiCstListarRequest $ipiCstListarRequest): ?IpiCstListarResponse {
		$res = $this->_Call('ListarCstIpi',Array(
			$ipiCstListarRequest
		));
		return $this->_Cast($res, IpiCstListarResponse::class);
	}
}
