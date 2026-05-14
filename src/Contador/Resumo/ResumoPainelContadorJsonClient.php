<?php

namespace OmieLib\Contador\Resumo;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Contador\Resumo\Request\ObterResumoContadorRequest;
use OmieLib\Contador\Resumo\Response\ObterResumoContadorResponse;

/**
 * @service ResumoPainelContadorJsonClient
 * @author omie
 */
class ResumoPainelContadorJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='contador/resumo/';

	/**
	 * Obtem o resumo do painel do contador.
	 *
	 * @param ObterResumoContadorRequest $ObterResumoContadorRequest Solicitação do resumo do painel do contador.
	 * @return ObterResumoContadorResponse Resposta da solicitação do resumo do painel do contador.
	 */
	public function ObterResumoContador(ObterResumoContadorRequest $ObterResumoContadorRequest): ?ObterResumoContadorResponse {
		$res = $this->_Call('ObterResumoContador',Array(
			$ObterResumoContadorRequest
		));
		return $this->_Cast($res, ObterResumoContadorResponse::class);
	}
}
