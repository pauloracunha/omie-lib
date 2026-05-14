<?php

namespace OmieLib\Geral\Tipoassinante\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Tipoassinante\Cadastros;
use OmieLib\Geral\Tipoassinante\Request\TipoAssinanteRequest;
use OmieLib\Geral\Tipoassinante\TipoAssinanteJsonClient;

/**
 * Resposta da solicitação de tipo de assinante (NF modelo 21 e 22).
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element cadastrosArray $cadastros Lista os tipos de assinante.
 * @pw_complex tipoAssinanteResponse
 */
class TipoAssinanteResponse{
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
	 * Lista os tipos de assinante.
	 *
	 * @var Cadastros[]
	 */
	public array $cadastros;
}
