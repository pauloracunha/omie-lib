<?php

namespace OmieLib\Estoque\Resumo;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Resumo\Request\ObterEstoqueProdRequest;
use OmieLib\Estoque\Resumo\Response\ObterEstoqueProdResponse;

/**
 * @service ResumoEstoqueJsonClient
 * @author omie
 */
class ResumoEstoqueJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='estoque/resumo/';

	/**
	 * Obtem a posição de estoque do produto.
	 *
	 * @param ObterEstoqueProdRequest $ObterEstoqueProdRequest Solicitação da posição de estoque do produto.
	 * @return ObterEstoqueProdResponse Resposta da solicitação da posição de estoque do produto.
	 */
	public function ObterEstoqueProduto(ObterEstoqueProdRequest $ObterEstoqueProdRequest): ?ObterEstoqueProdResponse {
		$res = $this->_Call('ObterEstoqueProduto',Array(
			$ObterEstoqueProdRequest
		));
		return $this->_Cast($res, ObterEstoqueProdResponse::class);
	}
}
