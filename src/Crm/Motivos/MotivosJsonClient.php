<?php

namespace OmieLib\Crm\Motivos;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Crm\Motivos\Request\MotivoListarRequest;
use OmieLib\Crm\Motivos\Response\MotivoListarResponse;

/**
 * @service motivosJsonClient
 * @author omie
 */
class MotivosJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='crm/motivos/';

	/**
	 * Motivos da oportunidade.
	 *
	 * @param MotivoListarRequest $motivoListarRequest Solicitação da listagem de motivos da oportunidade.
	 * @return MotivoListarResponse Resposta da solicitação da listagem de motivos da oportunidade.
	 */
	public function ListarMotivos(MotivoListarRequest $motivoListarRequest): ?MotivoListarResponse {
		$res = $this->_Call('ListarMotivos',Array(
			$motivoListarRequest
		));
		return $this->_Cast($res, MotivoListarResponse::class);
	}
}
