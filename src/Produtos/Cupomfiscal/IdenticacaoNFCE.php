<?php

namespace OmieLib\Produtos\Cupomfiscal;

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
 * Indicação da NFC-e.
 *
 * @pw_element string $nNumeroNFCE Número do NFC-e.
 * @pw_element string $nSerieNFCE Número de Série da NFC-e.
 * @pw_element string $nChaveNFCE Chave do Cupom Fiscal.
 * @pw_complex IdenticacaoNFCE
 */
class IdenticacaoNFCE{
	/**
	 * Número do NFC-e.
	 *
	 * @var string
	 */
	public string $nNumeroNFCE;
	/**
	 * Número de Série da NFC-e.
	 *
	 * @var string
	 */
	public string $nSerieNFCE;
	/**
	 * Chave do Cupom Fiscal.
	 *
	 * @var string
	 */
	public string $nChaveNFCE;
}
