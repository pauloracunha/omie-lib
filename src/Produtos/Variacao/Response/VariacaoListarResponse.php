<?php

namespace OmieLib\Produtos\Variacao\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Variacao\ACaracteristicas;
use OmieLib\Produtos\Variacao\AValoresCaracteristicas;
use OmieLib\Produtos\Variacao\AVariacoes;
use OmieLib\Produtos\Variacao\CaractVariacoes;
use OmieLib\Produtos\Variacao\Ident;
use OmieLib\Produtos\Variacao\ListaVariacoes;
use OmieLib\Produtos\Variacao\ProdutosVariacoesJsonClient;
use OmieLib\Produtos\Variacao\Request\VariacaoConsultarRequest;
use OmieLib\Produtos\Variacao\Request\VariacaoIncluirRequest;
use OmieLib\Produtos\Variacao\Request\VariacaoListarRequest;
use OmieLib\Produtos\Variacao\Variacoes;

/**
 * Retorno da lista de variações.
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nTotPaginas Total de páginas encontradas.
 * @pw_element integer $nRegistros Número de registros retornados
 * @pw_element integer $nTotRegistros Número total de registros.
 * @pw_element listaVariacoesArray $listaVariacoes Informações das variações.
 * @pw_complex variacaoListarResponse
 */
class VariacaoListarResponse{
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
	 * Número total de registros.
	 *
	 * @var integer
	 */
	public int $nTotRegistros;
	/**
	 * Informações das variações.
	 *
	 * @var ListaVariacoes[]
	 */
	public array $listaVariacoes;
}
