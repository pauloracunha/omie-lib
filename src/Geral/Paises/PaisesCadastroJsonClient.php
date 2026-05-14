<?php

namespace OmieLib\Geral\Paises;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Geral\Paises\Request\PaisListarRequest;
use OmieLib\Geral\Paises\Response\PaisListarResponse;

/**
 * @service PaisesCadastroJsonClient
 * @author omie
 */
class PaisesCadastroJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/paises/';

	/**
	 * Lista os países.
	 *
	 * @param PaisListarRequest $paisListarRequest Solicitação de Listagem de Paises.
	 * @return PaisListarResponse Resposta da listagem de Paises.
	 */
	public function ListarPaises(PaisListarRequest $paisListarRequest): PaisListarResponse{
		return $this->_Call('ListarPaises',Array(
			$paisListarRequest
		));
	}
}
