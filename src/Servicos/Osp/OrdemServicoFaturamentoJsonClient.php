<?php

namespace OmieLib\Servicos\Osp;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Osp\Request\OsAssociarCodIntRequest;
use OmieLib\Servicos\Osp\Request\OsCancelarRequest;
use OmieLib\Servicos\Osp\Request\OsDuplicarRequest;
use OmieLib\Servicos\Osp\Request\OsFaturarRequest;
use OmieLib\Servicos\Osp\Request\OsObterRequest;
use OmieLib\Servicos\Osp\Request\OsReenviarRequest;
use OmieLib\Servicos\Osp\Request\OsValidarRequest;
use OmieLib\Servicos\Osp\Response\OsAssociarCodIntResponse;
use OmieLib\Servicos\Osp\Response\OsCancelarResponse;
use OmieLib\Servicos\Osp\Response\OsDuplicarResponse;
use OmieLib\Servicos\Osp\Response\OsFaturarResponse;
use OmieLib\Servicos\Osp\Response\OsObterResponse;
use OmieLib\Servicos\Osp\Response\OsReenviarResponse;
use OmieLib\Servicos\Osp\Response\OsValidarResponse;

/**
 * @service OrdemServicoFaturamentoJsonClient
 * @author omie
 */
class OrdemServicoFaturamentoJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='servicos/osp/';

	/**
	 * Valida uma Ordem de Serviço para faturamento.
	 *
	 * @param OsValidarRequest $osValidarRequest Solicitação de validação da Ordem de Serviço.
	 * @return OsValidarResponse Resposta da solicitação de validação da Ordem de Serviço.
	 */
	public function ValidarOS(OsValidarRequest $osValidarRequest): OsValidarResponse{
		return $this->_Call('ValidarOS',Array(
			$osValidarRequest
		));
	}

	/**
	 * Fatura uma Ordem de Serviço.
	 *
	 * @param OsFaturarRequest $osFaturarRequest Solicitação de validação da Ordem de Serviço.
	 * @return OsFaturarResponse Resposta da solicitação de faturamento da Ordem de Serviço.
	 */
	public function FaturarOS(OsFaturarRequest $osFaturarRequest): OsFaturarResponse{
		return $this->_Call('FaturarOS',Array(
			$osFaturarRequest
		));
	}

	/**
	 * Cancela um Ordem de Serviço faturada
	 *
	 * @param OsCancelarRequest $osCancelarRequest Solicitação de cancelamento da Ordem de Serviço.
	 * @return OsCancelarResponse Resposta da solicitação de cancelamento da Ordem de Serviço.
	 */
	public function CancelarOS(OsCancelarRequest $osCancelarRequest): OsCancelarResponse{
		return $this->_Call('CancelarOS',Array(
			$osCancelarRequest
		));
	}

	/**
	 * Duplica uma Ordem de Serviço.
	 *
	 * @param OsDuplicarRequest $osDuplicarRequest Solicitação de duplicação da Ordem de Serviço.
	 * @return OsDuplicarResponse Resposta da solicitação de duplicação da Ordem de Serviço.
	 */
	public function DuplicarOS(OsDuplicarRequest $osDuplicarRequest): OsDuplicarResponse{
		return $this->_Call('DuplicarOS',Array(
			$osDuplicarRequest
		));
	}

	/**
	 * Associa o código de integração a uma Ordem de Serviço.
	 *
	 * @param OsAssociarCodIntRequest $osAssociarCodIntRequest Solicitação de alteração do código de integração da Ordem de Serviço.
	 * @return OsAssociarCodIntResponse Resposta da solicitação de alteração do código de integração da Ordem de Serviço.
	 */
	public function AssociarCodIntOS(OsAssociarCodIntRequest $osAssociarCodIntRequest): OsAssociarCodIntResponse{
		return $this->_Call('AssociarCodIntOS',Array(
			$osAssociarCodIntRequest
		));
	}

	/**
	 * Reenvia uma Ordem de Serviço.
	 *
	 * @param OsReenviarRequest $osReenviarRequest Solicitação de Reenvio da Ordem de Serviço.
	 * @return OsReenviarResponse Resposta da solicitação de reenvio da Ordem de Serviço.
	 */
	public function ReenviarOS(OsReenviarRequest $osReenviarRequest): OsReenviarResponse{
		return $this->_Call('ReenviarOS',Array(
			$osReenviarRequest
		));
	}

	/**
	 * Lista as Ordens de Serviço que se encontram em uma etapa específica do processo de faturamento de OS.
	 *
	 * @param OsObterRequest $osObterRequest Lista as Ordens de Serviço que se encontram em uma etapa do processo de faturamento de ordens de serviço.
	 * @return OsObterResponse Resposta da solicitação da lista de Ordens de Serviço de uma etapa.
	 */
	public function ObterOS(OsObterRequest $osObterRequest): OsObterResponse{
		return $this->_Call('ObterOS',Array(
			$osObterRequest
		));
	}
}
