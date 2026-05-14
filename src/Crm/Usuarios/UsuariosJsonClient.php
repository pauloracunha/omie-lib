<?php

namespace OmieLib\Crm\Usuarios;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Crm\Usuarios\Request\ObterUsuariosRequest;
use OmieLib\Crm\Usuarios\Request\UscrmListarRequest;
use OmieLib\Crm\Usuarios\Response\ObterUsuariosResponse;
use OmieLib\Crm\Usuarios\Response\UscrmListarResponse;

/**
 * @service usuariosJsonClient
 * @author omie
 */
class UsuariosJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='crm/usuarios/';

	/**
	 * Usuários da oportunidade.
	 *
	 * @param UscrmListarRequest $uscrmListarRequest Solicitação da listagem de usuários / vendedores / prevendas.
	 * @return UscrmListarResponse Resposta da solicitação da listagem de usuários / vendedores / prevendas.
	 */
	public function ListarUsuarios(UscrmListarRequest $uscrmListarRequest): ?UscrmListarResponse {
		$res = $this->_Call('ListarUsuarios',Array(
			$uscrmListarRequest
		));
		return $this->_Cast($res, UscrmListarResponse::class);
	}

	/**
	 * Usuário da oportunidade.
	 *
	 * @param ObterUsuariosRequest $obterUsuariosRequest Solicitação do cadastro de usuários / vendedores / prevendas.
	 * @return ObterUsuariosResponse Resposta da solicitação do cadastro de usuários / vendedores / prevendas.
	 */
	public function ObterUsuarios(ObterUsuariosRequest $obterUsuariosRequest): ?ObterUsuariosResponse {
		$res = $this->_Call('ObterUsuarios',Array(
			$obterUsuariosRequest
		));
		return $this->_Cast($res, ObterUsuariosResponse::class);
	}
}
