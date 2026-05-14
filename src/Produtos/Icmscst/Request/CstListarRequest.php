<?php

namespace OmieLib\Produtos\Icmscst\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Icmscst\Cadastros;
use OmieLib\Produtos\Icmscst\IcmsCSTJsonClient;
use OmieLib\Produtos\Icmscst\Response\CstListarResponse;

/**
 * Solicitação da listagem de CST do ICMS.
 *
 * @pw_element integer $pagina Número da página para resgatar os dados.
 * @pw_element integer $registros_por_pagina Número de registros a serem exibidos por página.<BR>Máximo 50.
 * @pw_element string $ordenar_por Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $ordem_decrescente Se a lista será apresentada em ordem decrescente.
 * @pw_complex cstListarRequest
 */
class CstListarRequest{
	/**
	 * Número da página para resgatar os dados.
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Número de registros a serem exibidos por página.<BR>Máximo 50.
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
