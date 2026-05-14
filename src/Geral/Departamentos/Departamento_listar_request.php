<?php

namespace OmieLib\Geral\Departamentos;

use OmieLib\Common\OmieFail;

/**
 * Filtro para pesquisa
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $registros_por_pagina Número de registros retornados
 * @pw_element string $apenas_importado_api DEPRECATED
 * @pw_element string $ordenar_por DEPRECATED
 * @pw_element string $ordem_descrescente DEPRECATED
 * @pw_element string $filtrar_por_data_de DEPRECATED
 * @pw_element string $filtrar_por_data_ate DEPRECATED
 * @pw_element string $filtrar_apenas_inclusao DEPRECATED
 * @pw_element string $filtrar_apenas_alteracao DEPRECATED
 * @pw_complex departamento_listar_request
 */
class Departamento_listar_request{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Número de registros retornados
	 *
	 * @var integer
	 */
	public int $registros_por_pagina;
	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public string $apenas_importado_api;
	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public string $ordenar_por;
	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public string $ordem_descrescente;
	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public string $filtrar_por_data_de;
	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public string $filtrar_por_data_ate;
	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public string $filtrar_apenas_inclusao;
	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public string $filtrar_apenas_alteracao;
}
