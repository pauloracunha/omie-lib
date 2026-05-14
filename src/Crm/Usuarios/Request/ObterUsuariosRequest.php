<?php

namespace OmieLib\Crm\Usuarios\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Usuarios\Cadastros;
use OmieLib\Crm\Usuarios\ListaUsuarios;
use OmieLib\Crm\Usuarios\Response\ObterUsuariosResponse;
use OmieLib\Crm\Usuarios\Response\UscrmListarResponse;
use OmieLib\Crm\Usuarios\UsuariosJsonClient;

/**
 * Solicitação do cadastro de usuários / vendedores / prevendas.
 *
 * @pw_element string $cExibirTodos Exibe todos os usuários. (S/N).<BR><BR><BR>O padrão é "N"
 * @pw_complex obterUsuariosRequest
 */
class ObterUsuariosRequest{
	/**
	 * Exibe todos os usuários. (S/N).<BR><BR><BR>O padrão é "N"
	 *
	 * @var string
	 */
	public string $cExibirTodos;
}
