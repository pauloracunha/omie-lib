<?php

namespace OmieLib\Produtos\Tpcalc;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Tpcalc\Request\TpCalcListarRequest;
use OmieLib\Produtos\Tpcalc\Response\TpCalcListarResponse;

/**
 * @service TipoCalculoJsonClient
 * @author omie
 */
class TipoCalculoJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/tpcalc/';

	/**
	 * Listar Tipo de Cálculo.
	 *
	 * @param TpCalcListarRequest $tpCalcListarRequest Solicitação da listagem de Tipo de Cálculo.
	 * @return TpCalcListarResponse Resposta da solicitação da listagem de Tipo de Cálculo.
	 */
	public function ListarTpCalc(TpCalcListarRequest $tpCalcListarRequest): TpCalcListarResponse{
		return $this->_Call('ListarTpCalc',Array(
			$tpCalcListarRequest
		));
	}
}
