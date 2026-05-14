<?php

namespace OmieLib\Crm\Status;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Crm\Status\Request\StatusListarRequest;
use OmieLib\Crm\Status\Response\StatusListarResponse;

/**
 * @service statusJsonClient
 * @author omie
 */
class StatusJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='crm/status/';

	/**
	 * Status da oportunidade.
	 *
	 * @param StatusListarRequest $statusListarRequest Solicitação da listagem de status da oportunidade.
	 * @return StatusListarResponse Resposta da solicitação da listagem de status da oportunidade.
	 */
	public function ListarStatus(StatusListarRequest $statusListarRequest): ?StatusListarResponse {
		$res = $this->_Call('ListarStatus',Array(
			$statusListarRequest
		));
		return $this->_Cast($res, StatusListarResponse::class);
	}
}
