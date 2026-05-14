<?php

namespace OmieLib\Produtos\Cfop\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cfop\CFOPJsonClient;
use OmieLib\Produtos\Cfop\Cadastros;
use OmieLib\Produtos\Cfop\Request\CfopListarRequest;

/**
 * Resposta da solicitação da listagem de CFOPs.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element cadastrosArray $cadastros Lista os CFOPs encontrados.
 * @pw_complex cfopListarResponse
 */
class CfopListarResponse{
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
	 * Lista os CFOPs encontrados.
	 *
	 * @var Cadastros[]
	 */
	public array $cadastros;
}
