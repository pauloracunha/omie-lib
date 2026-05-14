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
	public function IncluirTabelaPreco(TprIncluirRequest $tprIncluirRequest): TprIncluirResponse{
		return $this->_Call('IncluirTabelaPreco',Array(
			$tprIncluirRequest
		));
	}

	/**
	 * Altera uma tabela de preços.
	 *
	 * @param TprAlterarRequest $tprAlterarRequest Solicitação de Alteração de uma Tabela de Preços.
	 * @return TprAlterarResponse Resposta da solicitação de Alteração de uma Tabela de Preços.
	 */
	public function AlterarTabelaPreco(TprAlterarRequest $tprAlterarRequest): TprAlterarResponse{
		return $this->_Call('AlterarTabelaPreco',Array(
			$tprAlterarRequest
		));
	}

	/**
	 * Exclui uma tabela de preços.
	 *
	 * @param TprExcluirRequest $tprExcluirRequest Solicitação de Exclusão de uma Tabela de Preços.
	 * @return TprExcluirResponse Resposta da solicitação de Exclusão de uma Tabela de Preços.
	 */
	public function ExcluirTabelaPreco(TprExcluirRequest $tprExcluirRequest): TprExcluirResponse{
		return $this->_Call('ExcluirTabelaPreco',Array(
			$tprExcluirRequest
		));
	}

	/**
	 * Consulta uma tabela de preços.
	 *
	 * @param TprConsultarRequest $tprConsultarRequest Solicitação de Consulta de uma Tabela de Preços.
	 * @return TprConsultarResponse Resposta da Solicitação de Consulta de uma Tabela de Preços.
	 */
	public function ConsultarTabelaPreco(TprConsultarRequest $tprConsultarRequest): TprConsultarResponse{
		return $this->_Call('ConsultarTabelaPreco',Array(
			$tprConsultarRequest
		));
	}

	/**
	 * Lista as tabelas de preço cadastradas.
	 *
	 * @param TprListarRequest $tprListarRequest Listagem de tabela de preços.
	 * @return TprListarResponse Resposta da solicitação de listagem de tabelas de preço.
	 */
	public function ListarTabelasPreco(TprListarRequest $tprListarRequest): TprListarResponse{
		return $this->_Call('ListarTabelasPreco',Array(
			$tprListarRequest
		));
	}

	/**
	 * Lista os itens de uma tabela de preços.
	 *
	 * @param TprItensListarRequest $tprItensListarRequest Listagem de itens da tabela de preços.
	 * @return TprItensListarResponse Resposta da solicitação de listagem de itens da tabelas de preço.
	 */
	public function ListarTabelaItens(TprItensListarRequest $tprItensListarRequest): TprItensListarResponse{
		return $this->_Call('ListarTabelaItens',Array(
			$tprItensListarRequest
		));
	}

	/**
	 * Ativa uma tabela de preços.
	 *
	 * @param TprAtivarRequest $tprAtivarRequest Solicitação de Ativação de uma Tabela de Preços.
	 * @return TprAtivarResponse Resposta da solicitação de Ativação de uma Tabela de Preços.
	 */
	public function AtivarTabelaPreco(TprAtivarRequest $tprAtivarRequest): TprAtivarResponse{
		return $this->_Call('AtivarTabelaPreco',Array(
			$tprAtivarRequest
		));
	}

	/**
	 * Suspende uma tabela de preços.
	 *
	 * @param TprSuspenderRequest $tprSuspenderRequest Solicitação de Suspensão de uma Tabela de Preços.
	 * @return TprSuspenderResponse Resposta da solicitação de Suspensão de uma Tabela de Preços.
	 */
	public function SuspenderTabelaPreco(TprSuspenderRequest $tprSuspenderRequest): TprSuspenderResponse{
		return $this->_Call('SuspenderTabelaPreco',Array(
			$tprSuspenderRequest
		));
	}

	/**
	 * Atualiza os produtos da tabela de preços.
	 *
	 * @param TprAtualizarRequest $tprAtualizarRequest Solicitação de Atualização dos produtos de uma Tabela de Preços.
	 * @return TprAtualizarResponse Resposta da solicitação de Atualização dos produtos de uma Tabela de Preços.
	 */
	public function AtualizarProdutos(TprAtualizarRequest $tprAtualizarRequest): TprAtualizarResponse{
		return $this->_Call('AtualizarProdutos',Array(
			$tprAtualizarRequest
		));
	}

	/**
	 * Altera o preço de um item da Tabela de Preços
	 *
	 * @param TprAltPrecoItemRequest $tprAltPrecoItemRequest Solicitação de alteração do preço de um item de uma Tabela de Preços.
	 * @return TprAltPrecoItemResponse Resposta da solicitação de alteração dos produtos de uma Tabela de Preços.
	 */
	public function AlterarPrecoItem(TprAltPrecoItemRequest $tprAltPrecoItemRequest): TprAltPrecoItemResponse{
		return $this->_Call('AlterarPrecoItem',Array(
			$tprAltPrecoItemRequest
		));
	}
}
