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
 * Lista de códigos de Ordem de Serviço.
 *
 * @pw_element integer $nCodOS Código da Ordem de Serviço
 * @pw_element string $cCodIntOS Código de Integração da OS
 * @pw_complex filtrar_por_codigo
 */
class Filtrar_por_codigo{
	/**
	 * Código da Ordem de Serviço
	 *
	 * @var integer
	 */
	public int $nCodOS;
	/**
	 * Código de Integração da OS
	 *
	 * @var string
	 */
	public string $cCodIntOS;
}
