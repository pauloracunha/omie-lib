<?php

namespace OmieLib\Crm\Solucoes\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Solucoes\Cadastros;
use OmieLib\Crm\Solucoes\Request\SolucaoListarRequest;
use OmieLib\Crm\Solucoes\SolucoesJsonClient;

/**
 * Resposta da solicitação da listagem de soluções da oportunidade.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element cadastrosArray $cadastros Lista os cadastros encontrados.
 * @pw_complex solucaoListarResponse
 */
class SolucaoListarResponse{
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
