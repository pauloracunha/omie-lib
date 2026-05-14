<?php

namespace OmieLib\Financas\Mf;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Financas\Mf\Request\MfListarRequest;
use OmieLib\Financas\Mf\Response\MfListarResponse;

/**
 * @service MovimentosFinanceirosJsonClient
 * @author omie
 */
class MovimentosFinanceirosJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='financas/mf/';

	/**
	 * @param MfListarRequest $mfListarRequest Solicitação de Listagem da movimentação financeira (Contas a Pagar, Contas a Receber e Lançamentos do Conta Corrente).
	 * @return MfListarResponse Resultado da solicitação de Listagem da movimentação financeira (Contas a Pagar, Contas a Receber e Lançamentos do Conta Corrente).
	 */
	public function ListarMovimentos(MfListarRequest $mfListarRequest): ?MfListarResponse {
		$res = $this->_Call('ListarMovimentos',Array(
			$mfListarRequest
		));
		return $this->_Cast($res, MfListarResponse::class);
	}
}
