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
 * Lista de Ordens de Serviço de uma etapa.
 *
 * @pw_element integer $nIdPed Código da Ordem de Serviço
 * @pw_element string $cNumPedido Número da Ordem de Serviço<BR>(Conforme visualizada em tela pelo cliente)<BR>
 * @pw_complex listaOS
 */
class ListaOS{
	/**
	 * Código da Ordem de Serviço
	 *
	 * @var integer
	 */
	public int $nIdPed;
	/**
	 * Número da Ordem de Serviço<BR>(Conforme visualizada em tela pelo cliente)<BR>
	 *
	 * @var string
	 */
	public string $cNumPedido;
}
