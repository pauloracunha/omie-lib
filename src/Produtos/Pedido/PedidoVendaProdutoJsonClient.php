<?php

namespace OmieLib\Produtos\Pedido;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedido\Request\PvpAlterarPedFatRequest;
use OmieLib\Produtos\Pedido\Request\PvpConsultarRequest;
use OmieLib\Produtos\Pedido\Request\PvpDevolverRequest;
use OmieLib\Produtos\Pedido\Request\PvpExcluirRequest;
use OmieLib\Produtos\Pedido\Request\PvpListarRequest;
use OmieLib\Produtos\Pedido\Request\PvpSimularImpRequest;
use OmieLib\Produtos\Pedido\Request\PvpStatusRequest;
use OmieLib\Produtos\Pedido\Request\PvpTrocarEtapaRequest;
use OmieLib\Produtos\Pedido\Response\PvpAlterarPedFatResponse;
use OmieLib\Produtos\Pedido\Response\PvpConsultarResponse;
use OmieLib\Produtos\Pedido\Response\PvpDevolverResponse;
use OmieLib\Produtos\Pedido\Response\PvpExcluirResponse;
use OmieLib\Produtos\Pedido\Response\PvpListarResponse;
use OmieLib\Produtos\Pedido\Response\PvpSimularImpResponse;
use OmieLib\Produtos\Pedido\Response\PvpStatusResponse;
use OmieLib\Produtos\Pedido\Response\PvpTrocarEtapaResponse;

/**
 * @service PedidoVendaProdutoJsonClient
 * @author omie
 */
class PedidoVendaProdutoJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/pedido/';

	/**
	 * Inclui um pedido de venda de produto
	 *
	 * @param Pedido_venda_produto $pedido_venda_produto Estrutura do Pedido de Vendas de Produtos.<BR>Preenchimento Obrigatório.
	 * @return Pedido_venda_produto_response Resposta da Inclusão de Pedido de Venda de Produtos.&nbsp;
	 */
	public function IncluirPedido(Pedido_venda_produto $pedido_venda_produto): ?Pedido_venda_produto_response {
		$res = $this->_Call('IncluirPedido',Array(
			$pedido_venda_produto
		));
		return $this->_Cast($res, Pedido_venda_produto_response::class);
	}

	/**
	 * Alteração do Pedido de Venda
	 *
	 * @param Pedido_venda_produto $pedido_venda_produto Estrutura do Pedido de Vendas de Produtos.<BR>Preenchimento Obrigatório.
	 * @return Pedido_venda_produto_response Resposta da Inclusão de Pedido de Venda de Produtos.&nbsp;
	 */
	public function AlterarPedidoVenda(Pedido_venda_produto $pedido_venda_produto): ?Pedido_venda_produto_response {
		$res = $this->_Call('AlterarPedidoVenda',Array(
			$pedido_venda_produto
		));
		return $this->_Cast($res, Pedido_venda_produto_response::class);
	}

	/**
	 * Consulta de Pedido de Venda de Produto
	 *
	 * @param PvpConsultarRequest $pvpConsultarRequest Solicitação de consulta de pedido de venda.
	 * @return PvpConsultarResponse Resposta da solicitação de consulta de pedido de venda.
	 */
	public function ConsultarPedido(PvpConsultarRequest $pvpConsultarRequest): ?PvpConsultarResponse {
		$res = $this->_Call('ConsultarPedido',Array(
			$pvpConsultarRequest
		));
		return $this->_Cast($res, PvpConsultarResponse::class);
	}

	/**
	 * Listar os pedidos de venda de produto
	 *
	 * @param PvpListarRequest $pvpListarRequest Solicitação de listagem de pedidos de venda.
	 * @return PvpListarResponse Resposta da solicitação de listagem de pedidos de venda.
	 */
	public function ListarPedidos(PvpListarRequest $pvpListarRequest): ?PvpListarResponse {
		$res = $this->_Call('ListarPedidos',Array(
			$pvpListarRequest
		));
		return $this->_Cast($res, PvpListarResponse::class);
	}

	/**
	 * Excluir pedido de venda de produto
	 *
	 * @param PvpExcluirRequest $pvpExcluirRequest Solicitação de exclusão do Pedido de Venda.
	 * @return PvpExcluirResponse Resposta da solicitação de exclusão do Pedido de Venda.
	 */
	public function ExcluirPedido(PvpExcluirRequest $pvpExcluirRequest): ?PvpExcluirResponse {
		$res = $this->_Call('ExcluirPedido',Array(
			$pvpExcluirRequest
		));
		return $this->_Cast($res, PvpExcluirResponse::class);
	}

	/**
	 * Consulta do Status do Pedido
	 *
	 * @param PvpStatusRequest $pvpStatusRequest Solicitação de consulta do Status do Pedido de Venda.
	 * @return PvpStatusResponse Resposta da solicitação de consulta do Status do Pedido de Venda.
	 */
	public function StatusPedido(PvpStatusRequest $pvpStatusRequest): ?PvpStatusResponse {
		$res = $this->_Call('StatusPedido',Array(
			$pvpStatusRequest
		));
		return $this->_Cast($res, PvpStatusResponse::class);
	}

	/**
	 * Troca etapa do pedido.
	 *
	 * @param PvpTrocarEtapaRequest $pvpTrocarEtapaRequest Solicitação de troca de etapa do Pedido de Venda.
	 * @return PvpTrocarEtapaResponse Resposta da solicitação de troca de etapa do Pedido de Venda.
	 */
	public function TrocarEtapaPedido(PvpTrocarEtapaRequest $pvpTrocarEtapaRequest): ?PvpTrocarEtapaResponse {
		$res = $this->_Call('TrocarEtapaPedido',Array(
			$pvpTrocarEtapaRequest
		));
		return $this->_Cast($res, PvpTrocarEtapaResponse::class);
	}

	/**
	 * Alteração dos dados de um pedido faturado.
	 *
	 * @param PvpAlterarPedFatRequest $pvpAlterarPedFatRequest Solicitação de alteração do Pedido de Venda Faturado.
	 * @return PvpAlterarPedFatResponse Resposta da solicitação de alteração de Pedido de Venda Faturado.
	 */
	public function AlterarPedFaturado(PvpAlterarPedFatRequest $pvpAlterarPedFatRequest): ?PvpAlterarPedFatResponse {
		$res = $this->_Call('AlterarPedFaturado',Array(
			$pvpAlterarPedFatRequest
		));
		return $this->_Cast($res, PvpAlterarPedFatResponse::class);
	}

	/**
	 * Simula os impostos de um pedido de venda.
	 *
	 * @param PvpSimularImpRequest $pvpSimularImpRequest Informações da requisição para simulação dos impostos de um pedido de venda.
	 * @return PvpSimularImpResponse Resposta da solicitação de simulação de impostos de um pedido de venda
	 */
	public function SimularImpostos(PvpSimularImpRequest $pvpSimularImpRequest): ?PvpSimularImpResponse {
		$res = $this->_Call('SimularImpostos',Array(
			$pvpSimularImpRequest
		));
		return $this->_Cast($res, PvpSimularImpResponse::class);
	}

	/**
	 * Método para efetuar a devolução de um pedido.
	 *
	 * @param PvpDevolverRequest $pvpDevolverRequest Solicitação de devolução de pedido de venda.
	 * @return PvpDevolverResponse Resposta da solicitação de devolução de pedido de venda.
	 */
	public function DevolverPedido(PvpDevolverRequest $pvpDevolverRequest): ?PvpDevolverResponse {
		$res = $this->_Call('DevolverPedido',Array(
			$pvpDevolverRequest
		));
		return $this->_Cast($res, PvpDevolverResponse::class);
	}
}
