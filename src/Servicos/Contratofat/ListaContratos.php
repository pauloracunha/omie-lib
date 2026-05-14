<?php

namespace OmieLib\Servicos\Contratofat;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contratofat\Request\CtrAtivarRequest;
use OmieLib\Servicos\Contratofat\Request\CtrCancelarRequest;
use OmieLib\Servicos\Contratofat\Request\CtrFaturarRequest;
use OmieLib\Servicos\Contratofat\Request\CtrObterRequest;
use OmieLib\Servicos\Contratofat\Request\CtrReativarRequest;
use OmieLib\Servicos\Contratofat\Request\CtrSuspenderRequest;
use OmieLib\Servicos\Contratofat\Request\CtrValidarRequest;
use OmieLib\Servicos\Contratofat\Response\CtrAtivarResponse;
use OmieLib\Servicos\Contratofat\Response\CtrCancelarResponse;
use OmieLib\Servicos\Contratofat\Response\CtrFaturarResponse;
use OmieLib\Servicos\Contratofat\Response\CtrObterResponse;
use OmieLib\Servicos\Contratofat\Response\CtrReativarResponse;
use OmieLib\Servicos\Contratofat\Response\CtrSuspenderResponse;
use OmieLib\Servicos\Contratofat\Response\CtrValidarResponse;

/**
 * Lista de contratos encontrados na etapa solicitada.
 *
 * @pw_element integer $nCodCtr Código do Contrato de Serviço.
 * @pw_element string $cNumCtr Número do Contrato de Serviços<BR><BR>(Informado pelo usuário / visualizado na tela)
 * @pw_complex listaContratos
 */
class ListaContratos{
	/**
	 * Código do Contrato de Serviço.
	 *
	 * @var integer
	 */
	public int $nCodCtr;
	/**
	 * Número do Contrato de Serviços<BR><BR>(Informado pelo usuário / visualizado na tela)
	 *
	 * @var string
	 */
	public string $cNumCtr;
}
