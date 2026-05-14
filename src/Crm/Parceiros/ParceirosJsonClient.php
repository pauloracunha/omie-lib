<?php

namespace OmieLib\Crm\Parceiros;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Crm\Parceiros\Request\ParceiroListarRequest;
use OmieLib\Crm\Parceiros\Response\ParceiroListarResponse;

/**
 * @service parceirosJsonClient
 * @author omie
 */
class ParceirosJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='crm/parceiros/';

	/**
	 * Parceiros e equipes da oportunidade.
	 *
	 * @param ParceiroListarRequest $parceiroListarRequest Solicitação da listagem de parceiros e equipes da oportunidade.
	 * @return ParceiroListarResponse Resposta da solicitação da listagem de parceiros e equipes da oportunidade.
	 */
	public function ListarParceiros(ParceiroListarRequest $parceiroListarRequest): ParceiroListarResponse{
		return $this->_Call('ListarParceiros',Array(
			$parceiroListarRequest
		));
	}
}
