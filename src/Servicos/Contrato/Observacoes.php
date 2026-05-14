<?php

namespace OmieLib\Servicos\Contrato;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contrato\Request\CsConsultarRequest;
use OmieLib\Servicos\Contrato\Request\CsExcluirItemRequest;
use OmieLib\Servicos\Contrato\Request\CsListarRequest;
use OmieLib\Servicos\Contrato\Response\CsConsultarResponse;
use OmieLib\Servicos\Contrato\Response\CsExcluirItemResponse;
use OmieLib\Servicos\Contrato\Response\CsListarResponse;

/**
 * Observações do contrato
 *
 * @pw_element string $cObsContrato Observações do Contrato. Essas informação não serão exibidas na Nota Fiscal).
 * @pw_complex observacoes
 */
class Observacoes{
	/**
	 * Observações do Contrato. Essas informação não serão exibidas na Nota Fiscal).
	 *
	 * @var string
	 */
	public string $cObsContrato;
}
