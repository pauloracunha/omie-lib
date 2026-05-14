<?php

namespace OmieLib\Servicos\Osdocs;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Osdocs\Request\ObterDemonstRequest;
use OmieLib\Servicos\Osdocs\Request\ObterNFSeRequest;
use OmieLib\Servicos\Osdocs\Request\ObterOsRequest;
use OmieLib\Servicos\Osdocs\Request\ObterRPSRequest;
use OmieLib\Servicos\Osdocs\Request\ObterReciboRequest;
use OmieLib\Servicos\Osdocs\Request\ObterViaUnicaRequest;
use OmieLib\Servicos\Osdocs\Request\OsObterRequest;
use OmieLib\Servicos\Osdocs\Response\ObterDemonstResponse;
use OmieLib\Servicos\Osdocs\Response\ObterNFSeResponse;
use OmieLib\Servicos\Osdocs\Response\ObterOsResponse;
use OmieLib\Servicos\Osdocs\Response\ObterRPSResponse;
use OmieLib\Servicos\Osdocs\Response\ObterReciboResponse;
use OmieLib\Servicos\Osdocs\Response\ObterViaUnicaResponse;

/**
 * @service OsDocsJsonClient
 * @author omie
 */
class OsDocsJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='servicos/osdocs/';

	/**
	 * Retorna as informações do faturamento de uma NFS-e
	 *
	 * @param ObterNFSeRequest $ObterNFSeRequest Solicita as informações de uma NFS-e
	 * @return ObterNFSeResponse Informações da NFS-e faturada.
	 */
	public function ObterNFSe(ObterNFSeRequest $ObterNFSeRequest): ?ObterNFSeResponse {
		$res = $this->_Call('ObterNFSe',Array(
			$ObterNFSeRequest
		));
		return $this->_Cast($res, ObterNFSeResponse::class);
	}

	/**
	 * Retorna as informações do faturamento de uma nota Via Única
	 *
	 * @param ObterViaUnicaRequest $ObterViaUnicaRequest Solicita as informações de uma nota fiscal Via Única
	 * @return ObterViaUnicaResponse Informações da nota fiscal Via Única faturada.
	 */
	public function ObterViaUnica(ObterViaUnicaRequest $ObterViaUnicaRequest): ?ObterViaUnicaResponse {
		$res = $this->_Call('ObterViaUnica',Array(
			$ObterViaUnicaRequest
		));
		return $this->_Cast($res, ObterViaUnicaResponse::class);
	}

	/**
	 * Retorna as informações do faturamento de um RPS.
	 *
	 * @param ObterRPSRequest $ObterRPSRequest Solicita as informações de um RPS.
	 * @return ObterRPSResponse Informações de um RPS faturado.
	 */
	public function ObterRPS(ObterRPSRequest $ObterRPSRequest): ?ObterRPSResponse {
		$res = $this->_Call('ObterRPS',Array(
			$ObterRPSRequest
		));
		return $this->_Cast($res, ObterRPSResponse::class);
	}

	/**
	 * Retorna as informações do recibo.
	 *
	 * @param ObterReciboRequest $ObterReciboRequest Solicita as informaçoes de um recibo
	 * @return ObterReciboResponse Resposta da solicitação de Informações do recibo
	 */
	public function ObterRecibo(ObterReciboRequest $ObterReciboRequest): ?ObterReciboResponse {
		$res = $this->_Call('ObterRecibo',Array(
			$ObterReciboRequest
		));
		return $this->_Cast($res, ObterReciboResponse::class);
	}

	/**
	 * Retorna as informações de um Demonstrativo de nota.
	 *
	 * @param ObterDemonstRequest $ObterDemonstRequest Solicita as informações de um Demonstrativo.
	 * @return ObterDemonstResponse Informações de um Demonstrativo.
	 */
	public function ObterDemonst(ObterDemonstRequest $ObterDemonstRequest): ?ObterDemonstResponse {
		$res = $this->_Call('ObterDemonst',Array(
			$ObterDemonstRequest
		));
		return $this->_Cast($res, ObterDemonstResponse::class);
	}

	/**
	 * Retorna as informações de uma Ordem de Serviço.
	 *
	 * @param ObterOsRequest $ObterOsRequest Solicita as informações de uma Ordem de Serviço
	 * @return ObterOsResponse Informações da Ordem de Serviço faturada.
	 */
	public function ObterOS(ObterOsRequest $ObterOsRequest): ?ObterOsResponse {
		$res = $this->_Call('ObterOS',Array(
			$ObterOsRequest
		));
		return $this->_Cast($res, ObterOsResponse::class);
	}
}
