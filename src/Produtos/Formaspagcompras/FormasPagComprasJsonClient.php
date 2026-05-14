<?php

namespace OmieLib\Produtos\Formaspagcompras;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Formaspagcompras\Request\ComparListarRequest;
use OmieLib\Produtos\Formaspagcompras\Response\ComparListarResponse;

/**
 * @service FormasPagComprasJsonClient
 * @author omie
 */
class FormasPagComprasJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/formaspagcompras/';

	/**
	 * Listar formas de Pagamento de Compras.
	 *
	 * @param ComparListarRequest $comparListarRequest Solicitação da listagem de formas de pagamento de compras.
	 * @return ComparListarResponse Resposta da solicitação de formas de pagamento de compras.
	 */
	public function ListarFormasPagCompras(ComparListarRequest $comparListarRequest): ComparListarResponse{
		return $this->_Call('ListarFormasPagCompras',Array(
			$comparListarRequest
		));
	}
}
