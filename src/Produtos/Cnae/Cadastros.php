<?php

namespace OmieLib\Produtos\Cnae;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cnae\Request\CnaeListarRequest;
use OmieLib\Produtos\Cnae\Response\CnaeListarResponse;

/**
 * Lista os CNAEs encontrados.
 *
 * @pw_element string $nCodigo Código CNAE.
 * @pw_element string $cDescricao Descrição CNAE.
 * @pw_element string $cEstrutura Estrutura CNAE.
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código CNAE.
	 *
	 * @var string
	 */
	public string $nCodigo;
	/**
	 * Descrição CNAE.
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Estrutura CNAE.
	 *
	 * @var string
	 */
	public string $cEstrutura;
}
