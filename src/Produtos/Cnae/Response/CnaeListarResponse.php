<?php

namespace OmieLib\Produtos\Cnae\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cnae\CNAEJsonClient;
use OmieLib\Produtos\Cnae\Cadastros;
use OmieLib\Produtos\Cnae\Request\CnaeListarRequest;

/**
 * Resposta da solicitação da listagem de CNAEs.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element cadastrosArray $cadastros Lista os CNAEs encontrados.
 * @pw_complex cnaeListarResponse
 */
class CnaeListarResponse{
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
	 * Lista os CNAEs encontrados.
	 *
	 * @var Cadastros[]
	 */
	public array $cadastros;
}
