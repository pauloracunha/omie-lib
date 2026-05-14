<?php

namespace OmieLib\Crm\Tipos;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Crm\Tipos\Request\TipoListarRequest;
use OmieLib\Crm\Tipos\Response\TipoListarResponse;

/**
 * @service tiposJsonClient
 * @author omie
 */
class TiposJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='crm/tipos/';

	/**
	 * Tipos de oportunidades.
	 *
	 * @param TipoListarRequest $tipoListarRequest Solicitação da listagem de tipos da oportunidade.
	 * @return TipoListarResponse Resposta da solicitação da listagem de tipos da oportunidade.
	 */
	public function ListarTipos(TipoListarRequest $tipoListarRequest): TipoListarResponse{
		return $this->_Call('ListarTipos',Array(
			$tipoListarRequest
		));
	}
}
