<?php

namespace OmieLib\Financas\Extrato;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Financas\Extrato\Request\EccListarExtratoRequest;
use OmieLib\Financas\Extrato\Response\EccListarExtratoResponse;

/**
 * @service ExtratoContaCorrenteJsonClient
 * @author omie
 */
class ExtratoContaCorrenteJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='financas/extrato/';

	/**
	 * Listagem do Extrato
	 *
	 * @param EccListarExtratoRequest $eccListarExtratoRequest Solicitação de consulta do Extrato de Conta Corrente.
	 * @return EccListarExtratoResponse Resposta da solicitação de consulta do Extrato de Conta Corrente.
	 */
	public function ListarExtrato(EccListarExtratoRequest $eccListarExtratoRequest): EccListarExtratoResponse{
		return $this->_Call('ListarExtrato',Array(
			$eccListarExtratoRequest
		));
	}
}
