<?php

namespace OmieLib\Crm\Usuarios\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Usuarios\Cadastros;
use OmieLib\Crm\Usuarios\ListaUsuarios;
use OmieLib\Crm\Usuarios\Request\ObterUsuariosRequest;
use OmieLib\Crm\Usuarios\Request\UscrmListarRequest;
use OmieLib\Crm\Usuarios\UsuariosJsonClient;

/**
 * Resposta da solicitação do cadastro de usuários / vendedores / prevendas.
 *
 * @pw_element listaUsuariosArray $listaUsuarios cadastro de usuário.
 * @pw_complex obterUsuariosResponse
 */
class ObterUsuariosResponse{
	/**
	 * cadastro de usuário.
	 *
	 * @var ListaUsuarios[]
	 */
	public array $listaUsuarios;
}
