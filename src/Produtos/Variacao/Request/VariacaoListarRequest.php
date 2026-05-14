<?php

namespace OmieLib\Produtos\Variacao\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Variacao\ACaracteristicas;
use OmieLib\Produtos\Variacao\AValoresCaracteristicas;
use OmieLib\Produtos\Variacao\AVariacoes;
use OmieLib\Produtos\Variacao\CaractVariacoes;
use OmieLib\Produtos\Variacao\Ident;
use OmieLib\Produtos\Variacao\ListaVariacoes;
use OmieLib\Produtos\Variacao\ProdutosVariacoesJsonClient;
use OmieLib\Produtos\Variacao\Response\VariacaoConsultarResponse;
use OmieLib\Produtos\Variacao\Response\VariacaoIncluirResponse;
use OmieLib\Produtos\Variacao\Response\VariacaoListarResponse;
use OmieLib\Produtos\Variacao\Variacoes;

/**
 * Solicitação para listar as variações.
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nRegPorPagina Número de registros retornados
 * @pw_element string $cFiltrarPorDataDe Informe aqui a data de início do filtro.
 * @pw_element string $cFiltrarPorDataAte Informe aqui a data de início do filtro.
 * @pw_element string $cFiltrarApenasInclusao Filtrar apenas registros incluídos para a data.<BR><BR> (S/N)
 * @pw_element string $cFiltrarApenasAlteracao Filtrar apenas registros alterados para a data.<BR><BR> (S/N)
 * @pw_element string $cExibirCaracteristicas Campo S/N para filtrar as características das variacoes.
 * @pw_complex variacaoListarRequest
 */
class VariacaoListarRequest{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número de registros retornados
	 *
	 * @var integer
	 */
	public int $nRegPorPagina;
	/**
	 * Informe aqui a data de início do filtro.
	 *
	 * @var string
	 */
	public string $cFiltrarPorDataDe;
	/**
	 * Informe aqui a data de início do filtro.
	 *
	 * @var string
	 */
	public string $cFiltrarPorDataAte;
	/**
	 * Filtrar apenas registros incluídos para a data.<BR><BR> (S/N)
	 *
	 * @var string
	 */
	public string $cFiltrarApenasInclusao;
	/**
	 * Filtrar apenas registros alterados para a data.<BR><BR> (S/N)
	 *
	 * @var string
	 */
	public string $cFiltrarApenasAlteracao;
	/**
	 * Campo S/N para filtrar as características das variacoes.
	 *
	 * @var string
	 */
	public string $cExibirCaracteristicas;
}
