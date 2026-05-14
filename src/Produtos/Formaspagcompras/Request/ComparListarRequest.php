<?php

namespace OmieLib\Produtos\Formaspagcompras\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Formaspagcompras\Cadastros;
use OmieLib\Produtos\Formaspagcompras\FormasPagComprasJsonClient;
use OmieLib\Produtos\Formaspagcompras\Response\ComparListarResponse;

/**
 * Solicitação da listagem de formas de pagamento de compras.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $ordenar_por Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $ordem_decrescente Se a lista será apresentada em ordem decrescente.
 * @pw_complex comparListarRequest
 */
class ComparListarRequest{
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
