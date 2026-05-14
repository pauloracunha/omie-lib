<?php

namespace OmieLib\Servicos\Lc116;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Lc116\Request\Lc116ListarRequest;
use OmieLib\Servicos\Lc116\Response\Lc116ListarResponse;

/**
 * Lista os cadastros encontrados.
 *
 * @pw_element string $cCodigo Código do Serviço.
 * @pw_element string $cDescricao Descrição do Serviço.
 * @pw_element string $cDescrCompleta Descrição Completa do Serviço.
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código do Serviço.
	 *
	 * @var string
	 */
	public string $cCodigo;
	/**
	 * Descrição do Serviço.
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Descrição Completa do Serviço.
	 *
	 * @var string
	 */
	public string $cDescrCompleta;
}
