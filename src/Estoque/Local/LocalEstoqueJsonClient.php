<?php

namespace OmieLib\Estoque\Local;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Local\Request\AlterarLocalRequest;
use OmieLib\Estoque\Local\Request\IncluirLocalRequest;
use OmieLib\Estoque\Local\Request\LocaisListarRequest;
use OmieLib\Estoque\Local\Response\AlterarLocalResponse;
use OmieLib\Estoque\Local\Response\IncluirLocalResponse;
use OmieLib\Estoque\Local\Response\LocaisListarResponse;

/**
 * @service LocalEstoqueJsonClient
 * @author omie
 */
class LocalEstoqueJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='estoque/local/';

	/**
	 * Lista os Locais de Estoque encontrados.
	 *
	 * @param LocaisListarRequest $locaisListarRequest Solicitação de listagem de Locais de Estoque.
	 * @return LocaisListarResponse Resposta da solicitação de listagem de Locais de Estoque.
	 */
	public function ListarLocaisEstoque(LocaisListarRequest $locaisListarRequest): ?LocaisListarResponse {
		$res = $this->_Call('ListarLocaisEstoque',Array(
			$locaisListarRequest
		));
		return $this->_Cast($res, LocaisListarResponse::class);
	}

	/**
	 * Adiciona um local de estoque
	 *
	 * @param IncluirLocalRequest $IncluirLocalRequest Solicitação de inclusão de Local de Estoque.
	 * @return IncluirLocalResponse Resposta da inclusão de Local de Estoque
	 */
	public function IncluirLocalEstoque(IncluirLocalRequest $IncluirLocalRequest): ?IncluirLocalResponse {
		$res = $this->_Call('IncluirLocalEstoque',Array(
			$IncluirLocalRequest
		));
		return $this->_Cast($res, IncluirLocalResponse::class);
	}

	/**
	 * Alterar local de Estoque
	 *
	 * @param AlterarLocalRequest $alterarLocalRequest Requisição para alteração do Local de Estoque cadastrado.
	 * @return AlterarLocalResponse Campos para Resposta na Alteração do Response
	 */
	public function AlterarLocalEstoque(AlterarLocalRequest $alterarLocalRequest): ?AlterarLocalResponse {
		$res = $this->_Call('AlterarLocalEstoque',Array(
			$alterarLocalRequest
		));
		return $this->_Cast($res, AlterarLocalResponse::class);
	}
}
