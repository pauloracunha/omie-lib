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
	public function DuplicarNotaEnt(NefatDuplicarRequest $nefatDuplicarRequest): NefatDuplicarResponse{
		return $this->_Call('DuplicarNotaEnt',Array(
			$nefatDuplicarRequest
		));
	}

	/**
	 * Concluir nota de entrada
	 *
	 * @param NefatConcluirRequest $nefatConcluirRequest Solicitação de conclusão de nota de entrada
	 * @return NefatConcluirResponse Resposta da conclusão da nota de entrada
	 */
	public function ConcluirNotaEnt(NefatConcluirRequest $nefatConcluirRequest): NefatConcluirResponse{
		return $this->_Call('ConcluirNotaEnt',Array(
			$nefatConcluirRequest
		));
	}

	/**
	 * Cancelar nota de entrada
	 *
	 * @param NefatCancelarRequest $nefatCancelarRequest Solicitação de cancelamento de nota de entrada
	 * @return NefatCancelarResponse Resposta de cancelamento da nota de entrada
	 */
	public function CancelarNotaEnt(NefatCancelarRequest $nefatCancelarRequest): NefatCancelarResponse{
		return $this->_Call('CancelarNotaEnt',Array(
			$nefatCancelarRequest
		));
	}

	/**
	 * Conferir nota de entrada
	 *
	 * @param NefatConferirRequest $nefatConferirRequest Solicitação de conferência de nota de entrada
	 * @return NefatConferirResponse Resposta da conferência da nota de entrada
	 */
	public function ConferirNotaEnt(NefatConferirRequest $nefatConferirRequest): NefatConferirResponse{
		return $this->_Call('ConferirNotaEnt',Array(
			$nefatConferirRequest
		));
	}
}
