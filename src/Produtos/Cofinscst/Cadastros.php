<?php

namespace OmieLib\Produtos\Cofinscst;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cofinscst\Request\CofinsCstListarRequest;
use OmieLib\Produtos\Cofinscst\Response\CofinsCstListarResponse;

/**
 * Lista os CSOSN do ICMS encontrados.
 *
 * @pw_element string $nCodigo Código do CST do COFINS.
 * @pw_element string $cDescricao Descrição do CST do COFINS.
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código do CST do COFINS.
	 *
	 * @var string
	 */
	public string $nCodigo;
	/**
	 * Descrição do CST do COFINS.
	 *
	 * @var string
	 */
	public string $cDescricao;
}
