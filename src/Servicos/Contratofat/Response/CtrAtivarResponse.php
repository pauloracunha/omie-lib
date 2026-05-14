<?php

namespace OmieLib\Servicos\Contratofat\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contratofat\ContratoFaturamentoJsonClient;
use OmieLib\Servicos\Contratofat\ListaContratos;
use OmieLib\Servicos\Contratofat\Request\CtrAtivarRequest;
use OmieLib\Servicos\Contratofat\Request\CtrCancelarRequest;
use OmieLib\Servicos\Contratofat\Request\CtrFaturarRequest;
use OmieLib\Servicos\Contratofat\Request\CtrObterRequest;
use OmieLib\Servicos\Contratofat\Request\CtrReativarRequest;
use OmieLib\Servicos\Contratofat\Request\CtrSuspenderRequest;
use OmieLib\Servicos\Contratofat\Request\CtrValidarRequest;

/**
 * Resposta da solicitação de ativação do Contrato de Serviço.
 *
 * @pw_element integer $nCodCtr Código do Contrato de Serviço.
 * @pw_element string $cCodStatus Código do Status
 * @pw_element string $cDescStatus Descrição do Status
 * @pw_complex ctrAtivarResponse
 */
class CtrAtivarResponse{
	/**
	 * Código do Contrato de Serviço.
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
