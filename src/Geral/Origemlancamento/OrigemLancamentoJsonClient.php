<?php

namespace OmieLib\Geral\Origemlancamento;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;

/**
 * @service OrigemLancamentoJsonClient
 * @author omie
 */
class OrigemLancamentoJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/origemlancamento/';

	/**
	 * @param Origem_lanc_listar_request $origem_lanc_listar_request Solicitação da listagem de origens de lançamentos.
	 * @return Origem_lanc_listar_response Resposta da solicitação da listagem de origens de lançamentos.
	 */
	public function ListarOrigem(Origem_lanc_listar_request $origem_lanc_listar_request): ?Origem_lanc_listar_response {
		$res = $this->_Call('ListarOrigem',Array(
			$origem_lanc_listar_request
		));
		return $this->_Cast($res, Origem_lanc_listar_response::class);
	}
}
