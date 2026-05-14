<?php

namespace OmieLib\Produtos\Formaspagcompras\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Formaspagcompras\Cadastros;
use OmieLib\Produtos\Formaspagcompras\FormasPagComprasJsonClient;
use OmieLib\Produtos\Formaspagcompras\Request\ComparListarRequest;

/**
 * Resposta da solicitação de formas de pagamento de compras.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element cadastrosArray $cadastros Lista os CESTs encontrados.
 * @pw_complex comparListarResponse
 */
class ComparListarResponse{
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
	 * Lista os CESTs encontrados.
	 *
	 * @var Cadastros[]
	 */
	public array $cadastros;
}
