<?php

namespace OmieLib\Produtos\Cest\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cest\CESTJsonClient;
use OmieLib\Produtos\Cest\Cadastros;
use OmieLib\Produtos\Cest\Response\CestListarResponse;

/**
 * Solicitação da listagem de CEST.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $ordenar_por Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $ordem_decrescente Se a lista será apresentada em ordem decrescente.
 * @pw_element string $cCodigo Código do CEST.
 * @pw_element string $cDescricao Descrição do CEST.
 * @pw_complex cestListarRequest
 */
class CestListarRequest{
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
	 * Código do CEST.
	 *
	 * @var string
	 */
	public string $cCodigo;
	/**
	 * Descrição do CEST.
	 *
	 * @var string
	 */
	public string $cDescricao;
}
