<?php

namespace OmieLib\Crm\Usuarios;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Usuarios\Request\ObterUsuariosRequest;
use OmieLib\Crm\Usuarios\Request\UscrmListarRequest;
use OmieLib\Crm\Usuarios\Response\ObterUsuariosResponse;
use OmieLib\Crm\Usuarios\Response\UscrmListarResponse;

/**
 * cadastro de usuário.
 *
 * @pw_element integer $nCodigo Código do usuário / vendedor / prevenda.
 * @pw_element string $cNome Nome do usuário.
 * @pw_element string $cEmail Email do usuário.
 * @pw_element decimal $nMeta Meta anual individual do usuário.
 * @pw_element string $cTelefone Telefone do usuário.
 * @pw_element string $cCelular Celular do usuário.
 * @pw_complex listaUsuarios
 */
class ListaUsuarios{
	/**
	 * Código do usuário / vendedor / prevenda.
	 *
	 * @var integer
	 */
	public int $nCodigo;
	/**
	 * Nome do usuário.
	 *
	 * @var string
	 */
	public string $cNome;
	/**
	 * Email do usuário.
	 *
	 * @var string
	 */
	public string $cEmail;
	/**
	 * Meta anual individual do usuário.
	 *
	 * @var decimal
	 */
	public float $nMeta;
	/**
	 * Telefone do usuário.
	 *
	 * @var string
	 */
	public string $cTelefone;
	/**
	 * Celular do usuário.
	 *
	 * @var string
	 */
	public string $cCelular;
}
