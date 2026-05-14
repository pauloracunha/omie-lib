<?php

namespace OmieLib\Crm\Concorrentes;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Crm\Concorrentes\Request\ConcorrenteListarRequest;
use OmieLib\Crm\Concorrentes\Response\ConcorrenteListarResponse;

/**
 * @service concorrentesJsonClient
 * @author omie
 */
class ConcorrentesJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='crm/concorrentes/';

	/**
	 * Concorrentes da oportunidade.
	 *
	 * @param ConcorrenteListarRequest $concorrenteListarRequest Solicitação da listagem de concorrentes da oportunidade.
	 * @return ConcorrenteListarResponse Resposta da solicitação da listagem de concorrentes da oportunidade.
	 */
	public function ListarConcorrentes(ConcorrenteListarRequest $concorrenteListarRequest): ConcorrenteListarResponse{
		return $this->_Call('ListarConcorrentes',Array(
			$concorrenteListarRequest
		));
	}
}
