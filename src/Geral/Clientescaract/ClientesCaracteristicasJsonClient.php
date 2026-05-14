<?php

namespace OmieLib\Geral\Clientescaract;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Geral\Clientescaract\Request\AlterarCaractClienteRequest;
use OmieLib\Geral\Clientescaract\Request\ConsultarCaractClienteRequest;
use OmieLib\Geral\Clientescaract\Request\ExcluirCaractClienteRequest;
use OmieLib\Geral\Clientescaract\Request\ExcluirTodasCaractClienteRequest;
use OmieLib\Geral\Clientescaract\Request\IncluirCaractClienteRequest;
use OmieLib\Geral\Clientescaract\Response\AlterarCaractClienteResponse;
use OmieLib\Geral\Clientescaract\Response\ConsultarCaractClienteResponse;
use OmieLib\Geral\Clientescaract\Response\ExcluirCaractClienteResponse;
use OmieLib\Geral\Clientescaract\Response\ExcluirTodasCaractClienteResponse;
use OmieLib\Geral\Clientescaract\Response\IncluirCaractClienteResponse;

/**
 * @service ClientesCaracteristicasJsonClient
 * @author omie
 */
class ClientesCaracteristicasJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/clientescaract/';

	/**
	 * Altera uma característica de um cliente
	 *
	 * @param AlterarCaractClienteRequest $AlterarCaractClienteRequest Altera uma característica de um cliente/fornecedor.
	 * @return AlterarCaractClienteResponse Resposta da alteração de uma característica de um cliente/fornecedor.
	 */
	public function AlterarCaractCliente(AlterarCaractClienteRequest $AlterarCaractClienteRequest): AlterarCaractClienteResponse{
		return $this->_Call('AlterarCaractCliente',Array(
			$AlterarCaractClienteRequest
		));
	}

	/**
	 * Inclui uma característica para o cliente/fornecedor
	 *
	 * @param IncluirCaractClienteRequest $IncluirCaractClienteRequest Inclui uma característica de um cliente/fornecedor.
	 * @return IncluirCaractClienteResponse Resposta da inclusão de uma característica de um cliente/fornecedor.
	 */
	public function IncluirCaractCliente(IncluirCaractClienteRequest $IncluirCaractClienteRequest): IncluirCaractClienteResponse{
		return $this->_Call('IncluirCaractCliente',Array(
			$IncluirCaractClienteRequest
		));
	}

	/**
	 * Exclui uma característica para o cliente/fornecedor
	 *
	 * @param ExcluirCaractClienteRequest $ExcluirCaractClienteRequest Exclui uma característica de um cliente/fornecedor.
	 * @return ExcluirCaractClienteResponse Resposta da exclusão de uma característica de um cliente/fornecedor.
	 */
	public function ExcluirCaractCliente(ExcluirCaractClienteRequest $ExcluirCaractClienteRequest): ExcluirCaractClienteResponse{
		return $this->_Call('ExcluirCaractCliente',Array(
			$ExcluirCaractClienteRequest
		));
	}

	/**
	 * Exclui todas as características para o cliente/fornecedor
	 *
	 * @param ExcluirTodasCaractClienteRequest $ExcluirTodasCaractClienteRequest Exclui todas as características de um cliente/fornecedor.
	 * @return ExcluirTodasCaractClienteResponse Resposta da exclusão de todas as características de um cliente/fornecedor.
	 */
	public function ExcluirTodasCaractCliente(ExcluirTodasCaractClienteRequest $ExcluirTodasCaractClienteRequest): ExcluirTodasCaractClienteResponse{
		return $this->_Call('ExcluirTodasCaractCliente',Array(
			$ExcluirTodasCaractClienteRequest
		));
	}

	/**
	 * Consultar todas as características do cliente/fornecedor
	 *
	 * @param ConsultarCaractClienteRequest $ConsultarCaractClienteRequest Consulta todas as características de um cliente/fornecedor.
	 * @return ConsultarCaractClienteResponse Resposta da consulta de todas as características de um cliente/fornecedor.
	 */
	public function ConsultarCaractCliente(ConsultarCaractClienteRequest $ConsultarCaractClienteRequest): ConsultarCaractClienteResponse{
		return $this->_Call('ConsultarCaractCliente',Array(
			$ConsultarCaractClienteRequest
		));
	}
}
