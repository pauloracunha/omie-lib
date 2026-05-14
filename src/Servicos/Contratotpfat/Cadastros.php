<?php

namespace OmieLib\Servicos\Contratotpfat;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contratotpfat\Request\TfCtrListarRequest;
use OmieLib\Servicos\Contratotpfat\Response\TfCtrListarResponse;

/**
 * Lista os tipos de faturamento de contrato.
 *
 * @pw_element string $cCodigo Código do tipo de faturamento de contrato.
 * @pw_element string $cDescricao Descrição do tipo de faturamento de contrato.
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código do tipo de faturamento de contrato.
	 *
	 * @var string
	 */
	public string $cCodigo;
	/**
	 * Descrição do tipo de faturamento de contrato.
	 *
	 * @var string
	 */
	public string $cDescricao;
}
