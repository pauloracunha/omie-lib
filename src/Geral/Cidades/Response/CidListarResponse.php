<?php

namespace OmieLib\Geral\Cidades\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Cidades\CidadesCadastroJsonClient;
use OmieLib\Geral\Cidades\Lista_cidades;
use OmieLib\Geral\Cidades\Request\CidListarRequest;

/**
 * Resposta da listagem de Cidades
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $total_de_paginas Total de páginas encontradas.
 * @pw_element integer $registros Número de registros retornados
 * @pw_element integer $total_de_registros Total de registros encontrados.
 * @pw_element lista_cidadesArray $lista_cidades Cadastro de Cidades&nbsp;
 * @pw_complex cidListarResponse
 */
class CidListarResponse{
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
	 * Cadastro de Cidades&nbsp;
	 *
	 * @var Lista_cidades[]
	 */
	public array $lista_cidades;
}
