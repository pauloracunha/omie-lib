<?php

namespace OmieLib\Crm\Solucoes;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Crm\Solucoes\Request\SolucaoListarRequest;
use OmieLib\Crm\Solucoes\Response\SolucaoListarResponse;

/**
 * @service solucoesJsonClient
 * @author omie
 */
class SolucoesJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='crm/solucoes/';

	/**
	 * Lista as soluções disponíveis para a oportunidade.
	 *
	 * @param SolucaoListarRequest $solucaoListarRequest Solicitação da listagem de soluções da oportunidade.
	 * @return SolucaoListarResponse Resposta da solicitação da listagem de soluções da oportunidade.
	 */
	public function ListarSolucoes(SolucaoListarRequest $solucaoListarRequest): SolucaoListarResponse{
		return $this->_Call('ListarSolucoes',Array(
			$solucaoListarRequest
		));
	}
}
