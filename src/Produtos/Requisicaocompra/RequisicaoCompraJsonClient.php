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
	public function IncluirReq(RequisicaoCadastro $requisicaoCadastro): ?RcStatus {
		$res = $this->_Call('IncluirReq',Array(
			$requisicaoCadastro
		));
		return $this->_Cast($res, RcStatus::class);
	}

	/**
	 * Alterar Requisição de Compras
	 *
	 * @param RequisicaoCadastro $requisicaoCadastro Cadastro de Requisição de Compras&nbsp;
	 * @return RcStatus Status da Requisição de Compras
	 */
	public function AlterarReq(RequisicaoCadastro $requisicaoCadastro): ?RcStatus {
		$res = $this->_Call('AlterarReq',Array(
			$requisicaoCadastro
		));
		return $this->_Cast($res, RcStatus::class);
	}

	/**
	 * Exclui uma Requisição de Compras
	 *
	 * @param RcChave $rcChave Dados para pesquisa da Requisição de Compras&nbsp;
	 * @return RcStatus Status da Requisição de Compras
	 */
	public function ExcluirReq(RcChave $rcChave): ?RcStatus {
		$res = $this->_Call('ExcluirReq',Array(
			$rcChave
		));
		return $this->_Cast($res, RcStatus::class);
	}

	/**
	 * Upsert Requisição de Compras
	 *
	 * @param RequisicaoCadastro $requisicaoCadastro Cadastro de Requisição de Compras&nbsp;
	 * @return RcStatus Status da Requisição de Compras
	 */
	public function UpsertReq(RequisicaoCadastro $requisicaoCadastro): ?RcStatus {
		$res = $this->_Call('UpsertReq',Array(
			$requisicaoCadastro
		));
		return $this->_Cast($res, RcStatus::class);
	}

	/**
	 * Consultar Requisição de Compras
	 *
	 * @param RcChave $rcChave Dados para pesquisa da Requisição de Compras&nbsp;
	 * @return RequisicaoCadastro Cadastro de Requisição de Compras&nbsp;
	 */
	public function ConsultarReq(RcChave $rcChave): ?RequisicaoCadastro {
		$res = $this->_Call('ConsultarReq',Array(
			$rcChave
		));
		return $this->_Cast($res, RequisicaoCadastro::class);
	}

	/**
	 * Pesquisar Requisição de Compras
	 *
	 * @param RcListarRequest $rcListarRequest Solicitação de Listagem de Requisição de Compras
	 * @return RcListarResponse Resposta da listagem de Requisição de Compras
	 */
	public function PesquisarReq(RcListarRequest $rcListarRequest): ?RcListarResponse {
		$res = $this->_Call('PesquisarReq',Array(
			$rcListarRequest
		));
		return $this->_Cast($res, RcListarResponse::class);
	}
}
