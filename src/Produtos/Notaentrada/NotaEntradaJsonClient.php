<?php

namespace OmieLib\Produtos\Notaentrada;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Notaentrada\Request\NeAlterarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeConsultarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeExcluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeIncluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeListarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeStatusRequest;
use OmieLib\Produtos\Notaentrada\Response\NeAlterarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeConsultarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeExcluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeIncluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeListarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeStatusResponse;

/**
 * @service NotaEntradaJsonClient
 * @author omie
 */
class NotaEntradaJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/notaentrada/';

	/**
	 * Incluir nota de entrada
	 *
	 * @param NeIncluirRequest $neIncluirRequest Solicitação de inclusão da nota de entrada
	 * @return NeIncluirResponse Resposta da solicitação de inclusão de nota de entrada<BR>
	 */
	public function IncluirNotaEnt(NeIncluirRequest $neIncluirRequest): ?NeIncluirResponse {
		$res = $this->_Call('IncluirNotaEnt',Array(
			$neIncluirRequest
		));
		return $this->_Cast($res, NeIncluirResponse::class);
	}

	/**
	 * Alterar nota de entrada
	 *
	 * @param NeAlterarRequest $neAlterarRequest Solicitação de alteração da nota de entrada
	 * @return NeAlterarResponse Resposta da solicitação de alteração de nota de entrada
	 */
	public function AlterarNotaEnt(NeAlterarRequest $neAlterarRequest): ?NeAlterarResponse {
		$res = $this->_Call('AlterarNotaEnt',Array(
			$neAlterarRequest
		));
		return $this->_Cast($res, NeAlterarResponse::class);
	}

	/**
	 * Consultar nota de entrada
	 *
	 * @param NeConsultarRequest $neConsultarRequest Solicitação de consulta da nota de entrada
	 * @return NeConsultarResponse Resposta da solicitação de consulta de nota de entrada<BR>
	 */
	public function ConsultarNotaEnt(NeConsultarRequest $neConsultarRequest): ?NeConsultarResponse {
		$res = $this->_Call('ConsultarNotaEnt',Array(
			$neConsultarRequest
		));
		return $this->_Cast($res, NeConsultarResponse::class);
	}

	/**
	 * Listagem de nota de entrada
	 *
	 * @param NeListarRequest $neListarRequest Solicitação de listagem da nota de entrada
	 * @return NeListarResponse Resposta da solicitação de listagem de nota de entrada
	 */
	public function ListarNotaEnt(NeListarRequest $neListarRequest): ?NeListarResponse {
		$res = $this->_Call('ListarNotaEnt',Array(
			$neListarRequest
		));
		return $this->_Cast($res, NeListarResponse::class);
	}

	/**
	 * Status de nota de entrada
	 *
	 * @param NeStatusRequest $neStatusRequest Solicitação de consulta do status da nota de entrada
	 * @return NeStatusResponse Resposta da solicitação de consulta do status da nota de entrada
	 */
	public function StatusNotaEnt(NeStatusRequest $neStatusRequest): ?NeStatusResponse {
		$res = $this->_Call('StatusNotaEnt',Array(
			$neStatusRequest
		));
		return $this->_Cast($res, NeStatusResponse::class);
	}

	/**
	 * Excluir nota de entrada
	 *
	 * @param NeExcluirRequest $neExcluirRequest Solicitação de exclusão da nota de entrada
	 * @return NeExcluirResponse Resposta da exclusão da nota de entrada
	 */
	public function ExcluirNotaEnt(NeExcluirRequest $neExcluirRequest): ?NeExcluirResponse {
		$res = $this->_Call('ExcluirNotaEnt',Array(
			$neExcluirRequest
		));
		return $this->_Cast($res, NeExcluirResponse::class);
	}
}
