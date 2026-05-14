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
 * Resposta da solicitação de faturamento do Contrato de Serviço.
 *
 * @pw_element integer $nCodCtr Código do Contrato de Serviço.
 * @pw_element integer $nCodOS Código da Ordem de Serviço gerada.
 * @pw_element string $cCodStatus Código do Status
 * @pw_element string $cDescStatus Descrição do Status
 * @pw_complex ctrFaturarResponse
 */
class CtrFaturarResponse{
	/**
	 * Código do Contrato de Serviço.
	 *
	 * @var integer
	 */
	public int $nCodCtr;
	/**
	 * Código da Ordem de Serviço gerada.
	 *
	 * @var integer
	 */
	public int $nCodOS;
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
