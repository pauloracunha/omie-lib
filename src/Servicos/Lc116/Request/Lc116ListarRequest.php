<?php

namespace OmieLib\Servicos\Lc116\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Lc116\Cadastros;
use OmieLib\Servicos\Lc116\LC116JsonClient;
use OmieLib\Servicos\Lc116\Response\Lc116ListarResponse;

/**
 * Solicitação da listagem da Lista de serviços anexa à Lei Complementar nº 116, de 31 de julho de 2003
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $ordenar_por Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $ordem_decrescente Se a lista será apresentada em ordem decrescente.
 * @pw_element string $cCodigo Código do Serviço.
 * @pw_element string $apenas_importado_api DEPRECATED
 * @pw_complex lc116ListarRequest
 */
class Lc116ListarRequest{
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
	/**
	 * Código do Serviço.
	 *
	 * @var string
	 */
	public string $cCodigo;
	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public string $apenas_importado_api;
}
