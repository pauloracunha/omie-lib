<?php

namespace OmieLib\Produtos\Requisicaocompra\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Requisicaocompra\ItensReqCompra;
use OmieLib\Produtos\Requisicaocompra\RcChave;
use OmieLib\Produtos\Requisicaocompra\RcStatus;
use OmieLib\Produtos\Requisicaocompra\Request\RcListarRequest;
use OmieLib\Produtos\Requisicaocompra\RequisicaoCadastro;
use OmieLib\Produtos\Requisicaocompra\RequisicaoCompraJsonClient;

/**
 * Resposta da listagem de Requisição de Compras
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $total_de_paginas Total de páginas encontradas.
 * @pw_element integer $registros Número de registros retornados
 * @pw_element integer $total_de_registros Total de registros encontrados.
 * @pw_element requisicaoCadastroArray $requisicaoCadastro Cadastro de Requisição de Compras&nbsp;
 * @pw_complex rcListarResponse
 */
class RcListarResponse{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Total de páginas encontradas.
	 *
	 * @var integer
	 */
	public int $total_de_paginas;
	/**
	 * Número de registros retornados
	 *
	 * @var integer
	 */
	public int $registros;
	/**
	 * Total de registros encontrados.
	 *
	 * @var integer
	 */
	public int $total_de_registros;
	/**
	 * Cadastro de Requisição de Compras&nbsp;
	 *
	 * @var RequisicaoCadastro[]
	 */
	public array $requisicaoCadastro;
}
