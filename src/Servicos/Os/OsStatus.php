<?php

namespace OmieLib\Servicos\Os;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Os\Request\OsListarRequest;
use OmieLib\Servicos\Os\Request\OsObterRequest;
use OmieLib\Servicos\Os\Request\OsStatusRequest;
use OmieLib\Servicos\Os\Request\OsTrocarEtapaRequest;
use OmieLib\Servicos\Os\Response\OsListarResponse;
use OmieLib\Servicos\Os\Response\OsObterResponse;
use OmieLib\Servicos\Os\Response\OsStatusResponse;
use OmieLib\Servicos\Os\Response\OsTrocarEtapaResponse;

/**
 * Retorno do cadastro da Ordem de Serviço
 *
 * @pw_element string $cCodIntOS Código de Integração da OS
 * @pw_element integer $nCodOS Código da Ordem de Serviço
 * @pw_element string $cNumOS Número da Ordem de Serviço<BR>(Conforme visualizada em tela pelo cliente)<BR>
 * @pw_element string $cCodStatus Código do Status
 * @pw_element string $cDescStatus Descrição do Status
 * @pw_complex osStatus
 */
class OsStatus{
	/**
	 * Código de Integração da OS
	 *
	 * @var string
	 */
	public string $cCodIntOS;
	/**
	 * Código da Ordem de Serviço
	 *
	 * @var integer
	 */
	public int $nCodOS;
	/**
	 * Número da Ordem de Serviço<BR>(Conforme visualizada em tela pelo cliente)<BR>
	 *
	 * @var string
	 */
	public string $cNumOS;
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
