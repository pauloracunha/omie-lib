<?php

namespace OmieLib\Produtos\Pedidocompra;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;

/**
 * @service PedidoCompraJsonClient
 * @author omie
 */
class PedidoCompraJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/pedidocompra/';

	/**
	 * Incluir um Pedido de Compra
	 *
	 * @param Com_pedido_incluir_request $com_pedido_incluir_request Incluir um Pedido de Compra
	 * @return Com_pedido_incluir_response Resposta da Inclusão de um Pedido de Compra
	 */
	public function IncluirPedCompra(Com_pedido_incluir_request $com_pedido_incluir_request): ?Com_pedido_incluir_response {
		$res = $this->_Call('IncluirPedCompra',Array(
			$com_pedido_incluir_request
		));
		return $this->_Cast($res, Com_pedido_incluir_response::class);
	}

	/**
	 * Alterar as Informações de um Pedido de Compra
	 *
	 * @param Com_pedido_alterar_request $com_pedido_alterar_request Alterar um Pedido de Compra
	 * @return Com_pedido_alterar_response Resposta da Alteração de um Pedido de Compra
	 */
	public function AlteraPedCompra(Com_pedido_alterar_request $com_pedido_alterar_request): ?Com_pedido_alterar_response {
		$res = $this->_Call('AlteraPedCompra',Array(
			$com_pedido_alterar_request
		));
		return $this->_Cast($res, Com_pedido_alterar_response::class);
	}

	/**
	 * Excluir um Pedido de Compra
	 *
	 * @param Com_pedido_excluir_request $com_pedido_excluir_request Excluir um Pedido de Compra
	 * @return Com_pedido_excluir_response Resposta da Exclusão de um Pedido de Compra
	 */
	public function ExcluirPedCompra(Com_pedido_excluir_request $com_pedido_excluir_request): ?Com_pedido_excluir_response {
		$res = $this->_Call('ExcluirPedCompra',Array(
			$com_pedido_excluir_request
		));
		return $this->_Cast($res, Com_pedido_excluir_response::class);
	}

	/**
	 * Upsert (inclusão ou alteração) de um Pedido de Compra
	 *
	 * @param Com_pedido_upsert_request $com_pedido_upsert_request Upsert (inclusão ou alteração) de um Pedido de Compra
	 * @return Com_pedido_upsert_response Resposta do Upsert de um Pedido de Compra
	 */
	public function UpsertPedCompra(Com_pedido_upsert_request $com_pedido_upsert_request): ?Com_pedido_upsert_response {
		$res = $this->_Call('UpsertPedCompra',Array(
			$com_pedido_upsert_request
		));
		return $this->_Cast($res, Com_pedido_upsert_response::class);
	}

	/**
	 * Consultar as Informações de um Pedido de Compra.
	 *
	 * @param Com_pedido_consultar_request $com_pedido_consultar_request Consultar um Pedido de Compra
	 * @return Pedidos_pesquisa Lista com os pedidos de compra
	 */
	public function ConsultarPedCompra(Com_pedido_consultar_request $com_pedido_consultar_request): ?Pedidos_pesquisa {
		$res = $this->_Call('ConsultarPedCompra',Array(
			$com_pedido_consultar_request
		));
		return $this->_Cast($res, Pedidos_pesquisa::class);
	}

	/**
	 * Pesquisar por Pedidos de Compra em determinada condição
	 *
	 * @param Com_pedido_pesquisar_request $com_pedido_pesquisar_request Pesquisar de Pedidos de Compra
	 * @return Com_pedido_pesquisar_response Resposta da Pesquisa de Pedidos de Compra
	 */
	public function PesquisarPedCompra(Com_pedido_pesquisar_request $com_pedido_pesquisar_request): ?Com_pedido_pesquisar_response {
		$res = $this->_Call('PesquisarPedCompra',Array(
			$com_pedido_pesquisar_request
		));
		return $this->_Cast($res, Com_pedido_pesquisar_response::class);
	}
}
