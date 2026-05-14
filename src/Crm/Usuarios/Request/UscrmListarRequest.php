<?php

namespace OmieLib\Crm\Usuarios\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Usuarios\Cadastros;
use OmieLib\Crm\Usuarios\ListaUsuarios;
use OmieLib\Crm\Usuarios\Response\ObterUsuariosResponse;
use OmieLib\Crm\Usuarios\Response\UscrmListarResponse;
use OmieLib\Crm\Usuarios\UsuariosJsonClient;

/**
 * Solicitação da listagem de usuários / vendedores / prevendas.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $apenas_importado_api Exibir apenas os registros gerados pela API
 * @pw_element string $ordenar_por Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $ordem_decrescente Se a lista será apresentada em ordem decrescente.
 * @pw_element string $email_usuario E-Mail do usuário.
 * @pw_element integer $codigo_usuario Código do usuário.
 * @pw_element string $apenas_ativos Retornar apenas usuários ativos (S/N).
 * @pw_complex uscrmListarRequest
 */
class UscrmListarRequest{
	/**
	 * Número da página retornada
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $registros_por_pagina;
	/**
	 * Exibir apenas os registros gerados pela API
	 *
	 * @var string
	 */
	public string $apenas_importado_api;
	/**
	 * Ordem de exibição dos dados. Padrão: Código.
	 *
	 * @var string
	 */
	public string $ordenar_por;
	/**
	 * Se a lista será apresentada em ordem decrescente.
	 *
	 * @var string
	 */
	public string $ordem_decrescente;
	/**
	 * E-Mail do usuário.
	 *
	 * @var string
	 */
	public string $email_usuario;
	/**
	 * Código do usuário.
	 *
	 * @var integer
	 */
	public int $codigo_usuario;
	/**
	 * Retornar apenas usuários ativos (S/N).
	 *
	 * @var string
	 */
	public string $apenas_ativos;
}
