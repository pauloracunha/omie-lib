<?php

namespace OmieLib\Crm\Concorrentes\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Concorrentes\Cadastros;
use OmieLib\Crm\Concorrentes\ConcorrentesJsonClient;
use OmieLib\Crm\Concorrentes\Request\ConcorrenteListarRequest;

/**
 * Resposta da solicitação da listagem de concorrentes da oportunidade.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element cadastrosArray $cadastros Lista os cadastros encontrados.
 * @pw_complex concorrenteListarResponse
 */
class ConcorrenteListarResponse{
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
	 * Lista os cadastros encontrados.
	 *
	 * @var Cadastros[]
	 */
	public array $cadastros;
}
