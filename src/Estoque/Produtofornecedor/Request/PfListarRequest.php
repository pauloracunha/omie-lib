<?php

namespace OmieLib\Estoque\Produtofornecedor\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Produtofornecedor\Cadastros;
use OmieLib\Estoque\Produtofornecedor\Produtos;
use OmieLib\Estoque\Produtofornecedor\ProdutosPorFornecedorJsonClient;
use OmieLib\Estoque\Produtofornecedor\Response\PfListarResponse;

/**
 * Solicitação da listagem de produtos por fornecedor.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $apenas_importado_api Exibir apenas os registros gerados pela API
 * @pw_element string $ordenar_por Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $ordem_decrescente Se a lista será apresentada em ordem decrescente.
 * @pw_complex pfListarRequest
 */
class PfListarRequest{
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
}
