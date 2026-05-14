<?php

namespace OmieLib\Produtos\Requisicaocompra;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Requisicaocompra\Request\RcListarRequest;
use OmieLib\Produtos\Requisicaocompra\Response\RcListarResponse;

/**
 * @service RequisicaoCompraJsonClient
 * @author omie
 */
class RequisicaoCompraJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/requisicaocompra/';

	/**
	 * Inclui uma Requisição de Compras
	 *
	 * @param RequisicaoCadastro $requisicaoCadastro Cadastro de Requisição de Compras&nbsp;
	 * @return RcStatus Status da Requisição de Compras
	 */
	public function IncluirReq(RequisicaoCadastro $requisicaoCadastro): RcStatus{
		return $this->_Call('IncluirReq',Array(
			$requisicaoCadastro
		));
	}

	/**
	 * Alterar Requisição de Compras
	 *
	 * @param RequisicaoCadastro $requisicaoCadastro Cadastro de Requisição de Compras&nbsp;
	 * @return RcStatus Status da Requisição de Compras
	 */
	public function AlterarReq(RequisicaoCadastro $requisicaoCadastro): RcStatus{
		return $this->_Call('AlterarReq',Array(
			$requisicaoCadastro
		));
	}

	/**
	 * Exclui uma Requisição de Compras
	 *
	 * @param RcChave $rcChave Dados para pesquisa da Requisição de Compras&nbsp;
	 * @return RcStatus Status da Requisição de Compras
	 */
	public function ExcluirReq(RcChave $rcChave): RcStatus{
		return $this->_Call('ExcluirReq',Array(
			$rcChave
		));
	}

	/**
	 * Upsert Requisição de Compras
	 *
	 * @param RequisicaoCadastro $requisicaoCadastro Cadastro de Requisição de Compras&nbsp;
	 * @return RcStatus Status da Requisição de Compras
	 */
	public function UpsertReq(RequisicaoCadastro $requisicaoCadastro): RcStatus{
		return $this->_Call('UpsertReq',Array(
			$requisicaoCadastro
		));
	}

	/**
	 * Consultar Requisição de Compras
	 *
	 * @param RcChave $rcChave Dados para pesquisa da Requisição de Compras&nbsp;
	 * @return RequisicaoCadastro Cadastro de Requisição de Compras&nbsp;
	 */
	public function ConsultarReq(RcChave $rcChave): RequisicaoCadastro{
		return $this->_Call('ConsultarReq',Array(
			$rcChave
		));
	}

	/**
	 * Pesquisar Requisição de Compras
	 *
	 * @param RcListarRequest $rcListarRequest Solicitação de Listagem de Requisição de Compras
	 * @return RcListarResponse Resposta da listagem de Requisição de Compras
	 */
	public function PesquisarReq(RcListarRequest $rcListarRequest): RcListarResponse{
		return $this->_Call('PesquisarReq',Array(
			$rcListarRequest
		));
	}
}
