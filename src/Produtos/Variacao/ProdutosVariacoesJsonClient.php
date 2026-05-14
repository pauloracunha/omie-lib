<?php

namespace OmieLib\Produtos\Variacao;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Variacao\Request\VariacaoConsultarRequest;
use OmieLib\Produtos\Variacao\Request\VariacaoIncluirRequest;
use OmieLib\Produtos\Variacao\Request\VariacaoListarRequest;
use OmieLib\Produtos\Variacao\Response\VariacaoConsultarResponse;
use OmieLib\Produtos\Variacao\Response\VariacaoIncluirResponse;
use OmieLib\Produtos\Variacao\Response\VariacaoListarResponse;

/**
 * @service ProdutosVariacoesJsonClient
 * @author omie
 */
class ProdutosVariacoesJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/variacao/';

	/**
	 * Método para realizar a consulta da variação da grade do produto.
	 *
	 * @param VariacaoConsultarRequest $variacaoConsultarRequest Solicitação da consulta de variação.
	 * @return VariacaoConsultarResponse Resposta da consulta de variação.
	 */
	public function ConsultarVariacoes(VariacaoConsultarRequest $variacaoConsultarRequest): VariacaoConsultarResponse{
		return $this->_Call('ConsultarVariacoes',Array(
			$variacaoConsultarRequest
		));
	}

	/**
	 * Método para realizar a listagem das variações de grade do produto.
	 *
	 * @param VariacaoListarRequest $variacaoListarRequest Solicitação para listar as variações.
	 * @return VariacaoListarResponse Retorno da lista de variações.
	 */
	public function ListarVariacoes(VariacaoListarRequest $variacaoListarRequest): VariacaoListarResponse{
		return $this->_Call('ListarVariacoes',Array(
			$variacaoListarRequest
		));
	}

	/**
	 * Método para realizar a inclusão da variação da grade do produto.
	 *
	 * @param VariacaoIncluirRequest $variacaoIncluirRequest Solicitação da inclusão de variação para o produto.
	 * @return VariacaoIncluirResponse Resposta da solicitação da inclusão de variação para o produto.
	 */
	public function IncluirVariacoes(VariacaoIncluirRequest $variacaoIncluirRequest): VariacaoIncluirResponse{
		return $this->_Call('IncluirVariacoes',Array(
			$variacaoIncluirRequest
		));
	}
}
