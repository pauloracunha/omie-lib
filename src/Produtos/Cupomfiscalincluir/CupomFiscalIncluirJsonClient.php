<?php

namespace OmieLib\Produtos\Cupomfiscalincluir;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfFecharCaixaRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirEcfRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirNfceRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirRpsRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirSatRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfInutilizarNfceRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfFecharCaixaResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirEcfResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirNfceResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirRpsResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirSatResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfInutilizarNfceResponse;

/**
 * @service CupomFiscalIncluirJsonClient
 * @author omie
 */
class CupomFiscalIncluirJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/cupomfiscalincluir/';

	/**
	 * Incluir Cupom Fiscal (ECF).
	 *
	 * @param CfIncluirEcfRequest $cfIncluirEcfRequest Incluir um cupom fiscal emitido em via Impressora Fiscal (ECF).
	 * @return CfIncluirEcfResponse Resposta da inclusão de cupom fiscal emitido via Impressora Fiscal (ECF).
	 */
	public function IncluirCupom(CfIncluirEcfRequest $cfIncluirEcfRequest): CfIncluirEcfResponse{
		return $this->_Call('IncluirCupom',Array(
			$cfIncluirEcfRequest
		));
	}

	/**
	 * Incluir Cupom Fiscal para SAT.
	 *
	 * @param CfIncluirSatRequest $cfIncluirSatRequest Incluir Cupom Fiscal Eletrônico gerado com SAT Fiscal.
	 * @return CfIncluirSatResponse Resposta da inclusão de Cupom Fiscal Eletrônico gerado com SAT Fiscal.
	 */
	public function IncluirCfeSat(CfIncluirSatRequest $cfIncluirSatRequest): CfIncluirSatResponse{
		return $this->_Call('IncluirCfeSat',Array(
			$cfIncluirSatRequest
		));
	}

	/**
	 * Incluir Nota Fiscal Consumidor Eletrônico.
	 *
	 * @param CfIncluirNfceRequest $cfIncluirNfceRequest Incluir Nota Fiscal Consumidor Eletrônica (NFC-e).
	 * @return CfIncluirNfceResponse Resposta da inclusão de Nota Fiscal Consumidor Eletrônica (NFC-e)
	 */
	public function IncluirNfce(CfIncluirNfceRequest $cfIncluirNfceRequest): CfIncluirNfceResponse{
		return $this->_Call('IncluirNfce',Array(
			$cfIncluirNfceRequest
		));
	}

	/**
	 * Inutiliza um lote de NFC-e.
	 *
	 * @param CfInutilizarNfceRequest $cfInutilizarNfceRequest Solicitação da Inutilização da Nota Fiscal Consumidor Eletrônica (NFC-e).
	 * @return CfInutilizarNfceResponse Resposta da solicitação de Inutilização de Nota Fiscal Consumidor Eletrônica (NFC-e)
	 */
	public function InutilizarNfce(CfInutilizarNfceRequest $cfInutilizarNfceRequest): CfInutilizarNfceResponse{
		return $this->_Call('InutilizarNfce',Array(
			$cfInutilizarNfceRequest
		));
	}

	/**
	 * Efetua o fechamento de um determinado caixa.
	 *
	 * @param CfFecharCaixaRequest $cfFecharCaixaRequest Efetua a rotina de fechamento do caixa.
	 * @return CfFecharCaixaResponse Resposta da rotina de fechamento do caixa.
	 */
	public function FecharCaixa(CfFecharCaixaRequest $cfFecharCaixaRequest): CfFecharCaixaResponse{
		return $this->_Call('FecharCaixa',Array(
			$cfFecharCaixaRequest
		));
	}

	/**
	 * Incluir Cupom RPS.
	 *
	 * @param CfIncluirRpsRequest $cfIncluirRpsRequest Incluir Cupom RPS.
	 * @return CfIncluirRpsResponse Resposta da inclusão do Cupom RPS.
	 */
	public function IncluirRps(CfIncluirRpsRequest $cfIncluirRpsRequest): CfIncluirRpsResponse{
		return $this->_Call('IncluirRps',Array(
			$cfIncluirRpsRequest
		));
	}
}
