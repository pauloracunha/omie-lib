<?php

namespace OmieLib\Produtos\Etapafat;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Etapafat\Request\EtaproListarRequest;
use OmieLib\Produtos\Etapafat\Response\EtaproListarResponse;

/**
 * @service EtapasFaturamentoJsonClient
 * @author omie
 */
class EtapasFaturamentoJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/etapafat/';

	/**
	 * Lista as etapas do faturamento
	 *
	 * @param EtaproListarRequest $etaproListarRequest Solicitação da listagem de etapas do processo de faturamento.
	 * @return EtaproListarResponse Resposta da solicitação de etapas do processo de faturamento.
	 */
	public function ListarEtapasFaturamento(EtaproListarRequest $etaproListarRequest): ?EtaproListarResponse {
		$res = $this->_Call('ListarEtapasFaturamento',Array(
			$etaproListarRequest
		));
		return $this->_Cast($res, EtaproListarResponse::class);
	}
}
