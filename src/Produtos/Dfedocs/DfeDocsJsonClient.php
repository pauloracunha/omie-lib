<?php

namespace OmieLib\Produtos\Dfedocs;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Dfedocs\Request\ObterCTeRequest;
use OmieLib\Produtos\Dfedocs\Request\ObterCupomRequest;
use OmieLib\Produtos\Dfedocs\Request\ObterDanfeSimpRequest;
use OmieLib\Produtos\Dfedocs\Request\ObterNFeRequest;
use OmieLib\Produtos\Dfedocs\Request\ObterPedVendaRequest;
use OmieLib\Produtos\Dfedocs\Response\ObterCTeResponse;
use OmieLib\Produtos\Dfedocs\Response\ObterCupomResponse;
use OmieLib\Produtos\Dfedocs\Response\ObterDanfeSimpResponse;
use OmieLib\Produtos\Dfedocs\Response\ObterNFeResponse;
use OmieLib\Produtos\Dfedocs\Response\ObterPedVendaResponse;

/**
 * @service DfeDocsJsonClient
 * @author omie
 */
class DfeDocsJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/dfedocs/';

	/**
	 * Obtém o cupom
	 *
	 * @param ObterCupomRequest $ObterCupomRequest Solicita as informações de um Cupom Fiscal.
	 * @return ObterCupomResponse Retorna as informações do Cupom Fiscal.
	 */
	public function ObterCupom(ObterCupomRequest $ObterCupomRequest): ObterCupomResponse{
		return $this->_Call('ObterCupom',Array(
			$ObterCupomRequest
		));
	}

	/**
	 * @param ObterCTeRequest $ObterCTeRequest Solicita as informações de um CTe.
	 * @return ObterCTeResponse Retorna informações de um CTe.
	 */
	public function ObterCTe(ObterCTeRequest $ObterCTeRequest): ObterCTeResponse{
		return $this->_Call('ObterCTe',Array(
			$ObterCTeRequest
		));
	}

	/**
	 * @param ObterNFeRequest $ObterNFeRequest Solicita as informações de uma Nota Fiscal.
	 * @return ObterNFeResponse Retorna informações da uma Nota Fiscal.
	 */
	public function ObterNfe(ObterNFeRequest $ObterNFeRequest): ObterNFeResponse{
		return $this->_Call('ObterNfe',Array(
			$ObterNFeRequest
		));
	}

	/**
	 * Obtém informações de um pedido de venda.
	 *
	 * @param ObterPedVendaRequest $ObterPedVendaRequest Solicita as informações de um Pedido de Venda.
	 * @return ObterPedVendaResponse Retorna a solicitação das informações de um Pedido de Venda.
	 */
	public function ObterPedVenda(ObterPedVendaRequest $ObterPedVendaRequest): ObterPedVendaResponse{
		return $this->_Call('ObterPedVenda',Array(
			$ObterPedVendaRequest
		));
	}

	/**
	 * Obtém informações de uma Nota fiscal com danfe simplificado.
	 *
	 * @param ObterDanfeSimpRequest $ObterDanfeSimpRequest Solicita as informações de uma nota fiscal.
	 * @return ObterDanfeSimpResponse Retorna informações da uma Nota Fiscal com Danfe simplificado.
	 */
	public function ObterDanfeSimp(ObterDanfeSimpRequest $ObterDanfeSimpRequest): ObterDanfeSimpResponse{
		return $this->_Call('ObterDanfeSimp',Array(
			$ObterDanfeSimpRequest
		));
	}
}
