<?php

namespace OmieLib\Produtos\Icmsorigem\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Icmsorigem\Cadastros;
use OmieLib\Produtos\Icmsorigem\IcmsOrigemJsonClient;
use OmieLib\Produtos\Icmsorigem\Request\OrigMercListarRequest;

/**
 * Resposta da solicitação da listagem da Origem da Mercadoria do ICMS.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element cadastrosArray $cadastros Lista as Origem da Mercadoria do ICMS.
 * @pw_complex origMercListarResponse
 */
class OrigMercListarResponse{
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
	 * Lista as Origem da Mercadoria do ICMS.
	 *
	 * @var Cadastros[]
	 */
	public array $cadastros;
}
