<?php

namespace OmieLib\Geral\Empresas;

use OmieLib\Common\OmieFail;

/**
 * Lista as empresas cadastradas
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $apenas_importado_api DEPRECATED
 * @pw_element string $ordenar_por DEPRECATED
 * @pw_element string $ordem_descrescente DEPRECATED
 * @pw_element string $filtrar_por_data_de DEPRECATED
 * @pw_element string $filtrar_por_data_ate DEPRECATED
 * @pw_element string $filtrar_apenas_inclusao DEPRECATED
 * @pw_element string $filtrar_apenas_alteracao DEPRECATED
 * @pw_complex empresas_list_request
 */
class Empresas_list_request{
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
