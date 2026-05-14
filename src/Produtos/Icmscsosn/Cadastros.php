<?php

namespace OmieLib\Produtos\Icmscsosn;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Icmscsosn\Request\CsosnListarRequest;
use OmieLib\Produtos\Icmscsosn\Response\CsosnListarResponse;

/**
 * Lista os CSOSN do ICMS encontrados.
 *
 * @pw_element string $nCodigo Código do CSOSN do ICMS.
 * @pw_element string $cDescricao Descrição do CSOSN do ICMS.
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código do CSOSN do ICMS.
	 *
	 * @var string
	 */
	public string $nCodigo;
	/**
	 * Descrição do CSOSN do ICMS.
	 *
	 * @var string
	 */
	public string $cDescricao;
}
