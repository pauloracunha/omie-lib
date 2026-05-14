<?php

namespace OmieLib\Produtos\Pedidovenda;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedidovenda\Request\AdicionarPedidoRequest;
use OmieLib\Produtos\Pedidovenda\Request\AlterarItemPedidoRequest;
use OmieLib\Produtos\Pedidovenda\Request\ExcluirItemPedidoRequest;
use OmieLib\Produtos\Pedidovenda\Request\ExcluirItensPedidoRequest;
use OmieLib\Produtos\Pedidovenda\Request\IncluirItemPedidoRequest;
use OmieLib\Produtos\Pedidovenda\Request\TotalizarPedidoRequest;
use OmieLib\Produtos\Pedidovenda\Response\AdicionarPedidoResponse;
use OmieLib\Produtos\Pedidovenda\Response\AlterarItemPedidoResponse;
use OmieLib\Produtos\Pedidovenda\Response\ExcluirItemPedidoResponse;
use OmieLib\Produtos\Pedidovenda\Response\ExcluirItensPedidoResponse;
use OmieLib\Produtos\Pedidovenda\Response\IncluirItemPedidoResponse;
use OmieLib\Produtos\Pedidovenda\Response\TotalizarPedidoResponse;

/**
 * @service PedidoVendaJsonClient
 * @author omie
 */
class PedidoVendaJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/pedidovenda/';

	/**
	 * Inclui um item no pedido de venda.
	 *
	 * @param IncluirItemPedidoRequest $incluirItemPedidoRequest Solicitação da inclusão de um Item no Pedido de Venda.
	 * @return IncluirItemPedidoResponse Resposta da solicitação de inclusão um Item no Pedido de Venda.
	 */
	public function IncluirItemPedido(IncluirItemPedidoRequest $incluirItemPedidoRequest): IncluirItemPedidoResponse{
		return $this->_Call('IncluirItemPedido',Array(
			$incluirItemPedidoRequest
		));
	}

	/**
	 * Altera um item no pedido de venda.
	 *
	 * @param AlterarItemPedidoRequest $alterarItemPedidoRequest Solicitação de Alteração de um item no Pedido de Venda
	 * @return AlterarItemPedidoResponse Resposta da solicitação de alteração de um Item no Pedido de Venda.
	 */
	public function AlterarItemPedido(AlterarItemPedidoRequest $alterarItemPedidoRequest): AlterarItemPedidoResponse{
		return $this->_Call('AlterarItemPedido',Array(
			$alterarItemPedidoRequest
		));
	}

	/**
	 * Exclui um item no pedido de venda.
	 *
	 * @param ExcluirItemPedidoRequest $excluirItemPedidoRequest Solicitação de Exclusão de um item no Pedido de Venda.
	 * @return ExcluirItemPedidoResponse Resposta da solicitação de exclusão no Pedido de Venda.
	 */
	public function ExcluirItemPedido(ExcluirItemPedidoRequest $excluirItemPedidoRequest): ExcluirItemPedidoResponse{
		return $this->_Call('ExcluirItemPedido',Array(
			$excluirItemPedidoRequest
		));
	}

	/**
	 * Exclui todos os itens do pedido de venda.
	 *
	 * @param ExcluirItensPedidoRequest $excluirItensPedidoRequest Solicitação de Exclusão de todos os itens no Pedido de Venda.
	 * @return ExcluirItensPedidoResponse Resposta da solicitação de exclusão de todos os itens no Pedido de Venda.
	 */
	public function ExcluirItensPedido(ExcluirItensPedidoRequest $excluirItensPedidoRequest): ExcluirItensPedidoResponse{
		return $this->_Call('ExcluirItensPedido',Array(
			$excluirItensPedidoRequest
		));
	}

	/**
	 * Recalcula os totais do pedido de venda.
	 *
	 * @param TotalizarPedidoRequest $totalizarPedidoRequest Realiza a totalização do pedido de venda.
	 * @return TotalizarPedidoResponse Resposta da totalização do pedido de venda.
	 */
	public function TotalizarPedido(TotalizarPedidoRequest $totalizarPedidoRequest): TotalizarPedidoResponse{
		return $this->_Call('TotalizarPedido',Array(
			$totalizarPedidoRequest
		));
	}

	/**
	 * Inclusão do Pedido de Venda
	 *
	 * @param AdicionarPedidoRequest $AdicionarPedidoRequest Estrutura para Inclusão de Pedido de Venda
	 * @return AdicionarPedidoResponse Resposta da solicitação de inclusão do Pedido de Venda.
	 */
	public function AdicionarPedido(AdicionarPedidoRequest $AdicionarPedidoRequest): AdicionarPedidoResponse{
		return $this->_Call('AdicionarPedido',Array(
			$AdicionarPedidoRequest
		));
	}
}
