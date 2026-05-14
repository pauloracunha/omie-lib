<?php

namespace OmieLib\Geral\Malha\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Malha\CustoProducao;
use OmieLib\Geral\Malha\Ident;
use OmieLib\Geral\Malha\ItemMalhaAlterar;
use OmieLib\Geral\Malha\ItemMalhaIncluir;
use OmieLib\Geral\Malha\ItemMalhaStatus;
use OmieLib\Geral\Malha\Itens;
use OmieLib\Geral\Malha\Observacoes;
use OmieLib\Geral\Malha\ProdutosEncontrados;
use OmieLib\Geral\Malha\ProdutosEstruturaJsonClient;
use OmieLib\Geral\Malha\Request\MalhaAlterarRequest;
use OmieLib\Geral\Malha\Request\MalhaConsultarRequest;
use OmieLib\Geral\Malha\Request\MalhaExcluirRequest;
use OmieLib\Geral\Malha\Request\MalhaIncluirRequest;
use OmieLib\Geral\Malha\Request\MalhaPesquisarRequest;

/**
 * Resultado da pesquisa de estrutura de produtos.
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nTotPaginas Total de páginas encontradas.
 * @pw_element integer $nRegistros Número de registros retornados
 * @pw_element integer $nTotRegistros Total de registros encontrados.
 * @pw_element produtosEncontradosArray $produtosEncontrados Resultado da pesquisa de estrutura de produtos.
 * @pw_complex malhaPesquisarResponse
 */
class MalhaPesquisarResponse{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Total de páginas encontradas.
	 *
	 * @var integer
	 */
	public int $nTotPaginas;
	/**
	 * Número de registros retornados
	 *
	 * @var integer
	 */
	public int $nRegistros;
	/**
	 * Total de registros encontrados.
	 *
	 * @var integer
	 */
	public int $nTotRegistros;
	/**
	 * Resultado da pesquisa de estrutura de produtos.
	 *
	 * @var ProdutosEncontrados[]
	 */
	public array $produtosEncontrados;
}
