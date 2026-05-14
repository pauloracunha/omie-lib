<?php

namespace OmieLib\Produtos\Icmscsosn\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Icmscsosn\Cadastros;
use OmieLib\Produtos\Icmscsosn\IcmsCSOSNJsonClient;
use OmieLib\Produtos\Icmscsosn\Request\CsosnListarRequest;

/**
 * Resposta da solicitação da listagem de CSOSN do ICMS.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element cadastrosArray $cadastros Lista os CSOSN do ICMS encontrados.
 * @pw_complex csosnListarResponse
 */
class CsosnListarResponse{
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
