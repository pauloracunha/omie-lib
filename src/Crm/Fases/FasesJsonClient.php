<?php

namespace OmieLib\Crm\Fases;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Crm\Fases\Request\FasesListarRequest;
use OmieLib\Crm\Fases\Response\FasesListarResponse;

/**
 * @service fasesJsonClient
 * @author omie
 */
class FasesJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='crm/fases/';

	/**
	 * Fases da Oportunidade
	 *
	 * @param FasesListarRequest $fasesListarRequest Solicitação da listagem de fases da oportunidades.
	 * @return FasesListarResponse Resposta da solicitação da listagem de fases da oportunidade.
	 */
	public function ListarFases(FasesListarRequest $fasesListarRequest): FasesListarResponse{
		return $this->_Call('ListarFases',Array(
			$fasesListarRequest
		));
	}
}
