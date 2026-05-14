<?php

namespace OmieLib\Produtos\Cfop;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cfop\Request\CfopListarRequest;
use OmieLib\Produtos\Cfop\Response\CfopListarResponse;

/**
 * @service CFOPJsonClient
 * @author omie
 */
class CFOPJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/cfop/';

	/**
	 * Listar as CFOPs
	 *
	 * @param CfopListarRequest $cfopListarRequest Solicitação da listagem de CFOPs.
	 * @return CfopListarResponse Resposta da solicitação da listagem de CFOPs.
	 */
	public function ListarCFOP(CfopListarRequest $cfopListarRequest): ?CfopListarResponse {
		$res = $this->_Call('ListarCFOP',Array(
			$cfopListarRequest
		));
		return $this->_Cast($res, CfopListarResponse::class);
	}
}
