<?php

namespace OmieLib\Produtos\Produtoslote;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Produtoslote\Request\LoteProdutoConsultarRequest;
use OmieLib\Produtos\Produtoslote\Request\LoteProdutoListarRequest;
use OmieLib\Produtos\Produtoslote\Response\LoteProdutoConsultarResponse;
use OmieLib\Produtos\Produtoslote\Response\LoteProdutoListarResponse;

/**
 * Informações dos lotes do produto.
 *
 * @pw_element ident $ident Identificação do produto.
 * @pw_element lotesArray $lotes Informações dos lotes do produto.
 * @pw_complex listaLotes
 */
class ListaLotes{
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
