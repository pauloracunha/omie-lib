<?php

namespace OmieLib\Geral\Categorias;

use OmieLib\Common\OmieFail;

/**
 * Lista as categorias cadastradas.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $apenas_importado_api DEPRECATED
 * @pw_element string $ordenar_por DEPRECATED
 * @pw_element string $ordem_descrescente DEPRECATED
 * @pw_element string $filtrar_apenas_ativo Fitrar apenas categorias ativas
 * @pw_element string $filtrar_por_tipo Filtrar categorias por tipo<BR><BR>Pode ser: <BR>R - Receita<BR>D - Despesa<BR><BR>Retorna apenas as categorias ativas, não totalizadoras e que estejam configuradas para serem exibidas.
 * @pw_complex categoria_list_request
 */
class Categoria_list_request{
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
	 * Fitrar apenas categorias ativas
	 *
	 * @var string
	 */
	public string $filtrar_apenas_ativo;
	/**
	 * Filtrar categorias por tipo<BR><BR>Pode ser: <BR>R - Receita<BR>D - Despesa<BR><BR>Retorna apenas as categorias ativas, não totalizadoras e que estejam configuradas para serem exibidas.
	 *
	 * @var string
	 */
	public string $filtrar_por_tipo;
}
