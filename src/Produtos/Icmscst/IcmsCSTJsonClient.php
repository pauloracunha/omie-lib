<?php

namespace OmieLib\Produtos\Icmscst;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Icmscst\Request\CstListarRequest;
use OmieLib\Produtos\Icmscst\Response\CstListarResponse;

/**
 * @service icmsCSTJsonClient
 * @author omie
 */
class IcmsCSTJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/icmscst/';

	/**
	 * Listar os CSTs do ICMS
	 *
	 * @param CstListarRequest $cstListarRequest Solicitação da listagem de CST do ICMS.
	 * @return CstListarResponse Resposta da solicitação da listagem de CST do ICMS.
	 */
	public function ListarCST(CstListarRequest $cstListarRequest): CstListarResponse{
		return $this->_Call('ListarCST',Array(
			$cstListarRequest
		));
	}
}
