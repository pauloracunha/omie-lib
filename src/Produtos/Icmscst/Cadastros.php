<?php

namespace OmieLib\Produtos\Icmscst;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Icmscst\Request\CstListarRequest;
use OmieLib\Produtos\Icmscst\Response\CstListarResponse;

/**
 * Lista os CSOSN do ICMS encontrados.
 *
 * @pw_element string $nCodigo Código do CST do ICMS.
 * @pw_element string $cDescricao Descrição do CST do ICMS.
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código do CST do ICMS.
	 *
	 * @var string
	 */
	public string $nCodigo;
	/**
	 * Descrição do CST do ICMS.
	 *
	 * @var string
	 */
	public string $cDescricao;
}
