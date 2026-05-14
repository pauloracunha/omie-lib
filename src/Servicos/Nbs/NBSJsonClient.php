<?php

namespace OmieLib\Servicos\Nbs;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Nbs\Request\NbsListarRequest;
use OmieLib\Servicos\Nbs\Response\NbsListarResponse;

/**
 * @service NBSJsonClient
 * @author omie
 */
class NBSJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='servicos/nbs/';

	/**
	 * Listagem de NBS (Nomenclatura Brasileira de Serviços).
	 *
	 * @param NbsListarRequest $nbsListarRequest Solicitação da listagem de NBS.
	 * @return NbsListarResponse Resposta da solicitação da listagem de NBS.
	 */
	public function ListarNBS(NbsListarRequest $nbsListarRequest): ?NbsListarResponse {
		$res = $this->_Call('ListarNBS',Array(
			$nbsListarRequest
		));
		return $this->_Cast($res, NbsListarResponse::class);
	}
}
