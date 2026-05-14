<?php

namespace OmieLib\Crm\Usuarios\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Usuarios\Cadastros;
use OmieLib\Crm\Usuarios\ListaUsuarios;
use OmieLib\Crm\Usuarios\Request\ObterUsuariosRequest;
use OmieLib\Crm\Usuarios\Request\UscrmListarRequest;
use OmieLib\Crm\Usuarios\UsuariosJsonClient;

/**
 * Resposta da solicitação da listagem de usuários / vendedores / prevendas.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element cadastrosArray $cadastros Lista os cadastros encontrados.
 * @pw_complex uscrmListarResponse
 */
class UscrmListarResponse{
	/**
	 * Número da página retornada
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Número total de páginas
	 *
	 * @var integer
	 */
	public int $total_de_paginas;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $registros;
	/**
	 * total de registros encontrados
	 *
	 * @var integer
	 */
	public int $total_de_registros;
	/**
	 * Lista os cadastros encontrados.
	 *
	 * @var Cadastros[]
	 */
	public array $cadastros;
}
