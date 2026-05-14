<?php

namespace OmieLib\Geral\Bancos;

use OmieLib\Common\OmieFail;

/**
 * Lista de produtos encontrados no omie.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element fin_banco_cadastroArray $fin_banco_cadastro Cadastro de bancos / instituições financeiras.
 * @pw_complex fin_bancos_list_response
 */
class Fin_bancos_list_response{
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
	 * Cadastro de bancos / instituições financeiras.
	 *
	 * @var Fin_banco_cadastro[]
	 */
	public array $fin_banco_cadastro;
}
