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
 * Observações da Ordem de Serviço
 *
 * @pw_element string $cObsOS Observações da Ordem de Serviço. (Essas informação não serão exibidas na Nota Fiscal).
 * @pw_complex Observacoes
 */
class Observacoes{
	/**
	 * Observações da Ordem de Serviço. (Essas informação não serão exibidas na Nota Fiscal).
	 *
	 * @var string
	 */
	public string $cObsOS;
}
