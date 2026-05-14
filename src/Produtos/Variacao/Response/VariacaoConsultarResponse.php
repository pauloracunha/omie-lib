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
 * Resposta da consulta de variação.
 *
 * @pw_element ident $ident Identificação do produto.
 * @pw_element variacoesArray $variacoes Informação das variações do produto.
 * @pw_complex variacaoConsultarResponse
 */
class VariacaoConsultarResponse{
	/**
	 * Identificação do produto.
	 *
	 * @var Ident
	 */
	public Ident $ident;
	/**
	 * Informação das variações do produto.
	 *
	 * @var Variacoes[]
	 */
	public array $variacoes;
}
