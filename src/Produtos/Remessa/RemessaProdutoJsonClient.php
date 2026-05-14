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
	public function IncluirRemessa(Remessas $remessas): RemessaStatus{
		return $this->_Call('IncluirRemessa',Array(
			$remessas
		));
	}

	/**
	 * Altera uma remessa
	 *
	 * @param Remessas $remessas Cadastro de Remessa&nbsp;
	 * @return RemessaStatus Status da Remessa no Omie
	 */
	public function AlterarRemessa(Remessas $remessas): RemessaStatus{
		return $this->_Call('AlterarRemessa',Array(
			$remessas
		));
	}

	/**
	 * Consulta uma remessa.
	 *
	 * @param RemessaChave $remessaChave Chave para Consulta / Exclusão
	 * @return Remessas Cadastro de Remessa&nbsp;
	 */
	public function ConsultarRemessa(RemessaChave $remessaChave): Remessas{
		return $this->_Call('ConsultarRemessa',Array(
			$remessaChave
		));
	}

	/**
	 * Lista as remessas cadastradas.
	 *
	 * @param RemessaListarRequest $remessaListarRequest Solicitação de listagem de remessa.
	 * @return RemessaListarResponse Resposta da solicitação de listagem de remessa.
	 */
	public function ListarRemessas(RemessaListarRequest $remessaListarRequest): RemessaListarResponse{
		return $this->_Call('ListarRemessas',Array(
			$remessaListarRequest
		));
	}

	/**
	 * Retorna o status da remessa
	 *
	 * @param RemessaStatusRequest $remessaStatusRequest Solicitação de consulta do Status da Remessa.
	 * @return RemessaStatusResponse Resposta da solicitação de consulta do Status da Remessa.
	 */
	public function StatusRemessa(RemessaStatusRequest $remessaStatusRequest): RemessaStatusResponse{
		return $this->_Call('StatusRemessa',Array(
			$remessaStatusRequest
		));
	}

	/**
	 * Devolução de uma remessa.
	 *
	 * @param RemessaDevolverRequest $remessaDevolverRequest Solicitação de devolução de uma remessa.
	 * @return RemessaDevolverResponse Resposta da solicitação de devolução de uma remessa.
	 */
	public function DevolverRemessa(RemessaDevolverRequest $remessaDevolverRequest): RemessaDevolverResponse{
		return $this->_Call('DevolverRemessa',Array(
			$remessaDevolverRequest
		));
	}
}
