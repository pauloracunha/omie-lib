<?php

namespace OmieLib\Geral\Produtos;

use OmieLib\Common\OmieFail;

/**
 * Lista de videos do produto.
 *
 * @pw_element string $url_video URL do Video do produto.
 * @pw_complex videos
 */
class Videos{
	/**
	 * URL do Video do produto.
	 *
	 * @var string
	 */
	public string $url_video;
}
