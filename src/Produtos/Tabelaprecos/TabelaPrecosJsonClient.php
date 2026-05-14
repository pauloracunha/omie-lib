<?php

namespace OmieLib\Produtos\Tabelaprecos;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Tabelaprecos\Request\TprAltPrecoItemRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprAlterarRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprAtivarRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprAtualizarRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprConsultarRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprExcluirRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprIncluirRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprItensListarRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprListarRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprSuspenderRequest;
use OmieLib\Produtos\Tabelaprecos\Response\TprAltPrecoItemResponse;
use OmieLib\Produtos\Tabelaprecos\Response\TprAlterarResponse;
use OmieLib\Produtos\Tabelaprecos\Response\TprAtivarResponse;
use OmieLib\Produtos\Tabelaprecos\Response\TprAtualizarResponse;
use OmieLib\Produtos\Tabelaprecos\Response\TprConsultarResponse;
use OmieLib\Produtos\Tabelaprecos\Response\TprExcluirResponse;
use OmieLib\Produtos\Tabelaprecos\Response\TprIncluirResponse;
use OmieLib\Produtos\Tabelaprecos\Response\TprItensListarResponse;
use OmieLib\Produtos\Tabelaprecos\Response\TprListarResponse;
use OmieLib\Produtos\Tabelaprecos\Response\TprSuspenderResponse;

/**
 * @service TabelaPrecosJsonClient
 * @author omie
 */
class TabelaPrecosJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/tabelaprecos/';

	/**
	 * Inclui uma tabela de preços.
	 *
	 * @param TprIncluirRequest $tprIncluirRequest Solicitação de Inclusão de uma Tabela de Preços.
	 * @return TprIncluirResponse Resposta da solicitação de Inclusão de uma Tabela de Preços.
	 */
	public function IncluirTabelaPreco(TprIncluirRequest $tprIncluirRequest): ?TprIncluirResponse {
		$res = $this->_Call('IncluirTabelaPreco',Array(
			$tprIncluirRequest
		));
		return $this->_Cast($res, TprIncluirResponse::class);
	}

	/**
	 * Altera uma tabela de preços.
	 *
	 * @param TprAlterarRequest $tprAlterarRequest Solicitação de Alteração de uma Tabela de Preços.
	 * @return TprAlterarResponse Resposta da solicitação de Alteração de uma Tabela de Preços.
	 */
	public function AlterarTabelaPreco(TprAlterarRequest $tprAlterarRequest): ?TprAlterarResponse {
		$res = $this->_Call('AlterarTabelaPreco',Array(
			$tprAlterarRequest
		));
		return $this->_Cast($res, TprAlterarResponse::class);
	}

	/**
	 * Exclui uma tabela de preços.
	 *
	 * @param TprExcluirRequest $tprExcluirRequest Solicitação de Exclusão de uma Tabela de Preços.
	 * @return TprExcluirResponse Resposta da solicitação de Exclusão de uma Tabela de Preços.
	 */
	public function ExcluirTabelaPreco(TprExcluirRequest $tprExcluirRequest): ?TprExcluirResponse {
		$res = $this->_Call('ExcluirTabelaPreco',Array(
			$tprExcluirRequest
		));
		return $this->_Cast($res, TprExcluirResponse::class);
	}

	/**
	 * Consulta uma tabela de preços.
	 *
	 * @param TprConsultarRequest $tprConsultarRequest Solicitação de Consulta de uma Tabela de Preços.
	 * @return TprConsultarResponse Resposta da Solicitação de Consulta de uma Tabela de Preços.
	 */
	public function ConsultarTabelaPreco(TprConsultarRequest $tprConsultarRequest): ?TprConsultarResponse {
		$res = $this->_Call('ConsultarTabelaPreco',Array(
			$tprConsultarRequest
		));
		return $this->_Cast($res, TprConsultarResponse::class);
	}

	/**
	 * Lista as tabelas de preço cadastradas.
	 *
	 * @param TprListarRequest $tprListarRequest Listagem de tabela de preços.
	 * @return TprListarResponse Resposta da solicitação de listagem de tabelas de preço.
	 */
	public function ListarTabelasPreco(TprListarRequest $tprListarRequest): ?TprListarResponse {
		$res = $this->_Call('ListarTabelasPreco',Array(
			$tprListarRequest
		));
		return $this->_Cast($res, TprListarResponse::class);
	}

	/**
	 * Lista os itens de uma tabela de preços.
	 *
	 * @param TprItensListarRequest $tprItensListarRequest Listagem de itens da tabela de preços.
	 * @return TprItensListarResponse Resposta da solicitação de listagem de itens da tabelas de preço.
	 */
	public function ListarTabelaItens(TprItensListarRequest $tprItensListarRequest): ?TprItensListarResponse {
		$res = $this->_Call('ListarTabelaItens',Array(
			$tprItensListarRequest
		));
		return $this->_Cast($res, TprItensListarResponse::class);
	}

	/**
	 * Ativa uma tabela de preços.
	 *
	 * @param TprAtivarRequest $tprAtivarRequest Solicitação de Ativação de uma Tabela de Preços.
	 * @return TprAtivarResponse Resposta da solicitação de Ativação de uma Tabela de Preços.
	 */
	public function AtivarTabelaPreco(TprAtivarRequest $tprAtivarRequest): ?TprAtivarResponse {
		$res = $this->_Call('AtivarTabelaPreco',Array(
			$tprAtivarRequest
		));
		return $this->_Cast($res, TprAtivarResponse::class);
	}

	/**
	 * Suspende uma tabela de preços.
	 *
	 * @param TprSuspenderRequest $tprSuspenderRequest Solicitação de Suspensão de uma Tabela de Preços.
	 * @return TprSuspenderResponse Resposta da solicitação de Suspensão de uma Tabela de Preços.
	 */
	public function SuspenderTabelaPreco(TprSuspenderRequest $tprSuspenderRequest): ?TprSuspenderResponse {
		$res = $this->_Call('SuspenderTabelaPreco',Array(
			$tprSuspenderRequest
		));
		return $this->_Cast($res, TprSuspenderResponse::class);
	}

	/**
	 * Atualiza os produtos da tabela de preços.
	 *
	 * @param TprAtualizarRequest $tprAtualizarRequest Solicitação de Atualização dos produtos de uma Tabela de Preços.
	 * @return TprAtualizarResponse Resposta da solicitação de Atualização dos produtos de uma Tabela de Preços.
	 */
	public function AtualizarProdutos(TprAtualizarRequest $tprAtualizarRequest): ?TprAtualizarResponse {
		$res = $this->_Call('AtualizarProdutos',Array(
			$tprAtualizarRequest
		));
		return $this->_Cast($res, TprAtualizarResponse::class);
	}

	/**
	 * Altera o preço de um item da Tabela de Preços
	 *
	 * @param TprAltPrecoItemRequest $tprAltPrecoItemRequest Solicitação de alteração do preço de um item de uma Tabela de Preços.
	 * @return TprAltPrecoItemResponse Resposta da solicitação de alteração dos produtos de uma Tabela de Preços.
	 */
	public function AlterarPrecoItem(TprAltPrecoItemRequest $tprAltPrecoItemRequest): ?TprAltPrecoItemResponse {
		$res = $this->_Call('AlterarPrecoItem',Array(
			$tprAltPrecoItemRequest
		));
		return $this->_Cast($res, TprAltPrecoItemResponse::class);
	}
}
