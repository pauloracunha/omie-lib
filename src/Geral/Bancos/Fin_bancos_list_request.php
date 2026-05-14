<?php

namespace OmieLib\Geral\Bancos;

use OmieLib\Common\OmieFail;

/**
 * Lista os bancos / instituíções financeiras cadastrados.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $tipo Tipo da Conta Corrente (CB Conta Bancária, CX Caixinha, CV Carteira Virtual ou AC Administradora de Cartões)
 * @pw_element string $apenas_importado_api DEPRECATED
 * @pw_element string $ordenar_por DEPRECATED
 * @pw_element string $ordem_descrescente DEPRECATED
 * @pw_complex fin_bancos_list_request
 */
class Fin_bancos_list_request{
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
	 * Tipo da Conta Corrente (CB Conta Bancária, CX Caixinha, CV Carteira Virtual ou AC Administradora de Cartões)
	 *
	 * @var string
	 */
	public string $tipo;
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
}
