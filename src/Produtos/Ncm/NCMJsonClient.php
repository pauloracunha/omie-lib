<?php

namespace OmieLib\Produtos\Ncm;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Ncm\Request\NcmConsultarRequest;
use OmieLib\Produtos\Ncm\Request\NcmListarRequest;
use OmieLib\Produtos\Ncm\Response\NcmConsultarResponse;
use OmieLib\Produtos\Ncm\Response\NcmListarResponse;

/**
 * @service NCMJsonClient
 * @author omie
 */
class NCMJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/ncm/';

	/**
	 * Consulta um NCM
	 *
	 * @param NcmConsultarRequest $ncmConsultarRequest Consulta um NCM.
	 * @return NcmConsultarResponse Resposta da solicitação de consulta de um NCM.
	 */
	public function ConsultarNCM(NcmConsultarRequest $ncmConsultarRequest): NcmConsultarResponse{
		return $this->_Call('ConsultarNCM',Array(
			$ncmConsultarRequest
		));
	}

	/**
	 * Lista os NCMs cadastrados.
	 *
	 * @param NcmListarRequest $ncmListarRequest Listagem de NCM.
	 * @return NcmListarResponse Resposta da solicitação de listagem de NCM.
	 */
	public function ListarNCM(NcmListarRequest $ncmListarRequest): NcmListarResponse{
		return $this->_Call('ListarNCM',Array(
			$ncmListarRequest
		));
	}
}
