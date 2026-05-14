<?php

namespace OmieLib\Produtos\Cofinscst;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cofinscst\Request\CofinsCstListarRequest;
use OmieLib\Produtos\Cofinscst\Response\CofinsCstListarResponse;

/**
 * @service cofinsCSTJsonClient
 * @author omie
 */
class CofinsCSTJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/cofinscst/';

	/**
	 * Listar CST do COFINS.
	 *
	 * @param CofinsCstListarRequest $cofinsCstListarRequest Solicitação da listagem de CST do COFINS.
	 * @return CofinsCstListarResponse Resposta da solicitação da listagem de CST do COFINS.
	 */
	public function ListarCstCofins(CofinsCstListarRequest $cofinsCstListarRequest): ?CofinsCstListarResponse {
		$res = $this->_Call('ListarCstCofins',Array(
			$cofinsCstListarRequest
		));
		return $this->_Cast($res, CofinsCstListarResponse::class);
	}
}
