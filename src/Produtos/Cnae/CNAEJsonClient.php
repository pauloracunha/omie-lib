<?php

namespace OmieLib\Produtos\Cnae;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cnae\Request\CnaeListarRequest;
use OmieLib\Produtos\Cnae\Response\CnaeListarResponse;

/**
 * @service CNAEJsonClient
 * @author omie
 */
class CNAEJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/cnae/';

	/**
	 * Listar os CNAEs cadastrados
	 *
	 * @param CnaeListarRequest $cnaeListarRequest Solicitação da listagem de CNAEs.
	 * @return CnaeListarResponse Resposta da solicitação da listagem de CNAEs.
	 */
	public function ListarCNAE(CnaeListarRequest $cnaeListarRequest): ?CnaeListarResponse {
		$res = $this->_Call('ListarCNAE',Array(
			$cnaeListarRequest
		));
		return $this->_Cast($res, CnaeListarResponse::class);
	}
}
