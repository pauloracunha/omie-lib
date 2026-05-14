<?php

namespace OmieLib\Produtos\Piscst;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Piscst\Request\PisCstListarRequest;
use OmieLib\Produtos\Piscst\Response\PisCstListarResponse;

/**
 * Lista os CSOSN do ICMS encontrados.
 *
 * @pw_element string $nCodigo Código do CST do PIS.
 * @pw_element string $cDescricao Descrição do CST do PIS.
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código do CST do PIS.
	 *
	 * @var string
	 */
	public string $nCodigo;
	/**
	 * Descrição do CST do PIS.
	 *
	 * @var string
	 */
	public string $cDescricao;
}
