<?php

namespace OmieLib\Geral\Cidades;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Geral\Cidades\Request\CidListarRequest;
use OmieLib\Geral\Cidades\Response\CidListarResponse;

/**
 * @service CidadesCadastroJsonClient
 * @author omie
 */
class CidadesCadastroJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/cidades/';

	/**
	 * Obtém a lista das Cidades
	 *
	 * @param CidListarRequest $cidListarRequest Solicitação de Listagem de Cidades
	 * @return CidListarResponse Resposta da listagem de Cidades
	 */
	public function PesquisarCidades(CidListarRequest $cidListarRequest): ?CidListarResponse {
		$res = $this->_Call('PesquisarCidades',Array(
			$cidListarRequest
		));
		return $this->_Cast($res, CidListarResponse::class);
	}
}
