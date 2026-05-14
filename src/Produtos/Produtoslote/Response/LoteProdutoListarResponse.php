<?php

namespace OmieLib\Produtos\Produtoslote\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Produtoslote\Ident;
use OmieLib\Produtos\Produtoslote\ListaLotes;
use OmieLib\Produtos\Produtoslote\Lotes;
use OmieLib\Produtos\Produtoslote\ProdutosLoteJsonClient;
use OmieLib\Produtos\Produtoslote\Request\LoteProdutoConsultarRequest;
use OmieLib\Produtos\Produtoslote\Request\LoteProdutoListarRequest;

/**
 * Retorno da lista de lote.
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nTotPaginas Total de páginas encontradas.
 * @pw_element integer $nRegistros Número de registros retornados.
 * @pw_element integer $nTotRegistros Total de registros encontrados.
 * @pw_element listaLotesArray $listaLotes Informações dos lotes do produto.
 * @pw_complex loteProdutoListarResponse
 */
class LoteProdutoListarResponse{
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
	 * Número de registros retornados.
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
	 * Informações dos lotes do produto.
	 *
	 * @var ListaLotes[]
	 */
	public array $listaLotes;
}
