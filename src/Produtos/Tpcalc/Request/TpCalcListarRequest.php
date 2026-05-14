<?php

namespace OmieLib\Produtos\Tpcalc\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Tpcalc\Cadastros;
use OmieLib\Produtos\Tpcalc\Response\TpCalcListarResponse;
use OmieLib\Produtos\Tpcalc\TipoCalculoJsonClient;

/**
 * Solicitação da listagem de Tipo de Cálculo.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $ordenar_por Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $ordem_decrescente Se a lista será apresentada em ordem decrescente.
 * @pw_complex tpCalcListarRequest
 */
class TpCalcListarRequest{
	/**
	 * Número da página retornada
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $registros_por_pagina;
	/**
	 * Ordem de exibição dos dados. Padrão: Código.
	 *
	 * @var string
	 */
	public string $ordenar_por;
	/**
	 * Se a lista será apresentada em ordem decrescente.
	 *
	 * @var string
	 */
	public string $ordem_decrescente;
}
