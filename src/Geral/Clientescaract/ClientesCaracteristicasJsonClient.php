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
	public function AlterarCaractCliente(AlterarCaractClienteRequest $AlterarCaractClienteRequest): ?AlterarCaractClienteResponse {
		$res = $this->_Call('AlterarCaractCliente',Array(
			$AlterarCaractClienteRequest
		));
		return $this->_Cast($res, AlterarCaractClienteResponse::class);
	}

	/**
	 * Inclui uma característica para o cliente/fornecedor
	 *
	 * @param IncluirCaractClienteRequest $IncluirCaractClienteRequest Inclui uma característica de um cliente/fornecedor.
	 * @return IncluirCaractClienteResponse Resposta da inclusão de uma característica de um cliente/fornecedor.
	 */
	public function IncluirCaractCliente(IncluirCaractClienteRequest $IncluirCaractClienteRequest): ?IncluirCaractClienteResponse {
		$res = $this->_Call('IncluirCaractCliente',Array(
			$IncluirCaractClienteRequest
		));
		return $this->_Cast($res, IncluirCaractClienteResponse::class);
	}

	/**
	 * Exclui uma característica para o cliente/fornecedor
	 *
	 * @param ExcluirCaractClienteRequest $ExcluirCaractClienteRequest Exclui uma característica de um cliente/fornecedor.
	 * @return ExcluirCaractClienteResponse Resposta da exclusão de uma característica de um cliente/fornecedor.
	 */
	public function ExcluirCaractCliente(ExcluirCaractClienteRequest $ExcluirCaractClienteRequest): ?ExcluirCaractClienteResponse {
		$res = $this->_Call('ExcluirCaractCliente',Array(
			$ExcluirCaractClienteRequest
		));
		return $this->_Cast($res, ExcluirCaractClienteResponse::class);
	}

	/**
	 * Exclui todas as características para o cliente/fornecedor
	 *
	 * @param ExcluirTodasCaractClienteRequest $ExcluirTodasCaractClienteRequest Exclui todas as características de um cliente/fornecedor.
	 * @return ExcluirTodasCaractClienteResponse Resposta da exclusão de todas as características de um cliente/fornecedor.
	 */
	public function ExcluirTodasCaractCliente(ExcluirTodasCaractClienteRequest $ExcluirTodasCaractClienteRequest): ?ExcluirTodasCaractClienteResponse {
		$res = $this->_Call('ExcluirTodasCaractCliente',Array(
			$ExcluirTodasCaractClienteRequest
		));
		return $this->_Cast($res, ExcluirTodasCaractClienteResponse::class);
	}

	/**
	 * Consultar todas as características do cliente/fornecedor
	 *
	 * @param ConsultarCaractClienteRequest $ConsultarCaractClienteRequest Consulta todas as características de um cliente/fornecedor.
	 * @return ConsultarCaractClienteResponse Resposta da consulta de todas as características de um cliente/fornecedor.
	 */
	public function ConsultarCaractCliente(ConsultarCaractClienteRequest $ConsultarCaractClienteRequest): ?ConsultarCaractClienteResponse {
		$res = $this->_Call('ConsultarCaractCliente',Array(
			$ConsultarCaractClienteRequest
		));
		return $this->_Cast($res, ConsultarCaractClienteResponse::class);
	}
}
