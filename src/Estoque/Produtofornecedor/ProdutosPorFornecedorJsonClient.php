<?php

namespace OmieLib\Estoque\Produtofornecedor;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Produtofornecedor\Request\PfListarRequest;
use OmieLib\Estoque\Produtofornecedor\Response\PfListarResponse;

/**
 * @service ProdutosPorFornecedorJsonClient
 * @author omie
 */
class ProdutosPorFornecedorJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='estoque/produtofornecedor/';

	/**
	 * Listar os produtos por fornecedores.
	 *
	 * @param PfListarRequest $pfListarRequest Solicitação da listagem de produtos por fornecedor.
	 * @return PfListarResponse Resposta da solicitação da listagem de produtos por fornecedor.
	 */
	public function ListarProdutoFornecedor(PfListarRequest $pfListarRequest): PfListarResponse{
		return $this->_Call('ListarProdutoFornecedor',Array(
			$pfListarRequest
		));
	}
}
