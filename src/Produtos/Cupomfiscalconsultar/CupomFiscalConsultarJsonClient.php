<?php

namespace OmieLib\Produtos\Cupomfiscalconsultar;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cupomfiscalconsultar\Request\CfcItensRequest;
use OmieLib\Produtos\Cupomfiscalconsultar\Request\CfcListarRequest;
use OmieLib\Produtos\Cupomfiscalconsultar\Request\CfcPagamentosRequest;
use OmieLib\Produtos\Cupomfiscalconsultar\Response\CfcItensResponse;
use OmieLib\Produtos\Cupomfiscalconsultar\Response\CfcListarResponse;
use OmieLib\Produtos\Cupomfiscalconsultar\Response\CfcPagamentosResponse;

/**
 * @service CupomFiscalConsultarJsonClient
 * @author omie
 */
class CupomFiscalConsultarJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/cupomfiscalconsultar/';

	/**
	 * Listagem dos pagamentos dos cupons fiscais
	 *
	 * @param CfcPagamentosRequest $cfcPagamentosRequest Solicitação de Listagem dos pagamentos de cupom fiscal.
	 * @return CfcPagamentosResponse Resultado da solicitação de Listagem de pagamentos de cupom fiscal.
	 */
	public function CuponsPagamentos(CfcPagamentosRequest $cfcPagamentosRequest): ?CfcPagamentosResponse {
		$res = $this->_Call('CuponsPagamentos',Array(
			$cfcPagamentosRequest
		));
		return $this->_Cast($res, CfcPagamentosResponse::class);
	}

	/**
	 * Listagem dos itens dos cupons fiscais
	 *
	 * @param CfcItensRequest $cfcItensRequest Solicitação de Listagem dos itens de cupom fiscal.
	 * @return CfcItensResponse Resultado da solicitação de Listagem de itens de cupom fiscal.
	 */
	public function CuponsItens(CfcItensRequest $cfcItensRequest): ?CfcItensResponse {
		$res = $this->_Call('CuponsItens',Array(
			$cfcItensRequest
		));
		return $this->_Cast($res, CfcItensResponse::class);
	}

	/**
	 * Listagem dos cupons fiscais.
	 *
	 * @param CfcListarRequest $cfcListarRequest Solicitação de Listagem dos Cupons Fiscais.
	 * @return CfcListarResponse Resultado da solicitação de Listagem de cupons fiscais.
	 */
	public function CuponsFiscais(CfcListarRequest $cfcListarRequest): ?CfcListarResponse {
		$res = $this->_Call('CuponsFiscais',Array(
			$cfcListarRequest
		));
		return $this->_Cast($res, CfcListarResponse::class);
	}
}
