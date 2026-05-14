<?php

namespace OmieLib\Geral\Bandeiracartao;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Bandeiracartao\Request\ListarBandeirasRequest;
use OmieLib\Geral\Bandeiracartao\Response\ListarBandeirasResponse;

/**
 * Código e descrição.
 *
 * @pw_element string $cCodigo Código da bandeira
 * @pw_element string $cDescricao Descrição da bandeira do cartão.
 * @pw_complex listaBandeira
 */
class ListaBandeira{
	/**
	 * Código da bandeira
	 *
	 * @var string
	 */
	public string $cCodigo;
	/**
	 * Descrição da bandeira do cartão.
	 *
	 * @var string
	 */
	public string $cDescricao;
}
