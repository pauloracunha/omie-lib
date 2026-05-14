<?php

namespace OmieLib\Produtos\Tpcalc\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Tpcalc\Cadastros;
use OmieLib\Produtos\Tpcalc\Request\TpCalcListarRequest;
use OmieLib\Produtos\Tpcalc\TipoCalculoJsonClient;

/**
 * Resposta da solicitação da listagem de Tipo de Cálculo.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element cadastrosArray $cadastros Lista os CSOSN do ICMS encontrados.
 * @pw_complex tpCalcListarResponse
 */
class TpCalcListarResponse{
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
