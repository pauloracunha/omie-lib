<?php

namespace OmieLib\Geral\Empresas;

use OmieLib\Common\OmieFail;

/**
 * Lista de empresas cadastradas no omie.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element empresas_cadastroArray $empresas_cadastro Cadastro de Empresas
 * @pw_complex empresas_list_response
 */
class Empresas_list_response{
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
	 * Cadastro de Empresas
	 *
	 * @var Empresas_cadastro[]
	 */
	public array $empresas_cadastro;
}
