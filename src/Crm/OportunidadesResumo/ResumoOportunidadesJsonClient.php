<?php

namespace OmieLib\Crm\OportunidadesResumo;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Crm\OportunidadesResumo\Request\ObterListaOpRequest;
use OmieLib\Crm\OportunidadesResumo\Request\ObterResumoOpRequest;
use OmieLib\Crm\OportunidadesResumo\Response\ObterListaOpResponse;
use OmieLib\Crm\OportunidadesResumo\Response\ObterResumoOpResponse;

/**
 * @service ResumoOportunidadesJsonClient
 * @author omie
 */
class ResumoOportunidadesJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='crm/oportunidades-resumo/';

	/**
	 * Resumo das oportunidades.
	 *
	 * @param ObterResumoOpRequest $obterResumoOpRequest Solicitação do resumo do CRM.
	 * @return ObterResumoOpResponse Resposta da solicitação do resumo do CRM.
	 */
	public function ObterResumoOp(ObterResumoOpRequest $obterResumoOpRequest): ?ObterResumoOpResponse {
		$res = $this->_Call('ObterResumoOp',Array(
			$obterResumoOpRequest
		));
		return $this->_Cast($res, ObterResumoOpResponse::class);
	}

	/**
	 * Lista de Oportunidades.
	 *
	 * @param ObterListaOpRequest $ObterListaOpRequest Solicitação da listagem de Oportunidades.
	 * @return ObterListaOpResponse Resposta da solicitação da listagem de Oportunidades.
	 */
	public function ObterListaOp(ObterListaOpRequest $ObterListaOpRequest): ?ObterListaOpResponse {
		$res = $this->_Call('ObterListaOp',Array(
			$ObterListaOpRequest
		));
		return $this->_Cast($res, ObterListaOpResponse::class);
	}
}
