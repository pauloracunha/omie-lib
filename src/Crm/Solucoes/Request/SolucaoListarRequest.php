<?php

namespace OmieLib\Crm\Solucoes\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Solucoes\Cadastros;
use OmieLib\Crm\Solucoes\Response\SolucaoListarResponse;
use OmieLib\Crm\Solucoes\SolucoesJsonClient;

/**
 * Solicitação da listagem de soluções da oportunidade.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $apenas_importado_api Exibir apenas os registros gerados pela API
 * @pw_element string $ordenar_por Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $ordem_decrescente Se a lista será apresentada em ordem decrescente.
 * @pw_element integer $nCodigo Código da solução.
 * @pw_complex solucaoListarRequest
 */
class SolucaoListarRequest{
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
	 * Exibir apenas os registros gerados pela API
	 *
	 * @var string
	 */
	public string $apenas_importado_api;
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
	 * Código da solução.
	 *
	 * @var integer
	 */
	public int $nCodigo;
}
