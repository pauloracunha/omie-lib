<?php

namespace OmieLib\Geral\Origempedido;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;

/**
 * @service OrigemPedidoJsonClient
 * @author omie
 */
class OrigemPedidoJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/origempedido/';

	/**
	 * Lista Origem de pedidos.
	 *
	 * @param Origem_ped_listar_request $origem_ped_listar_request Solicitação da listagem de origens de pedido.
	 * @return Origem_ped_listar_response Resposta da solicitação da listagem de origens de pedido.
	 */
	public function ListarOrigem(Origem_ped_listar_request $origem_ped_listar_request): Origem_ped_listar_response{
		return $this->_Call('ListarOrigem',Array(
			$origem_ped_listar_request
		));
	}
}
