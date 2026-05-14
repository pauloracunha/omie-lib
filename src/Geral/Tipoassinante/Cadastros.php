<?php

namespace OmieLib\Geral\Tipoassinante;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Tipoassinante\Request\TipoAssinanteRequest;
use OmieLib\Geral\Tipoassinante\Response\TipoAssinanteResponse;

/**
 * Lista os tipos de assinante.
 *
 * @pw_element string $cCodigo Código do tipo de assinante
 * @pw_element string $cDescricao Descrição do tipo de assinante
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código do tipo de assinante
	 *
	 * @var string
	 */
	public string $cCodigo;
	/**
	 * Descrição do tipo de assinante
	 *
	 * @var string
	 */
	public string $cDescricao;
}
