<?php

namespace OmieLib\Produtos\Ipienq\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Ipienq\Cadastros;
use OmieLib\Produtos\Ipienq\IpiEncJsonClient;
use OmieLib\Produtos\Ipienq\Response\IpiEnqListarResponse;

/**
 * Solicitação da listagem de Enquadramento do IPI.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $ordenar_por Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $ordem_decrescente Se a lista será apresentada em ordem decrescente.
 * @pw_complex ipiEnqListarRequest
 */
class IpiEnqListarRequest{
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
