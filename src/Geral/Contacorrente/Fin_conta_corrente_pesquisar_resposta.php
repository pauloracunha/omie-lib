<?php

namespace OmieLib\Geral\Contacorrente;

use OmieLib\Common\OmieFail;

/**
 * DEPRECATED
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $total_de_paginas Total de páginas encontradas.
 * @pw_element integer $registros Número de registros retornados
 * @pw_element integer $total_de_registros Total de registros encontrados.
 * @pw_element conta_corrente_listaArray $conta_corrente_lista Lista de contas correntes
 * @pw_complex fin_conta_corrente_pesquisar_resposta
 */
class Fin_conta_corrente_pesquisar_resposta{
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
	 * Lista de contas correntes
	 *
	 * @var Conta_corrente_lista[]
	 */
	public array $conta_corrente_lista;
}
