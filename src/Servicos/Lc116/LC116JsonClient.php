<?php

namespace OmieLib\Servicos\Lc116;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Lc116\Request\Lc116ListarRequest;
use OmieLib\Servicos\Lc116\Response\Lc116ListarResponse;

/**
 * @service LC116JsonClient
 * @author omie
 */
class LC116JsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='servicos/lc116/';

	/**
	 * Listar Serviços da LC116.
	 *
	 * @param Lc116ListarRequest $lc116ListarRequest Solicitação da listagem da Lista de serviços anexa à Lei Complementar nº 116, de 31 de julho de 2003
	 * @return Lc116ListarResponse Resposta da solicitação da Lista de serviços anexa à Lei Complementar nº 116, de 31 de julho de 2003.
	 */
	public function ListarLC116(Lc116ListarRequest $lc116ListarRequest): ?Lc116ListarResponse {
		$res = $this->_Call('ListarLC116',Array(
			$lc116ListarRequest
		));
		return $this->_Cast($res, Lc116ListarResponse::class);
	}
}
