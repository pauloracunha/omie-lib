<?php

namespace OmieLib\Servicos\Contratofat;

use OmieLib\Common\AbstractOmieJsonClient;
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
 * @service ContratoFaturamentoJsonClient
 * @author omie
 */
class ContratoFaturamentoJsonClient extends AbstractOmieJsonClient {
	/**
	 * The WSDL URI
	 *
	 * @var string
	 */
	
	/**
	 * The PHP SoapClient object
	 *
	 * @var object
	 */
	public static $_Server=null;
	/**
	 * The endpoint URI
	 *
	 * @var string
	 */
	public static $_EndPoint='servicos/contratofat/';

	/**
	 * Fatura um contrato.
	 *
	 * @param CtrFaturarRequest $ctrFaturarRequest Solicitação de validação do Contrato de Serviço.
	 * @return CtrFaturarResponse Resposta da solicitação de faturamento do Contrato de Serviço.
	 */
	public function FaturarContrato(CtrFaturarRequest $ctrFaturarRequest): CtrFaturarResponse{
		return $this->_Call('FaturarContrato',Array(
			$ctrFaturarRequest
		));
	}

	/**
	 * Valida os dados de um contrato para faturamento.
	 *
	 * @param CtrValidarRequest $ctrValidarRequest Solicitação de validação do Contrato de Serviço.
	 * @return CtrValidarResponse Resposta da solicitação de validação do Contrato de Serviço.
	 */
	public function ValidarContrato(CtrValidarRequest $ctrValidarRequest): CtrValidarResponse{
		return $this->_Call('ValidarContrato',Array(
			$ctrValidarRequest
		));
	}

	/**
	 * Obtém os contratos de uma etapa de faturamento.
	 *
	 * @param CtrObterRequest $ctrObterRequest Lista os Contratos que se encontram em um etapa do processo de faturamento de contratos.
	 * @return CtrObterResponse Resposta da solicitação da lista de contratos de uma etapa.
	 */
	public function ObterContratos(CtrObterRequest $ctrObterRequest): CtrObterResponse{
		return $this->_Call('ObterContratos',Array(
			$ctrObterRequest
		));
	}

	/**
	 * Suspende contrato
	 *
	 * @param CtrSuspenderRequest $ctrSuspenderRequest Solicitação de suspensão do Contrato de Serviço.
	 * @return CtrSuspenderResponse Resposta da suspensão do Contrato de Serviço.
	 */
	public function SuspenderContrato(CtrSuspenderRequest $ctrSuspenderRequest): CtrSuspenderResponse{
		return $this->_Call('SuspenderContrato',Array(
			$ctrSuspenderRequest
		));
	}

	/**
	 * Ativa um contrato
	 *
	 * @param CtrAtivarRequest $ctrAtivarRequest Solicitação de ativação do Contrato de Serviço.
	 * @return CtrAtivarResponse Resposta da solicitação de ativação do Contrato de Serviço.
	 */
	public function AtivarContrato(CtrAtivarRequest $ctrAtivarRequest): CtrAtivarResponse{
		return $this->_Call('AtivarContrato',Array(
			$ctrAtivarRequest
		));
	}

	/**
	 * Cancela contrato
	 *
	 * @param CtrCancelarRequest $ctrCancelarRequest Solicitação de cancelamento do Contrato de Serviço.
	 * @return CtrCancelarResponse Resposta da solicitação de cancelamento do Contrato de Serviço.
	 */
	public function CancelarContrato(CtrCancelarRequest $ctrCancelarRequest): CtrCancelarResponse{
		return $this->_Call('CancelarContrato',Array(
			$ctrCancelarRequest
		));
	}

	/**
	 * Reativar contrato
	 *
	 * @param CtrReativarRequest $ctrReativarRequest Solicitação de reativação do Contrato de Serviço.
	 * @return CtrReativarResponse Resposta da solicitação de reativação do Contrato de Serviço.
	 */
	public function ReativarContrato(CtrReativarRequest $ctrReativarRequest): CtrReativarResponse{
		return $this->_Call('ReativarContrato',Array(
			$ctrReativarRequest
		));
	}
}
