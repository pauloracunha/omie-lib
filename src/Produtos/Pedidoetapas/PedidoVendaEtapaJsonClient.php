<?php

namespace OmieLib\Produtos\Pedidoetapas;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedidoetapas\Request\PEtapaListarRequest;
use OmieLib\Produtos\Pedidoetapas\Response\PEtapaListarResponse;

/**
 * @service PedidoVendaEtapaJsonClient
 * @author omie
 */
class PedidoVendaEtapaJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/pedidoetapas/';

	/**
	 * Lista as etapas do Pedido de Venda de Produtos.
	 *
	 * @param PEtapaListarRequest $pEtapaListarRequest Solicitação de listagem de mudanças de etapa do pedido de vendas.
	 * @return PEtapaListarResponse Resposta da listagem de Status do Pedido de Vendas.
	 */
	public function ListarEtapasPedido(PEtapaListarRequest $pEtapaListarRequest): ?PEtapaListarResponse {
		$res = $this->_Call('ListarEtapasPedido',Array(
			$pEtapaListarRequest
		));
		return $this->_Cast($res, PEtapaListarResponse::class);
	}
}
