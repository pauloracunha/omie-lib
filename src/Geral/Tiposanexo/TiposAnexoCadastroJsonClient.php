<?php

namespace OmieLib\Geral\Tiposanexo;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Geral\Tiposanexo\Request\ListarTipoAnexoRequest;
use OmieLib\Geral\Tiposanexo\Response\ListarTipoAnexoResponse;

/**
 * @service TiposAnexoCadastroJsonClient
 * @author omie
 */
class TiposAnexoCadastroJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/tiposanexo/';

	/**
	 * Listagem de tipos de anexos.
	 *
	 * @param ListarTipoAnexoRequest $ListarTipoAnexoRequest Listar Tipos de Anexos
	 * @return ListarTipoAnexoResponse Listar de tipos de documentos anexos.
	 */
	public function ListarTiposAnexos(ListarTipoAnexoRequest $ListarTipoAnexoRequest): ?ListarTipoAnexoResponse {
		$res = $this->_Call('ListarTiposAnexos',Array(
			$ListarTipoAnexoRequest
		));
		return $this->_Cast($res, ListarTipoAnexoResponse::class);
	}
}
