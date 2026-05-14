<?php

namespace OmieLib\Geral\Meiospagamento;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Geral\Meiospagamento\Request\MeiosPagamentoPesquisarRequest;
use OmieLib\Geral\Meiospagamento\Response\MeiosPagamentoPesquisarResponse;

/**
 * @service MeiosPagamentoCadastroJsonClient
 * @author omie
 */
class MeiosPagamentoCadastroJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/meiospagamento/';

	/**
	 * Listagem de meios de pagamento
	 *
	 * @param MeiosPagamentoPesquisarRequest $MeiosPagamentoPesquisarRequest Listagem de meios de pagamentos
	 * @return MeiosPagamentoPesquisarResponse Resposta da listagem de meios de pagamentos
	 */
	public function ListarMeiosPagamento(MeiosPagamentoPesquisarRequest $MeiosPagamentoPesquisarRequest): ?MeiosPagamentoPesquisarResponse {
		$res = $this->_Call('ListarMeiosPagamento',Array(
			$MeiosPagamentoPesquisarRequest
		));
		return $this->_Cast($res, MeiosPagamentoPesquisarResponse::class);
	}
}
