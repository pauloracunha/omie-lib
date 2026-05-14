<?php

namespace OmieLib\Servicos\Contratofat\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contratofat\ContratoFaturamentoJsonClient;
use OmieLib\Servicos\Contratofat\ListaContratos;
use OmieLib\Servicos\Contratofat\Response\CtrAtivarResponse;
use OmieLib\Servicos\Contratofat\Response\CtrCancelarResponse;
use OmieLib\Servicos\Contratofat\Response\CtrFaturarResponse;
use OmieLib\Servicos\Contratofat\Response\CtrObterResponse;
use OmieLib\Servicos\Contratofat\Response\CtrReativarResponse;
use OmieLib\Servicos\Contratofat\Response\CtrSuspenderResponse;
use OmieLib\Servicos\Contratofat\Response\CtrValidarResponse;

/**
 * Solicitação de cancelamento do Contrato de Serviço.
 *
 * @pw_element integer $nCodCtr Código do Contrato de Serviço.
 * @pw_complex ctrCancelarRequest
 */
class CtrCancelarRequest{
	/**
	 * Código do Contrato de Serviço.
	 *
	 * @var integer
	 */
	public int $nCodCtr;
}
