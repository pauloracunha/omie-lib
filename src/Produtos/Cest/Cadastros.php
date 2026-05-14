<?php

namespace OmieLib\Produtos\Cest;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cest\Request\CestListarRequest;
use OmieLib\Produtos\Cest\Response\CestListarResponse;

/**
 * Lista os CESTs encontrados.
 *
 * @pw_element string $cCodigo Código do CEST.
 * @pw_element string $cDescricao Descrição do CEST.
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código do CEST.
	 *
	 * @var string
	 */
	public string $cCodigo;
	/**
	 * Descrição do CEST.
	 *
	 * @var string
	 */
	public string $cDescricao;
}
