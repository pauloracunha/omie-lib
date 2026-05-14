<?php

namespace OmieLib\Estoque\Consulta;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Consulta\Request\EstoqueMovimentoRequest;
use OmieLib\Estoque\Consulta\Request\ListarEstPosRequest;
use OmieLib\Estoque\Consulta\Request\ListarMovEstoqueRequest;
use OmieLib\Estoque\Consulta\Response\EstoqueMovimentoResponse;
use OmieLib\Estoque\Consulta\Response\ListarEstPosResponse;
use OmieLib\Estoque\Consulta\Response\ListarMovEstoqueResponse;

/**
 * @service ConsultaEstoqueJsonClient
 * @author omie
 */
class ConsultaEstoqueJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='estoque/consulta/';

	/**
	 * Obtém a Posição de Estoque de um determinado produto para a data
	 *
	 * @param Estoque_mov_consulta_cadastro $estoque_mov_consulta_cadastro Registro de Consulta de Estoque
	 * @return Estoque_mov_consulta_cadastro_resposta Status de Resposta da Consulta de Estoque
	 */
	public function PosicaoEstoque(Estoque_mov_consulta_cadastro $estoque_mov_consulta_cadastro): ?Estoque_mov_consulta_cadastro_resposta {
		$res = $this->_Call('PosicaoEstoque',Array(
			$estoque_mov_consulta_cadastro
		));
		return $this->_Cast($res, Estoque_mov_consulta_cadastro_resposta::class);
	}

	/**
	 * Consulta do Movimento de Estoque
	 *
	 * @param EstoqueMovimentoRequest $estoqueMovimentoRequest Consulta Movimento de Estoque de um Produto
	 * @return EstoqueMovimentoResponse Resposta do consulta de movimentação do Estoque
	 */
	public function MovimentoEstoque(EstoqueMovimentoRequest $estoqueMovimentoRequest): ?EstoqueMovimentoResponse {
		$res = $this->_Call('MovimentoEstoque',Array(
			$estoqueMovimentoRequest
		));
		return $this->_Cast($res, EstoqueMovimentoResponse::class);
	}

	/**
	 * Lista as posições de estoque de um dia.
	 *
	 * @param ListarEstPosRequest $ListarEstPosRequest Solicitação da listagem da posição do estoque.
	 * @return ListarEstPosResponse Resposta da solicitação de listagem da posição de estoque.
	 */
	public function ListarPosEstoque(ListarEstPosRequest $ListarEstPosRequest): ?ListarEstPosResponse {
		$res = $this->_Call('ListarPosEstoque',Array(
			$ListarEstPosRequest
		));
		return $this->_Cast($res, ListarEstPosResponse::class);
	}

	/**
	 * Lista o saldo pendente de estoque.
	 *
	 * @param Estoque_listar_pendente_request $estoque_listar_pendente_request Solicitação de listagem de saldo pendente de estoque.
	 * @return Estoque_listar_pendente_response Resposta da solicitação de listagem de saldo pendente de estoque.
	 */
	public function ListarSaldoPendente(Estoque_listar_pendente_request $estoque_listar_pendente_request): ?Estoque_listar_pendente_response {
		$res = $this->_Call('ListarSaldoPendente',Array(
			$estoque_listar_pendente_request
		));
		return $this->_Cast($res, Estoque_listar_pendente_response::class);
	}

	/**
	 * Lista a movimentação de estoque.
	 *
	 * @param ListarMovEstoqueRequest $ListarMovEstoqueRequest Solicitação da listagem de movimentação do estoque.
	 * @return ListarMovEstoqueResponse Resposta da solicitação de listagem da movimentação do estoque.
	 */
	public function ListarMovimentoEstoque(ListarMovEstoqueRequest $ListarMovEstoqueRequest): ?ListarMovEstoqueResponse {
		$res = $this->_Call('ListarMovimentoEstoque',Array(
			$ListarMovEstoqueRequest
		));
		return $this->_Cast($res, ListarMovEstoqueResponse::class);
	}
}
