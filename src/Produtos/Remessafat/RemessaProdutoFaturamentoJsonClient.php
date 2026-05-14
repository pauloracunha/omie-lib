<?php

namespace OmieLib\Produtos\Remessafat;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Remessafat\Request\RemessaFatCancelarRequest;
use OmieLib\Produtos\Remessafat\Request\RemessaFatConcluirRequest;
use OmieLib\Produtos\Remessafat\Request\RemessaFatConferirRequest;
use OmieLib\Produtos\Remessafat\Request\RemessaFatDuplicarRequest;
use OmieLib\Produtos\Remessafat\Response\RemessaFatCancelarResponse;
use OmieLib\Produtos\Remessafat\Response\RemessaFatConcluirResponse;
use OmieLib\Produtos\Remessafat\Response\RemessaFatConferirResponse;
use OmieLib\Produtos\Remessafat\Response\RemessaFatDuplicarResponse;

/**
 * @service RemessaProdutoFaturamentoJsonClient
 * @author omie
 */
class RemessaProdutoFaturamentoJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/remessafat/';

	/**
	 * Concluir remessa de produto
	 *
	 * @param RemessaFatConcluirRequest $remessaFatConcluirRequest Requisição para conclusão de remessa de produto
	 * @return RemessaFatConcluirResponse Resposta da conclusão de remessa de produto
	 */
	public function ConcluirRemessa(RemessaFatConcluirRequest $remessaFatConcluirRequest): RemessaFatConcluirResponse{
		return $this->_Call('ConcluirRemessa',Array(
			$remessaFatConcluirRequest
		));
	}

	/**
	 * Conferir remessa de produto
	 *
	 * @param RemessaFatConferirRequest $remessaFatConferirRequest Requisição para conferência de remessa de produto
	 * @return RemessaFatConferirResponse Resposta da conferência de remessa de produto
	 */
	public function ConferirRemessa(RemessaFatConferirRequest $remessaFatConferirRequest): RemessaFatConferirResponse{
		return $this->_Call('ConferirRemessa',Array(
			$remessaFatConferirRequest
		));
	}

	/**
	 * Cancelar remessa de produto
	 *
	 * @param RemessaFatCancelarRequest $remessaFatCancelarRequest Requisição para cancelamento de remessa de produto
	 * @return RemessaFatCancelarResponse Resposta do cancelamento de remessa de produto
	 */
	public function CancelarRemessa(RemessaFatCancelarRequest $remessaFatCancelarRequest): RemessaFatCancelarResponse{
		return $this->_Call('CancelarRemessa',Array(
			$remessaFatCancelarRequest
		));
	}

	/**
	 * Duplicar remessa de produto
	 *
	 * @param RemessaFatDuplicarRequest $remessaFatDuplicarRequest Requisição para duplicação de remessa de produto
	 * @return RemessaFatDuplicarResponse Resposta da duplicidade de remessa de produto
	 */
	public function DuplicarRemessa(RemessaFatDuplicarRequest $remessaFatDuplicarRequest): RemessaFatDuplicarResponse{
		return $this->_Call('DuplicarRemessa',Array(
			$remessaFatDuplicarRequest
		));
	}
}
