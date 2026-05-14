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
 * Solicitação da consulta de lote do produto.
 *
 * @pw_element ident $ident Identificação do produto.
 * @pw_element lotesArray $lotes Informações dos lotes do produto.
 * @pw_complex loteProdutoConsultarResponse
 */
class LoteProdutoConsultarResponse{
	/**
	 * Identificação do produto.
	 *
	 * @var Ident
	 */
	public Ident $ident;
	/**
	 * Informações dos lotes do produto.
	 *
	 * @var Lotes[]
	 */
	public array $lotes;
}
