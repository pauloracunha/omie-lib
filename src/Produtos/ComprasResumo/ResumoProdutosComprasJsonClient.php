<?php

namespace OmieLib\Produtos\ComprasResumo;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\ComprasResumo\Request\ObterResumoComprasRequest;
use OmieLib\Produtos\ComprasResumo\Response\ObterResumoComprasResponse;

/**
 * @service ResumoProdutosComprasJsonClient
 * @author omie
 */
class ResumoProdutosComprasJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/compras-resumo/';

	/**
	 * Obtem o resumo das compras de produtos.
	 *
	 * @param ObterResumoComprasRequest $ObterResumoComprasRequest Solicitação do resumo de compas de produtos.
	 * @return ObterResumoComprasResponse Resposta da solicitação do resumo de compras de produtos.
	 */
	public function ObterResumoCompras(ObterResumoComprasRequest $ObterResumoComprasRequest): ?ObterResumoComprasResponse {
		$res = $this->_Call('ObterResumoCompras',Array(
			$ObterResumoComprasRequest
		));
		return $this->_Cast($res, ObterResumoComprasResponse::class);
	}
}
