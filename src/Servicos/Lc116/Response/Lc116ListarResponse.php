<?php

namespace OmieLib\Servicos\Lc116\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Lc116\Cadastros;
use OmieLib\Servicos\Lc116\LC116JsonClient;
use OmieLib\Servicos\Lc116\Request\Lc116ListarRequest;

/**
 * Resposta da solicitação da Lista de serviços anexa à Lei Complementar nº 116, de 31 de julho de 2003.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element cadastrosArray $cadastros Lista os cadastros encontrados.
 * @pw_complex lc116ListarResponse
 */
class Lc116ListarResponse{
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
