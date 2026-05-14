<?php

namespace OmieLib\Produtos\Cofinscst\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cofinscst\Cadastros;
use OmieLib\Produtos\Cofinscst\CofinsCSTJsonClient;
use OmieLib\Produtos\Cofinscst\Request\CofinsCstListarRequest;

/**
 * Resposta da solicitação da listagem de CST do COFINS.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element cadastrosArray $cadastros Lista os CSOSN do ICMS encontrados.
 * @pw_complex cofinsCstListarResponse
 */
class CofinsCstListarResponse{
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
	 * Lista os CSOSN do ICMS encontrados.
	 *
	 * @var Cadastros[]
	 */
	public array $cadastros;
}
