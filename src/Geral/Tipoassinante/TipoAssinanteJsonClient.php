<?php

namespace OmieLib\Geral\Tipoassinante;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Geral\Tipoassinante\Request\TipoAssinanteRequest;
use OmieLib\Geral\Tipoassinante\Response\TipoAssinanteResponse;

/**
 * @service TipoAssinanteJsonClient
 * @author omie
 */
class TipoAssinanteJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/tipoassinante/';

	/**
	 * Lista os tipos de assinante
	 *
	 * @param TipoAssinanteRequest $tipoAssinanteRequest Solicitação da listagem de tipo de assinante (NF modelo 21 e 22).
	 * @return TipoAssinanteResponse Resposta da solicitação de tipo de assinante (NF modelo 21 e 22).
	 */
	public function ListarTipoAssinante(TipoAssinanteRequest $tipoAssinanteRequest): ?TipoAssinanteResponse {
		$res = $this->_Call('ListarTipoAssinante',Array(
			$tipoAssinanteRequest
		));
		return $this->_Cast($res, TipoAssinanteResponse::class);
	}
}
