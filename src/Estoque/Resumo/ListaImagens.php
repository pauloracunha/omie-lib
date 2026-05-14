<?php

namespace OmieLib\Estoque\Resumo;

use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Resumo\Request\ObterEstoqueProdRequest;
use OmieLib\Estoque\Resumo\Response\ObterEstoqueProdResponse;

/**
 * Lista de imagens do produto.
 *
 * @pw_element string $cUrlImagem URL da Imagem do produto.
 * @pw_complex listaImagens
 */
class ListaImagens{
	/**
	 * URL da Imagem do produto.
	 *
	 * @var string
	 */
	public string $cUrlImagem;
}
