<?php

namespace OmieLib\Produtos\Ipienq;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Ipienq\Request\IpiEnqListarRequest;
use OmieLib\Produtos\Ipienq\Response\IpiEnqListarResponse;

/**
 * Lista os Enquadramentos do IPI.
 *
 * @pw_element string $nCodigo Código do Enquadramento do IPI.
 * @pw_element string $cDescricao Descrição do Enquadramento do IPI.
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código do Enquadramento do IPI.
	 *
	 * @var string
	 */
	public string $nCodigo;
	/**
	 * Descrição do Enquadramento do IPI.
	 *
	 * @var string
	 */
	public string $cDescricao;
}
