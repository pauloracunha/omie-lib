<?php

namespace OmieLib\Servicos\Listaservico;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Listaservico\Request\SermListarRequest;
use OmieLib\Servicos\Listaservico\Response\SermListarResponse;

/**
 * @service ListaServicoMunicipioJsonClient
 * @author omie
 */
class ListaServicoMunicipioJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='servicos/listaservico/';

	/**
	 * Listar Serviços cadastrados para o município.
	 *
	 * @param SermListarRequest $sermListarRequest Solicitação da Lista de Serviço no Município.
	 * @return SermListarResponse Resposta da solicitação da Lista de Serviço no Município.
	 */
	public function ListarServMunic(SermListarRequest $sermListarRequest): SermListarResponse{
		return $this->_Call('ListarServMunic',Array(
			$sermListarRequest
		));
	}
}
