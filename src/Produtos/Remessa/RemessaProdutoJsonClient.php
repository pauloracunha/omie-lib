<?php

namespace OmieLib\Produtos\Remessa;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Remessa\Request\RemessaDevolverRequest;
use OmieLib\Produtos\Remessa\Request\RemessaListarRequest;
use OmieLib\Produtos\Remessa\Request\RemessaStatusRequest;
use OmieLib\Produtos\Remessa\Response\RemessaDevolverResponse;
use OmieLib\Produtos\Remessa\Response\RemessaListarResponse;
use OmieLib\Produtos\Remessa\Response\RemessaStatusResponse;

/**
 * @service RemessaProdutoJsonClient
 * @author omie
 */
class RemessaProdutoJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/remessa/';

	/**
	 * Inclui uma nova remessa
	 *
	 * @param Remessas $remessas Cadastro de Remessa&nbsp;
	 * @return RemessaStatus Status da Remessa no Omie
	 */
	public function IncluirRemessa(Remessas $remessas): ?RemessaStatus {
		$res = $this->_Call('IncluirRemessa',Array(
			$remessas
		));
		return $this->_Cast($res, RemessaStatus::class);
	}

	/**
	 * Altera uma remessa
	 *
	 * @param Remessas $remessas Cadastro de Remessa&nbsp;
	 * @return RemessaStatus Status da Remessa no Omie
	 */
	public function AlterarRemessa(Remessas $remessas): ?RemessaStatus {
		$res = $this->_Call('AlterarRemessa',Array(
			$remessas
		));
		return $this->_Cast($res, RemessaStatus::class);
	}

	/**
	 * Consulta uma remessa.
	 *
	 * @param RemessaChave $remessaChave Chave para Consulta / Exclusão
	 * @return Remessas Cadastro de Remessa&nbsp;
	 */
	public function ConsultarRemessa(RemessaChave $remessaChave): ?Remessas {
		$res = $this->_Call('ConsultarRemessa',Array(
			$remessaChave
		));
		return $this->_Cast($res, Remessas::class);
	}

	/**
	 * Lista as remessas cadastradas.
	 *
	 * @param RemessaListarRequest $remessaListarRequest Solicitação de listagem de remessa.
	 * @return RemessaListarResponse Resposta da solicitação de listagem de remessa.
	 */
	public function ListarRemessas(RemessaListarRequest $remessaListarRequest): ?RemessaListarResponse {
		$res = $this->_Call('ListarRemessas',Array(
			$remessaListarRequest
		));
		return $this->_Cast($res, RemessaListarResponse::class);
	}

	/**
	 * Retorna o status da remessa
	 *
	 * @param RemessaStatusRequest $remessaStatusRequest Solicitação de consulta do Status da Remessa.
	 * @return RemessaStatusResponse Resposta da solicitação de consulta do Status da Remessa.
	 */
	public function StatusRemessa(RemessaStatusRequest $remessaStatusRequest): ?RemessaStatusResponse {
		$res = $this->_Call('StatusRemessa',Array(
			$remessaStatusRequest
		));
		return $this->_Cast($res, RemessaStatusResponse::class);
	}

	/**
	 * Devolução de uma remessa.
	 *
	 * @param RemessaDevolverRequest $remessaDevolverRequest Solicitação de devolução de uma remessa.
	 * @return RemessaDevolverResponse Resposta da solicitação de devolução de uma remessa.
	 */
	public function DevolverRemessa(RemessaDevolverRequest $remessaDevolverRequest): ?RemessaDevolverResponse {
		$res = $this->_Call('DevolverRemessa',Array(
			$remessaDevolverRequest
		));
		return $this->_Cast($res, RemessaDevolverResponse::class);
	}
}
