<?php

namespace OmieLib\Geral\Tipocc;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Geral\Tipocc\Request\TipoCCListarRequest;
use OmieLib\Geral\Tipocc\Response\TipoCCListarResponse;

/**
 * @service TipoCCCadastroJsonClient
 * @author omie
 */
class TipoCCCadastroJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/tipocc/';

	/**
	 * Listar os tipos de contas correntes.
	 *
	 * @param TipoCCListarRequest $tipoCCListarRequest Solicitação da listagem de tipos de conta corrente.
	 * @return TipoCCListarResponse Resposta da solicitação da listagem de tipos de conta corrente.
	 */
	public function ListarTiposCC(TipoCCListarRequest $tipoCCListarRequest): TipoCCListarResponse{
		return $this->_Call('ListarTiposCC',Array(
			$tipoCCListarRequest
		));
	}
}
