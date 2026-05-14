<?php

namespace OmieLib\Produtos\Produtoslote;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Produtoslote\Request\LoteProdutoConsultarRequest;
use OmieLib\Produtos\Produtoslote\Request\LoteProdutoListarRequest;
use OmieLib\Produtos\Produtoslote\Response\LoteProdutoConsultarResponse;
use OmieLib\Produtos\Produtoslote\Response\LoteProdutoListarResponse;

/**
 * @service ProdutosLoteJsonClient
 * @author omie
 */
class ProdutosLoteJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/produtoslote/';

	/**
	 * Método para realizar a consulta do lote do produto.
	 *
	 * @param LoteProdutoConsultarRequest $loteProdutoConsultarRequest Solicitação da consulta de lote.
	 * @return LoteProdutoConsultarResponse Solicitação da consulta de lote do produto.
	 */
	public function ConsultarLote(LoteProdutoConsultarRequest $loteProdutoConsultarRequest): ?LoteProdutoConsultarResponse {
		$res = $this->_Call('ConsultarLote',Array(
			$loteProdutoConsultarRequest
		));
		return $this->_Cast($res, LoteProdutoConsultarResponse::class);
	}

	/**
	 * Método para realizar a listagem dos lotes do produto.
	 *
	 * @param LoteProdutoListarRequest $loteProdutoListarRequest Requisição da consulta de lote.
	 * @return LoteProdutoListarResponse Retorno da lista de lote.
	 */
	public function ListarLotes(LoteProdutoListarRequest $loteProdutoListarRequest): ?LoteProdutoListarResponse {
		$res = $this->_Call('ListarLotes',Array(
			$loteProdutoListarRequest
		));
		return $this->_Cast($res, LoteProdutoListarResponse::class);
	}
}
