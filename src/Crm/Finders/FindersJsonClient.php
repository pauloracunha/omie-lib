<?php

namespace OmieLib\Crm\Finders;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Crm\Finders\Request\FinderListarRequest;
use OmieLib\Crm\Finders\Response\FinderListarResponse;

/**
 * @service findersJsonClient
 * @author omie
 */
class FindersJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='crm/finders/';

	/**
	 * Finders da oportunidade.
	 *
	 * @param FinderListarRequest $finderListarRequest Solicitação da listagem de finders da oportunidade.
	 * @return FinderListarResponse Resposta da solicitação da listagem de finders da oportunidade.
	 */
	public function ListarFinders(FinderListarRequest $finderListarRequest): ?FinderListarResponse {
		$res = $this->_Call('ListarFinders',Array(
			$finderListarRequest
		));
		return $this->_Cast($res, FinderListarResponse::class);
	}
}
