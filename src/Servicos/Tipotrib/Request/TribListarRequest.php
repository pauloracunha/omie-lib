<?php

namespace OmieLib\Servicos\Tipotrib\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Tipotrib\Cadastros;
use OmieLib\Servicos\Tipotrib\Response\TribListarResponse;
use OmieLib\Servicos\Tipotrib\TipoTributacaoJsonClient;

/**
 * Solicitação da Lista de Tipos de Tributação no Município.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $ordenar_por Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $ordem_decrescente Se a lista será apresentada em ordem decrescente.
 * @pw_element string $apenas_importado_api DEPRECATED
 * @pw_complex tribListarRequest
 */
class TribListarRequest{
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
	 * DEPRECATED
	 *
	 * @var string
	 */
	public string $apenas_importado_api;
}
