<?php

namespace OmieLib\Servicos\Resumo;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Resumo\Request\ObterResumoServRequest;
use OmieLib\Servicos\Resumo\Response\ObterResumoServResponse;

/**
 * @service ResumoServicosJsonClient
 * @author omie
 */
class ResumoServicosJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='servicos/resumo/';

	/**
	 * Obtem o resumos dos serviços.
	 *
	 * @param ObterResumoServRequest $ObterResumoServRequest Solicitação do resumo de vendas de serviços.
	 * @return ObterResumoServResponse Resposta da solicitação do resumos de serviços.
	 */
	public function ObterResumoServicos(ObterResumoServRequest $ObterResumoServRequest): ?ObterResumoServResponse {
		$res = $this->_Call('ObterResumoServicos',Array(
			$ObterResumoServRequest
		));
		return $this->_Cast($res, ObterResumoServResponse::class);
	}
}
