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
 * Retorno do cadastro de Contrato de Serviços
 *
 * @pw_element string $cCodIntCtr Código de integração do contrato de serviços.<BR>(Utilizado em contratos criados via API, não é visualizado na tela)
 * @pw_element integer $nCodCtr Código do contrato de serviços.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodStatus Código do Status
 * @pw_element string $cDescStatus Descrição do Status
 * @pw_complex csStatus
 */
class CsStatus{
	/**
	 * Código de integração do contrato de serviços.<BR>(Utilizado em contratos criados via API, não é visualizado na tela)
	 *
	 * @var string
	 */
	public string $cCodIntCtr;
	/**
	 * Código do contrato de serviços.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodCtr;
	/**
	 * Código do Status
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do Status
	 *
	 * @var string
	 */
	public string $cDescStatus;
}
