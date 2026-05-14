<?php

namespace OmieLib\Financas\Contareceberboleto;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contareceberboleto\Request\BoletoCancelarRequest;
use OmieLib\Financas\Contareceberboleto\Request\BoletoGerarRequest;
use OmieLib\Financas\Contareceberboleto\Request\BoletoObterRequest;
use OmieLib\Financas\Contareceberboleto\Request\BoletoProrrogarRequest;
use OmieLib\Financas\Contareceberboleto\Response\BoletoCancelarResponse;
use OmieLib\Financas\Contareceberboleto\Response\BoletoGerarResponse;
use OmieLib\Financas\Contareceberboleto\Response\BoletoObterResponse;
use OmieLib\Financas\Contareceberboleto\Response\BoletoProrrogarResponse;

/**
 * @service ContaReceberBoletoJsonClient
 * @author omie
 */
class ContaReceberBoletoJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='financas/contareceberboleto/';

	/**
	 * Gera um Boleto referente a um Contas a Receber.
	 *
	 * @param BoletoGerarRequest $boletoGerarRequest Gera um Boleto a partir de um Contas a Receber.<BR>ATENÇÃO: Os boletos gerados e já enviados ao banco estão sujeitos a tarifação (de emissão, cancelamento ou de alteração da data de vencimento do boleto).
	 * @return BoletoGerarResponse Resposta da solicitação de geração de um boleto.
	 */
	public function GerarBoleto(BoletoGerarRequest $boletoGerarRequest): BoletoGerarResponse{
		return $this->_Call('GerarBoleto',Array(
			$boletoGerarRequest
		));
	}

	/**
	 * Disponibiliza o link de Download do Boleto.
	 *
	 * @param BoletoObterRequest $boletoObterRequest Solicitação do link do boleto de um título.<BR>ATENÇÃO: Os boletos gerados e já enviados ao banco estão sujeitos a tarifação (de emissão, cancelamento ou de alteração da data de vencimento do boleto).
	 * @return BoletoObterResponse Resposta da solicitação link do boleto de um título.
	 */
	public function ObterBoleto(BoletoObterRequest $boletoObterRequest): BoletoObterResponse{
		return $this->_Call('ObterBoleto',Array(
			$boletoObterRequest
		));
	}

	/**
	 * Prorroga o vencimento do Boleto.
	 *
	 * @param BoletoProrrogarRequest $boletoProrrogarRequest Prorroga o vencimento de um Boleto.<BR>ATENÇÃO: Os boletos gerados e já enviados ao banco estão sujeitos a tarifação (de emissão, cancelamento ou de alteração da data de vencimento do boleto).
	 * @return BoletoProrrogarResponse Resposta da solicitação para Prorrogar o vencimento de um Boleto.
	 */
	public function ProrrogarBoleto(BoletoProrrogarRequest $boletoProrrogarRequest): BoletoProrrogarResponse{
		return $this->_Call('ProrrogarBoleto',Array(
			$boletoProrrogarRequest
		));
	}

	/**
	 * Cancela o Boleto.
	 *
	 * @param BoletoCancelarRequest $boletoCancelarRequest Cancela o Boleto.<BR>ATENÇÃO: Os boletos gerados e já enviados ao banco estão sujeitos a tarifação (de emissão, cancelamento ou de alteração da data de vencimento do boleto).
	 * @return BoletoCancelarResponse Resposta da solicitação do Cancelamento de um Boleto.
	 */
	public function CancelarBoleto(BoletoCancelarRequest $boletoCancelarRequest): BoletoCancelarResponse{
		return $this->_Call('CancelarBoleto',Array(
			$boletoCancelarRequest
		));
	}
}
