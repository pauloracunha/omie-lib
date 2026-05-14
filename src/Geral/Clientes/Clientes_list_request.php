<?php

namespace OmieLib\Geral\Clientes;

use OmieLib\Common\OmieFail;

/**
 * Lista os clientes cadastrados
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $apenas_importado_api Exibir apenas os registros gerados pela API
 * @pw_element string $ordenar_por DEPRECATED
 * @pw_element string $ordem_decrescente DEPRECATED
 * @pw_element string $filtrar_por_data_de Filtrar os registros a partir de uma data.
 * @pw_element string $filtrar_por_data_ate Filtrar os registros até uma data.
 * @pw_element string $filtrar_por_hora_de Filtro por hora a apartir de.
 * @pw_element string $filtrar_por_hora_ate Filtro por hora até.
 * @pw_element string $filtrar_apenas_inclusao Filtrar apenas os registros incluídos.
 * @pw_element string $filtrar_apenas_alteracao Filtrar apenas os registros alterados.
 * @pw_element clientesFiltro $clientesFiltro Filtrar cadastro de clientes&nbsp;&nbsp;
 * @pw_element clientesPorCodigoArray $clientesPorCodigo Lista de Códigos para filtro de clientes
 * @pw_element string $exibir_caracteristicas Exibe as caracteristicas do cliente.
 * @pw_element string $exibir_obs Exibir as observações do cliente (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".<BR><BR>Default "N"
 * @pw_element string $ordem_descrescente DEPRECATED
 * @pw_complex clientes_list_request
 */
class Clientes_list_request{
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
	public string $ordem_decrescente;
	/**
	 * Filtrar os registros a partir de uma data.
	 *
	 * @var string
	 */
	public string $filtrar_por_data_de;
	/**
	 * Filtrar os registros até uma data.
	 *
	 * @var string
	 */
	public string $filtrar_por_data_ate;
	/**
	 * Filtro por hora a apartir de.
	 *
	 * @var string
	 */
	public string $filtrar_por_hora_de;
	/**
	 * Filtro por hora até.
	 *
	 * @var string
	 */
	public string $filtrar_por_hora_ate;
	/**
	 * Filtrar apenas os registros incluídos.
	 *
	 * @var string
	 */
	public string $filtrar_apenas_inclusao;
	/**
	 * Filtrar apenas os registros alterados.
	 *
	 * @var string
	 */
	public string $filtrar_apenas_alteracao;
	/**
	 * Filtrar cadastro de clientes&nbsp;&nbsp;
	 *
	 * @var ClientesFiltro
	 */
	public ClientesFiltro $clientesFiltro;
	/**
	 * Lista de Códigos para filtro de clientes
	 *
	 * @var ClientesPorCodigo[]
	 */
	public array $clientesPorCodigo;
	/**
	 * Exibe as caracteristicas do cliente.
	 *
	 * @var string
	 */
	public string $exibir_caracteristicas;
	/**
	 * Exibir as observações do cliente (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".<BR><BR>Default "N"
	 *
	 * @var string
	 */
	public string $exibir_obs;
	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public string $ordem_descrescente;
}
