<?php

namespace OmieLib\Estoque\Ajuste;

use OmieLib\Common\OmieFail;

/**
 * Resposta da solicitação de listagem de ajuste de estoque.
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $total_de_paginas Total de páginas encontradas.
 * @pw_element integer $registros Número de registros retornados
 * @pw_element integer $total_de_registros Total de registros encontrados.
 * @pw_element ajuste_estoque_listaArray $ajuste_estoque_lista Estoque mínimo para o produto.
 * @pw_complex estoque_mov_listar_response
 */
class Estoque_mov_listar_response{
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
	 * Estoque mínimo para o produto.
	 *
	 * @var Ajuste_estoque_lista[]
	 */
	public array $ajuste_estoque_lista;
}
