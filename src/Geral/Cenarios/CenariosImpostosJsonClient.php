<?php

namespace OmieLib\Geral\Cenarios;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Geral\Cenarios\Request\CenariosImpostosListarRequest;
use OmieLib\Geral\Cenarios\Request\CenariosListarRequest;
use OmieLib\Geral\Cenarios\Response\CenariosImpostosListarResponse;
use OmieLib\Geral\Cenarios\Response\CenariosListarResponse;

/**
 * @service CenariosImpostosJsonClient
 * @author omie
 */
class CenariosImpostosJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/cenarios/';

	/**
	 * Lista os cenários de impostos.
	 *
	 * @param CenariosListarRequest $cenariosListarRequest Solicitação de listagem de Cenários de Impostos.
	 * @return CenariosListarResponse Resposta da solicitação de listagem de Cenários de Impostos.
	 */
	public function ListarCenarios(CenariosListarRequest $cenariosListarRequest): ?CenariosListarResponse {
		$res = $this->_Call('ListarCenarios',Array(
			$cenariosListarRequest
		));
		return $this->_Cast($res, CenariosListarResponse::class);
	}

	/**
	 * Lista os impostos do cenário e produto
	 *
	 * @param CenariosImpostosListarRequest $cenariosImpostosListarRequest Solicitação de listagem dos Impostos do Cenário para o produto e cliente.
	 * @return CenariosImpostosListarResponse Resposta da solicitação de listagem dos impostos do Cenários de Impostos para o produto e cliente.
	 */
	public function ListarImpostosCenario(CenariosImpostosListarRequest $cenariosImpostosListarRequest): ?CenariosImpostosListarResponse {
		$res = $this->_Call('ListarImpostosCenario',Array(
			$cenariosImpostosListarRequest
		));
		return $this->_Cast($res, CenariosImpostosListarResponse::class);
	}
}
