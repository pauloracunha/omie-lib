<?php

namespace OmieLib\Produtos\Piscst;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Piscst\Request\PisCstListarRequest;
use OmieLib\Produtos\Piscst\Response\PisCstListarResponse;

/**
 * @service pisCSTJsonClient
 * @author omie
 */
class PisCSTJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/piscst/';

	/**
	 * Listar o CST do PIS.
	 *
	 * @param PisCstListarRequest $pisCstListarRequest Solicitação da listagem de CST do PIS.
	 * @return PisCstListarResponse Resposta da solicitação da listagem de CST do PIS.
	 */
	public function ListarCstPis(PisCstListarRequest $pisCstListarRequest): ?PisCstListarResponse {
		$res = $this->_Call('ListarCstPis',Array(
			$pisCstListarRequest
		));
		return $this->_Cast($res, PisCstListarResponse::class);
	}
}
