<?php

namespace OmieLib\Crm\Verticais;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Crm\Verticais\Request\VerticalListarRequest;
use OmieLib\Crm\Verticais\Response\VerticalListarResponse;

/**
 * @service verticaisJsonClient
 * @author omie
 */
class VerticaisJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='crm/verticais/';

	/**
	 * Lista as verticais cadastradas.
	 *
	 * @param VerticalListarRequest $verticalListarRequest Solicitação da listagem de verticais da conta/oportunidade.
	 * @return VerticalListarResponse Resposta da solicitação da listagem de verticais da conta/oportunidade.
	 */
	public function ListarVerticais(VerticalListarRequest $verticalListarRequest): ?VerticalListarResponse {
		$res = $this->_Call('ListarVerticais',Array(
			$verticalListarRequest
		));
		return $this->_Cast($res, VerticalListarResponse::class);
	}
}
