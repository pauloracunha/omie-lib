<?php

namespace OmieLib\Produtos\Ipicst;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Ipicst\Request\IpiCstListarRequest;
use OmieLib\Produtos\Ipicst\Response\IpiCstListarResponse;

/**
 * Lista os CSOSN do ICMS encontrados.
 *
 * @pw_element string $nCodigo Código do CST do IPI.
 * @pw_element string $cDescricao Descrição do CST do IPI.
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código do CST do IPI.
	 *
	 * @var string
	 */
	public string $nCodigo;
	/**
	 * Descrição do CST do IPI.
	 *
	 * @var string
	 */
	public string $cDescricao;
}
