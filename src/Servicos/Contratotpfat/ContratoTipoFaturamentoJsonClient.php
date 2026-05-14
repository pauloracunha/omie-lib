<?php

namespace OmieLib\Servicos\Contratotpfat;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contratotpfat\Request\TfCtrListarRequest;
use OmieLib\Servicos\Contratotpfat\Response\TfCtrListarResponse;

/**
 * @service ContratoTipoFaturamentoJsonClient
 * @author omie
 */
class ContratoTipoFaturamentoJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='servicos/contratotpfat/';

	/**
	 * Lista os tipos de faturamento de contrato.
	 *
	 * @param TfCtrListarRequest $tfCtrListarRequest Solicitação da listagem de tipo de faturamento de contrato.
	 * @return TfCtrListarResponse Resposta da solicitação de tipo de faturamento de contrato.
	 */
	public function ListarTipoFatContrato(TfCtrListarRequest $tfCtrListarRequest): ?TfCtrListarResponse {
		$res = $this->_Call('ListarTipoFatContrato',Array(
			$tfCtrListarRequest
		));
		return $this->_Cast($res, TfCtrListarResponse::class);
	}
}
