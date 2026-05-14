<?php

namespace OmieLib\Geral\Origempedido;

use OmieLib\Common\OmieFail;

/**
 * Resposta da solicitação da listagem de origens de pedido.
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $total_de_paginas Total de páginas encontradas.
 * @pw_element integer $registros Número de registros retornados
 * @pw_element integer $total_de_registros Total de registros encontrados.
 * @pw_element origemArray $origem Origens de pedido.
 * @pw_complex origem_ped_listar_response
 */
class Origem_ped_listar_response{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Total de páginas encontradas.
	 *
	 * @var integer
	 */
	public int $total_de_paginas;
	/**
	 * Número de registros retornados
	 *
	 * @var integer
	 */
	public int $registros;
	/**
	 * Total de registros encontrados.
	 *
	 * @var integer
	 */
	public int $total_de_registros;
	/**
	 * Origens de pedido.
	 *
	 * @var Origem[]
	 */
	public array $origem;
}
