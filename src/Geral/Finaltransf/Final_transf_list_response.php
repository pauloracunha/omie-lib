<?php

namespace OmieLib\Geral\Finaltransf;

use OmieLib\Common\OmieFail;

/**
 * Resposta da requisição de listagem de finalidades de transferência encontradas no omie.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element cadastrosArray $cadastros Cadastro de finalidades de transferências
 * @pw_complex final_transf_list_response
 */
class Final_transf_list_response{
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
	 * Cadastro de finalidades de transferências
	 *
	 * @var Cadastros[]
	 */
	public array $cadastros;
}
