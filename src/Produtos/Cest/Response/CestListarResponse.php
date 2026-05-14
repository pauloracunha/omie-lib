<?php

namespace OmieLib\Produtos\Cest\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cest\CESTJsonClient;
use OmieLib\Produtos\Cest\Cadastros;
use OmieLib\Produtos\Cest\Request\CestListarRequest;

/**
 * Resposta da solicitação da listagem do CEST.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element cadastrosArray $cadastros Lista os CESTs encontrados.
 * @pw_complex cestListarResponse
 */
class CestListarResponse{
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
	 * Lista os CESTs encontrados.
	 *
	 * @var Cadastros[]
	 */
	public array $cadastros;
}
