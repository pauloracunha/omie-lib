<?php

namespace OmieLib\Geral\Motivodevolucao;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Geral\Motivodevolucao\Request\ListarMotivoDevolRequest;
use OmieLib\Geral\Motivodevolucao\Response\ListarMotivoDevolResponse;

/**
 * @service MotivoDevolucaoJsonClient
 * @author omie
 */
class MotivoDevolucaoJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/motivodevolucao/';

	/**
	 * Lista os motivos de devolução.
	 *
	 * @param ListarMotivoDevolRequest $ListarMotivoDevolRequest Solicitação da listagem de motivos de devolução.
	 * @return ListarMotivoDevolResponse Resposta da solicitação da listagem de motivos de devolução.
	 */
	public function ListarMotivosDevol(ListarMotivoDevolRequest $ListarMotivoDevolRequest): ListarMotivoDevolResponse{
		return $this->_Call('ListarMotivosDevol',Array(
			$ListarMotivoDevolRequest
		));
	}
}
