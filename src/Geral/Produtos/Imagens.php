<?php

namespace OmieLib\Geral\Produtos;

use OmieLib\Common\OmieFail;

/**
 * Lista de imagens do produto.
 *
 * @pw_element string $url_imagem URL da Imagem do produto.
 * @pw_complex imagens
 */
class Imagens{
	/**
	 * URL da Imagem do produto.
	 *
	 * @var string
	 */
	public string $url_imagem;
}
