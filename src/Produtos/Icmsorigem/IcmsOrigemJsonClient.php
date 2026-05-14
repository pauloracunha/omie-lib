<?php

namespace OmieLib\Produtos\Icmsorigem;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Icmsorigem\Request\OrigMercListarRequest;
use OmieLib\Produtos\Icmsorigem\Response\OrigMercListarResponse;

/**
 * @service icmsOrigemJsonClient
 * @author omie
 */
class IcmsOrigemJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/icmsorigem/';

	/**
	 * Listar a origem da mercadoria do ICMS.
	 *
	 * @param OrigMercListarRequest $origMercListarRequest Solicitação da listagem da Origem da Mercadoria do ICMS.
	 * @return OrigMercListarResponse Resposta da solicitação da listagem da Origem da Mercadoria do ICMS.
	 */
	public function ListarOrigMerc(OrigMercListarRequest $origMercListarRequest): ?OrigMercListarResponse {
		$res = $this->_Call('ListarOrigMerc',Array(
			$origMercListarRequest
		));
		return $this->_Cast($res, OrigMercListarResponse::class);
	}
}
