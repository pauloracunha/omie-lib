<?php

namespace OmieLib\Financas\Pix;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Financas\Pix\Request\CancelarPixRequest;
use OmieLib\Financas\Pix\Request\GerarPixRequest;
use OmieLib\Financas\Pix\Request\GerarQrCodePixRequest;
use OmieLib\Financas\Pix\Request\ListarPixRequest;
use OmieLib\Financas\Pix\Request\ListarStatusPixRequest;
use OmieLib\Financas\Pix\Request\ObterPixRequest;
use OmieLib\Financas\Pix\Request\ObterStatusPixRequest;
use OmieLib\Financas\Pix\Response\CancelarPixResponse;
use OmieLib\Financas\Pix\Response\GerarPixResponse;
use OmieLib\Financas\Pix\Response\GerarQrCodePixResponse;
use OmieLib\Financas\Pix\Response\ListarPixResponse;
use OmieLib\Financas\Pix\Response\ListarStatusPixResponse;
use OmieLib\Financas\Pix\Response\ObterPixResponse;
use OmieLib\Financas\Pix\Response\ObterStatusPixResponse;

/**
 * @service PIXJsonClient
 * @author omie
 */
class PIXJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='financas/pix/';

	/**
	 * Gera o QrCode de um PIX.
	 *
	 * @param GerarPixRequest $GerarPixRequest Gera um QrCode para pagamento PIX.
	 * @return GerarPixResponse Resposta da geração do QrCode PIX.
	 */
	public function GerarPix(GerarPixRequest $GerarPixRequest): ?GerarPixResponse {
		$res = $this->_Call('GerarPix',Array(
			$GerarPixRequest
		));
		return $this->_Cast($res, GerarPixResponse::class);
	}

	/**
	 * Obtém o Status de um PIX.
	 *
	 * @param ObterStatusPixRequest $ObterStatusPixRequest Solicitação de Status do PIX.
	 * @return ObterStatusPixResponse Resposta da solicitação de Status do PIX.
	 */
	public function ObterStatusPix(ObterStatusPixRequest $ObterStatusPixRequest): ?ObterStatusPixResponse {
		$res = $this->_Call('ObterStatusPix',Array(
			$ObterStatusPixRequest
		));
		return $this->_Cast($res, ObterStatusPixResponse::class);
	}

	/**
	 * Obtém a lista de Status dos PIX.
	 *
	 * @param ListarStatusPixRequest $ListarStatusPixRequest Solicitação da listagem de status do PIX.
	 * @return ListarStatusPixResponse Resposta da solicitação de listagem de Status do PIX.
	 */
	public function ListarStatusPix(ListarStatusPixRequest $ListarStatusPixRequest): ?ListarStatusPixResponse {
		$res = $this->_Call('ListarStatusPix',Array(
			$ListarStatusPixRequest
		));
		return $this->_Cast($res, ListarStatusPixResponse::class);
	}

	/**
	 * Obtém a lista de detalhes dos PIX.
	 *
	 * @param ListarPixRequest $ListarPixRequest Solicitação da listagem de detalhes do PIX.
	 * @return ListarPixResponse Resposta da solicitação de listagem de detalhes do PIX.
	 */
	public function ListarPix(ListarPixRequest $ListarPixRequest): ?ListarPixResponse {
		$res = $this->_Call('ListarPix',Array(
			$ListarPixRequest
		));
		return $this->_Cast($res, ListarPixResponse::class);
	}

	/**
	 * Obtém os dados doPIX.
	 *
	 * @param ObterPixRequest $ObterPixRequest Solicitação dados do PIX.
	 * @return ObterPixResponse Detalhes do PIX.
	 */
	public function ObterPix(ObterPixRequest $ObterPixRequest): ?ObterPixResponse {
		$res = $this->_Call('ObterPix',Array(
			$ObterPixRequest
		));
		return $this->_Cast($res, ObterPixResponse::class);
	}

	/**
	 * Efetua o cancelamento de um PIX
	 *
	 * @param CancelarPixRequest $CancelarPixRequest Solicitação do cancelamento do PIX.
	 * @return CancelarPixResponse Resposta da solicitação de cancelamento do PIX.
	 */
	public function CancelarPix(CancelarPixRequest $CancelarPixRequest): ?CancelarPixResponse {
		$res = $this->_Call('CancelarPix',Array(
			$CancelarPixRequest
		));
		return $this->_Cast($res, CancelarPixResponse::class);
	}

	/**
	 * Gera um QrCode estático para pagamentos.
	 *
	 * @param GerarQrCodePixRequest $GerarQrCodePixRequest Gera um QrCode estático para pagamentos PIX.
	 * @return GerarQrCodePixResponse Resposta da geração do QrCode estático para pagamentos,
	 */
	public function GerarQrCodePix(GerarQrCodePixRequest $GerarQrCodePixRequest): ?GerarQrCodePixResponse {
		$res = $this->_Call('GerarQrCodePix',Array(
			$GerarQrCodePixRequest
		));
		return $this->_Cast($res, GerarQrCodePixResponse::class);
	}
}
