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
 * Detalhes da NFSE.
 *
 * @pw_element Eventos $Eventos Evento na Nfse.
 * @pw_complex DetalhesNfse
 */
class DetalhesNfse{
	/**
	 * Evento na Nfse.
	 *
	 * @var Eventos
	 */
	public Eventos $Eventos;
}
