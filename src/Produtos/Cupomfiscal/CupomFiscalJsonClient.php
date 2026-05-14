<?php

namespace OmieLib\Produtos\Cupomfiscal;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cupomfiscal\Request\CfCancelarNfceRequest;
use OmieLib\Produtos\Cupomfiscal\Request\CfCancelarRequest;
use OmieLib\Produtos\Cupomfiscal\Request\CfCancelarSatRequest;
use OmieLib\Produtos\Cupomfiscal\Request\CfDevolverCupomRequest;
use OmieLib\Produtos\Cupomfiscal\Request\CfExcluirLoteRequest;
use OmieLib\Produtos\Cupomfiscal\Request\CfExcluirPorNumRequest;
use OmieLib\Produtos\Cupomfiscal\Request\CfExcluirRequest;
use OmieLib\Produtos\Cupomfiscal\Request\CfListarRequest;
use OmieLib\Produtos\Cupomfiscal\Request\CfObterProxLoteRequest;
use OmieLib\Produtos\Cupomfiscal\Response\CfCancelarNfceResponse;
use OmieLib\Produtos\Cupomfiscal\Response\CfCancelarResponse;
use OmieLib\Produtos\Cupomfiscal\Response\CfCancelarSatResponse;
use OmieLib\Produtos\Cupomfiscal\Response\CfDevolverCupomResponse;
use OmieLib\Produtos\Cupomfiscal\Response\CfExcluirLoteResponse;
use OmieLib\Produtos\Cupomfiscal\Response\CfExcluirPorNumResponse;
use OmieLib\Produtos\Cupomfiscal\Response\CfExcluirResponse;
use OmieLib\Produtos\Cupomfiscal\Response\CfListarResponse;
use OmieLib\Produtos\Cupomfiscal\Response\CfObterProxLoteResponse;

/**
 * @service CupomFiscalJsonClient
 * @author omie
 */
class CupomFiscalJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/cupomfiscal/';

	/**
	 * Retorna o próximo número de lote disponível.
	 *
	 * @param CfObterProxLoteRequest $cfObterProxLoteRequest Resposta da solicitação de listagem de cupons fiscais.
	 * @return CfObterProxLoteResponse Resposta da solicitação do próximo número do lote disponível.
	 */
	public function ObterProximoLote(CfObterProxLoteRequest $cfObterProxLoteRequest): CfObterProxLoteResponse{
		return $this->_Call('ObterProximoLote',Array(
			$cfObterProxLoteRequest
		));
	}

	/**
	 * Cancela um cupom Fiscal
	 *
	 * @param CfCancelarRequest $cfCancelarRequest Solicitação de cancelamento do Cupom Fiscal.
	 * @return CfCancelarResponse Resposta da solicitação da cancelar de Cupom Fiscal.
	 */
	public function CancelarCupom(CfCancelarRequest $cfCancelarRequest): CfCancelarResponse{
		return $this->_Call('CancelarCupom',Array(
			$cfCancelarRequest
		));
	}

	/**
	 * Cancelar NFC-e.
	 *
	 * @param CfCancelarNfceRequest $cfCancelarNfceRequest Solicitação de cancelamento de NFC-e.
	 * @return CfCancelarNfceResponse Resposta da solicitação da cancelar da NFC-e.
	 */
	public function CancelarNFCE(CfCancelarNfceRequest $cfCancelarNfceRequest): CfCancelarNfceResponse{
		return $this->_Call('CancelarNFCE',Array(
			$cfCancelarNfceRequest
		));
	}

	/**
	 * Cancelar CF-e-SAT.
	 *
	 * @param CfCancelarSatRequest $cfCancelarSatRequest Solicitação de cancelamento de SAT.
	 * @return CfCancelarSatResponse Resposta da solicitação da cancelar do CF-e-SAT.
	 */
	public function CancelarSAT(CfCancelarSatRequest $cfCancelarSatRequest): CfCancelarSatResponse{
		return $this->_Call('CancelarSAT',Array(
			$cfCancelarSatRequest
		));
	}

	/**
	 * Excluir cupons por número.
	 *
	 * @param CfExcluirPorNumRequest $cfExcluirPorNumRequest Solicitação de exclusão de Cupom Fiscal por Número.
	 * @return CfExcluirPorNumResponse Resposta da solicitação da exclusão de Cupom Fiscal por número.
	 */
	public function ExcluirCuponsPorNumero(CfExcluirPorNumRequest $cfExcluirPorNumRequest): CfExcluirPorNumResponse{
		return $this->_Call('ExcluirCuponsPorNumero',Array(
			$cfExcluirPorNumRequest
		));
	}

	/**
	 * Exclui um Cupom Fiscal.
	 *
	 * @param CfExcluirRequest $cfExcluirRequest Solicitação de exclusão de Cupom Fiscal.
	 * @return CfExcluirResponse Resposta da solicitação da exclusão de Cupom Fiscal.
	 */
	public function ExcluirCupom(CfExcluirRequest $cfExcluirRequest): CfExcluirResponse{
		return $this->_Call('ExcluirCupom',Array(
			$cfExcluirRequest
		));
	}

	/**
	 * Excluir o lote
	 *
	 * @param CfExcluirLoteRequest $cfExcluirLoteRequest Solicitação de exclusão de Lote de Cupom Fiscal.
	 * @return CfExcluirLoteResponse Resposta da solicitação de exclusão de Lote de Cupom Fiscal.
	 */
	public function ExcluirLote(CfExcluirLoteRequest $cfExcluirLoteRequest): CfExcluirLoteResponse{
		return $this->_Call('ExcluirLote',Array(
			$cfExcluirLoteRequest
		));
	}

	/**
	 * Lista os Cupons Fiscais.
	 *
	 * @param CfListarRequest $cfListarRequest Listagem de cupons fiscais.
	 * @return CfListarResponse Resposta da solicitação de listagem de cupons fiscais.
	 */
	public function ListarCupons(CfListarRequest $cfListarRequest): CfListarResponse{
		return $this->_Call('ListarCupons',Array(
			$cfListarRequest
		));
	}

	/**
	 * Realiza a inclusão da devolução do cupom fiscal.
	 *
	 * @param CfDevolverCupomRequest $cfDevolverCupomRequest Solicitação da inclusão da devolução do Cupom Fiscal.
	 * @return CfDevolverCupomResponse Resposta da solicitação da inclusão da devolução do Cupom Fiscal.
	 */
	public function DevolverCupom(CfDevolverCupomRequest $cfDevolverCupomRequest): CfDevolverCupomResponse{
		return $this->_Call('DevolverCupom',Array(
			$cfDevolverCupomRequest
		));
	}
}
