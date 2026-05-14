<?php

namespace OmieLib\Geral\Tipoassinante\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Tipoassinante\Cadastros;
use OmieLib\Geral\Tipoassinante\Response\TipoAssinanteResponse;
use OmieLib\Geral\Tipoassinante\TipoAssinanteJsonClient;

/**
 * Solicitação da listagem de tipo de assinante (NF modelo 21 e 22).
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $ordenar_por Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $ordem_decrescente Se a lista será apresentada em ordem decrescente.
 * @pw_complex tipoAssinanteRequest
 */
class TipoAssinanteRequest{
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
