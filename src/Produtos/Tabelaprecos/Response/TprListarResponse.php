<?php

namespace OmieLib\Produtos\Tabelaprecos\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Tabelaprecos\Caracteristicas;
use OmieLib\Produtos\Tabelaprecos\Clientes;
use OmieLib\Produtos\Tabelaprecos\Info;
use OmieLib\Produtos\Tabelaprecos\ItemInfo;
use OmieLib\Produtos\Tabelaprecos\ItensTabela;
use OmieLib\Produtos\Tabelaprecos\ListaTabelaPreco;
use OmieLib\Produtos\Tabelaprecos\ListaTabelasPreco;
use OmieLib\Produtos\Tabelaprecos\OutrasInfo;
use OmieLib\Produtos\Tabelaprecos\Produtos;
use OmieLib\Produtos\Tabelaprecos\Request\TprAltPrecoItemRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprAlterarRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprAtivarRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprAtualizarRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprConsultarRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprExcluirRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprIncluirRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprItensListarRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprListarRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprSuspenderRequest;
use OmieLib\Produtos\Tabelaprecos\TabelaPrecosJsonClient;

/**
 * Resposta da solicitação de listagem de tabelas de preço.
 *
 * @pw_element integer $nPagina Número da página resgatada.
 * @pw_element integer $nTotPaginas Número total de páginas encontradas.
 * @pw_element integer $nRegistros Número de registros retornados na página.
 * @pw_element integer $nTotRegistros Número total de registros encontrados.
 * @pw_element listaTabelasPrecoArray $listaTabelasPreco Lista das tabelas de preço.
 * @pw_complex tprListarResponse
 */
class TprListarResponse{
	/**
	 * Número da página resgatada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número total de páginas encontradas.
	 *
	 * @var integer
	 */
	public int $nTotPaginas;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $nRegistros;
	/**
	 * Número total de registros encontrados.
	 *
	 * @var integer
	 */
	public int $nTotRegistros;
	/**
	 * Lista das tabelas de preço.
	 *
	 * @var ListaTabelasPreco[]
	 */
	public array $listaTabelasPreco;
}
