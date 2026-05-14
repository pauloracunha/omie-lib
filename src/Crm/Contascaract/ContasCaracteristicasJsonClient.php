<?php

namespace OmieLib\Crm\Contascaract;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Crm\Contascaract\Request\AlterarCaractCRMContaRequest;
use OmieLib\Crm\Contascaract\Request\ConsultarCaractCRMContaRequest;
use OmieLib\Crm\Contascaract\Request\ExcluirCaractCRMContaRequest;
use OmieLib\Crm\Contascaract\Request\ExcluirTodasCaractCRMContaRequest;
use OmieLib\Crm\Contascaract\Request\IncluirCaractCRMContaRequest;
use OmieLib\Crm\Contascaract\Response\AlterarCaractCRMContaResponse;
use OmieLib\Crm\Contascaract\Response\ConsultarCaractCRMContaResponse;
use OmieLib\Crm\Contascaract\Response\ExcluirCaractCRMContaResponse;
use OmieLib\Crm\Contascaract\Response\ExcluirTodasCaractCRMContaResponse;
use OmieLib\Crm\Contascaract\Response\IncluirCaractCRMContaResponse;

/**
 * @service ContasCaracteristicasJsonClient
 * @author omie
 */
class ContasCaracteristicasJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='crm/contascaract/';

	/**
	 * Altera uma característica de uma conta
	 *
	 * @param AlterarCaractCRMContaRequest $AlterarCaractCRMContaRequest Altera uma característica de uma conta
	 * @return AlterarCaractCRMContaResponse Resposta da alteração de uma característica de uma conta.
	 */
	public function AlterarCaractConta(AlterarCaractCRMContaRequest $AlterarCaractCRMContaRequest): AlterarCaractCRMContaResponse{
		return $this->_Call('AlterarCaractConta',Array(
			$AlterarCaractCRMContaRequest
		));
	}

	/**
	 * Inclui uma característica para a conta
	 *
	 * @param IncluirCaractCRMContaRequest $IncluirCaractCRMContaRequest Inclui uma característica para uma conta
	 * @return IncluirCaractCRMContaResponse Resposta da inclusão de uma característica de uma conta.
	 */
	public function IncluirCaractConta(IncluirCaractCRMContaRequest $IncluirCaractCRMContaRequest): IncluirCaractCRMContaResponse{
		return $this->_Call('IncluirCaractConta',Array(
			$IncluirCaractCRMContaRequest
		));
	}

	/**
	 * Exclui uma característica de uma conta
	 *
	 * @param ExcluirCaractCRMContaRequest $ExcluirCaractCRMContaRequest Exclui uma característica de uma contar.
	 * @return ExcluirCaractCRMContaResponse Resposta da exclusão de uma característica de uma conta.
	 */
	public function ExcluirCaractConta(ExcluirCaractCRMContaRequest $ExcluirCaractCRMContaRequest): ExcluirCaractCRMContaResponse{
		return $this->_Call('ExcluirCaractConta',Array(
			$ExcluirCaractCRMContaRequest
		));
	}

	/**
	 * Exclui todas as características de uma conta
	 *
	 * @param ExcluirTodasCaractCRMContaRequest $ExcluirTodasCaractCRMContaRequest Exclui todas as características de uma conta.
	 * @return ExcluirTodasCaractCRMContaResponse Resposta da exclusão de todas as características de uma conta.
	 */
	public function ExcluirTodasCaractConta(ExcluirTodasCaractCRMContaRequest $ExcluirTodasCaractCRMContaRequest): ExcluirTodasCaractCRMContaResponse{
		return $this->_Call('ExcluirTodasCaractConta',Array(
			$ExcluirTodasCaractCRMContaRequest
		));
	}

	/**
	 * Consultar todas as características da conta
	 *
	 * @param ConsultarCaractCRMContaRequest $ConsultarCaractCRMContaRequest Consulta todas as características de uma conta.
	 * @return ConsultarCaractCRMContaResponse Resposta da consulta de todas as características de uma conta.
	 */
	public function ConsultarCaractConta(ConsultarCaractCRMContaRequest $ConsultarCaractCRMContaRequest): ConsultarCaractCRMContaResponse{
		return $this->_Call('ConsultarCaractConta',Array(
			$ConsultarCaractCRMContaRequest
		));
	}
}
