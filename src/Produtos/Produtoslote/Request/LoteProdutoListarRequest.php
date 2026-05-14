<?php

namespace OmieLib\Produtos\Produtoslote\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Produtoslote\Ident;
use OmieLib\Produtos\Produtoslote\ListaLotes;
use OmieLib\Produtos\Produtoslote\Lotes;
use OmieLib\Produtos\Produtoslote\ProdutosLoteJsonClient;
use OmieLib\Produtos\Produtoslote\Response\LoteProdutoConsultarResponse;
use OmieLib\Produtos\Produtoslote\Response\LoteProdutoListarResponse;

/**
 * Requisição da consulta de lote.
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nRegPorPagina Número de registros retornados.
 * @pw_element string $cFiltrarApenasInclusao Filtrar apenas registros incluídos (S/N)
 * @pw_element string $cFiltrarApenasAlteracao Filtrar apenas registros alterados (S/N)
 * @pw_element string $cFiltrarPorDataDe Data para filtro inicial
 * @pw_element string $cFiltrarPorDataAte Data para filtro final
 * @pw_complex loteProdutoListarRequest
 */
class LoteProdutoListarRequest{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número de registros retornados.
	 *
	 * @var integer
	 */
	public int $nRegPorPagina;
	/**
	 * Filtrar apenas registros incluídos (S/N)
	 *
	 * @var string
	 */
	public string $cFiltrarApenasInclusao;
	/**
	 * Filtrar apenas registros alterados (S/N)
	 *
	 * @var string
	 */
	public string $cFiltrarApenasAlteracao;
	/**
	 * Data para filtro inicial
	 *
	 * @var string
	 */
	public string $cFiltrarPorDataDe;
	/**
	 * Data para filtro final
	 *
	 * @var string
	 */
	public string $cFiltrarPorDataAte;
}
