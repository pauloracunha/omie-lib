<?php

namespace OmieLib\Produtos\Formaspagvendas;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Formaspagvendas\Request\VenparListarRequest;
use OmieLib\Produtos\Formaspagvendas\Response\VenparListarResponse;

/**
 * @service FormasPagVendasJsonClient
 * @author omie
 */
class FormasPagVendasJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/formaspagvendas/';

	/**
	 * Lista as formas de pagmento de vendas.
	 *
	 * @param VenparListarRequest $venparListarRequest Solicitação da listagem de formas de pagamento de vendas.
	 * @return VenparListarResponse Resposta da solicitação de formas de pagamento de vendas.
	 */
	public function ListarFormasPagVendas(VenparListarRequest $venparListarRequest): ?VenparListarResponse {
		$res = $this->_Call('ListarFormasPagVendas',Array(
			$venparListarRequest
		));
		return $this->_Cast($res, VenparListarResponse::class);
	}
}
