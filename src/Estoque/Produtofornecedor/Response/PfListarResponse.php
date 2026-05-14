<?php

namespace OmieLib\Estoque\Produtofornecedor\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Produtofornecedor\Cadastros;
use OmieLib\Estoque\Produtofornecedor\Produtos;
use OmieLib\Estoque\Produtofornecedor\ProdutosPorFornecedorJsonClient;
use OmieLib\Estoque\Produtofornecedor\Request\PfListarRequest;

/**
 * Resposta da solicitação da listagem de produtos por fornecedor.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element cadastrosArray $cadastros Lista os cadastros encontrados.
 * @pw_complex pfListarResponse
 */
class PfListarResponse{
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
	 * Lista os cadastros encontrados.
	 *
	 * @var Cadastros[]
	 */
	public array $cadastros;
}
