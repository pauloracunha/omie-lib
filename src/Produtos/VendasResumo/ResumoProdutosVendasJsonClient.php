<?php

namespace OmieLib\Produtos\VendasResumo;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\VendasResumo\Request\ObterResumoVendasRequest;
use OmieLib\Produtos\VendasResumo\Response\ObterResumoVendasResponse;

/**
 * @service ResumoProdutosVendasJsonClient
 * @author omie
 */
class ResumoProdutosVendasJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/vendas-resumo/';

	/**
	 * Obtem o resumo das vendas de produtos.
	 *
	 * @param ObterResumoVendasRequest $ObterResumoVendasRequest Solicitação do resumo de vendas de produtos.
	 * @return ObterResumoVendasResponse Resposta da solicitação do resumo de vendas de produtos.
	 */
	public function ObterResumoProdutos(ObterResumoVendasRequest $ObterResumoVendasRequest): ?ObterResumoVendasResponse {
		$res = $this->_Call('ObterResumoProdutos',Array(
			$ObterResumoVendasRequest
		));
		return $this->_Cast($res, ObterResumoVendasResponse::class);
	}
}
