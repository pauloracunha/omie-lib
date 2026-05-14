<?php

namespace OmieLib\Financas\Caixa;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Financas\Caixa\Request\OcprListarRequest;
use OmieLib\Financas\Caixa\Response\OcprListarResponse;

/**
 * @service OrcamentoCaixaJsonClient
 * @author omie
 */
class OrcamentoCaixaJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='financas/caixa/';

	/**
	 * Lista os Orçamentos de Caixa.
	 *
	 * @param OcprListarRequest $ocprListarRequest Solicitação de listagem de Orçamento de Caixa - Previsto x Realizado.
	 * @return OcprListarResponse Resposta da solicitação de listagem de Orçamento de Caixa - Previsto x Realizado.
	 */
	public function ListarOrcamentos(OcprListarRequest $ocprListarRequest): OcprListarResponse{
		return $this->_Call('ListarOrcamentos',Array(
			$ocprListarRequest
		));
	}
}
