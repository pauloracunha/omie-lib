<?php

namespace OmieLib\Produtos\Notaentradafat;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Notaentradafat\Request\NefatCancelarRequest;
use OmieLib\Produtos\Notaentradafat\Request\NefatConcluirRequest;
use OmieLib\Produtos\Notaentradafat\Request\NefatConferirRequest;
use OmieLib\Produtos\Notaentradafat\Request\NefatDuplicarRequest;
use OmieLib\Produtos\Notaentradafat\Response\NefatCancelarResponse;
use OmieLib\Produtos\Notaentradafat\Response\NefatConcluirResponse;
use OmieLib\Produtos\Notaentradafat\Response\NefatConferirResponse;
use OmieLib\Produtos\Notaentradafat\Response\NefatDuplicarResponse;

/**
 * @service NotaEntradaFaturamentoJsonClient
 * @author omie
 */
class NotaEntradaFaturamentoJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/notaentradafat/';

	/**
	 * Duplicar nota de entrada
	 *
	 * @param NefatDuplicarRequest $nefatDuplicarRequest Solicitação de duplicação de nota de entrada
	 * @return NefatDuplicarResponse Resposta da duplicação da nota de entrada
	 */
	public function DuplicarNotaEnt(NefatDuplicarRequest $nefatDuplicarRequest): ?NefatDuplicarResponse {
		$res = $this->_Call('DuplicarNotaEnt',Array(
			$nefatDuplicarRequest
		));
		return $this->_Cast($res, NefatDuplicarResponse::class);
	}

	/**
	 * Concluir nota de entrada
	 *
	 * @param NefatConcluirRequest $nefatConcluirRequest Solicitação de conclusão de nota de entrada
	 * @return NefatConcluirResponse Resposta da conclusão da nota de entrada
	 */
	public function ConcluirNotaEnt(NefatConcluirRequest $nefatConcluirRequest): ?NefatConcluirResponse {
		$res = $this->_Call('ConcluirNotaEnt',Array(
			$nefatConcluirRequest
		));
		return $this->_Cast($res, NefatConcluirResponse::class);
	}

	/**
	 * Cancelar nota de entrada
	 *
	 * @param NefatCancelarRequest $nefatCancelarRequest Solicitação de cancelamento de nota de entrada
	 * @return NefatCancelarResponse Resposta de cancelamento da nota de entrada
	 */
	public function CancelarNotaEnt(NefatCancelarRequest $nefatCancelarRequest): ?NefatCancelarResponse {
		$res = $this->_Call('CancelarNotaEnt',Array(
			$nefatCancelarRequest
		));
		return $this->_Cast($res, NefatCancelarResponse::class);
	}

	/**
	 * Conferir nota de entrada
	 *
	 * @param NefatConferirRequest $nefatConferirRequest Solicitação de conferência de nota de entrada
	 * @return NefatConferirResponse Resposta da conferência da nota de entrada
	 */
	public function ConferirNotaEnt(NefatConferirRequest $nefatConferirRequest): ?NefatConferirResponse {
		$res = $this->_Call('ConferirNotaEnt',Array(
			$nefatConferirRequest
		));
		return $this->_Cast($res, NefatConferirResponse::class);
	}
}
