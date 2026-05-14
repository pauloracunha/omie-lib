<?php

namespace OmieLib\Crm\Origens;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Crm\Origens\Request\OrigemListarRequest;
use OmieLib\Crm\Origens\Response\OrigemListarResponse;

/**
 * @service origensJsonClient
 * @author omie
 */
class OrigensJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='crm/origens/';

	/**
	 * Origens da oportunidade.
	 *
	 * @param OrigemListarRequest $origemListarRequest Solicitação da listagem de origens da oportunidade.
	 * @return OrigemListarResponse Resposta da solicitação da listagem de origens da oportunidade.
	 */
	public function ListarOrigens(OrigemListarRequest $origemListarRequest): OrigemListarResponse{
		return $this->_Call('ListarOrigens',Array(
			$origemListarRequest
		));
	}
}
