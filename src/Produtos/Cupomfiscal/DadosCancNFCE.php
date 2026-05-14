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
 * Dados do Cancelamento da NFC-e.
 *
 * @pw_element string $nProtCancNFCE Número do Protocolo de Cancelamento da NFC-e.
 * @pw_element string $nChaveCancNFCE Chave de Cancelamento da NFC-e.
 * @pw_element string $cXmlCancNFCE XML de Cancelamento da NFC-e.
 * @pw_element string $cDataCancelamento Data de Cancelamento.<BR><BR>No formato "dd/mm/aaaa".
 * @pw_element string $cHoraCancelamento Hora de Cancelamento.<BR><BR>No formato "hh:mm:ss".<BR>
 * @pw_complex DadosCancNFCE
 */
class DadosCancNFCE{
	/**
	 * Número do Protocolo de Cancelamento da NFC-e.
	 *
	 * @var string
	 */
	public string $nProtCancNFCE;
	/**
	 * Chave de Cancelamento da NFC-e.
	 *
	 * @var string
	 */
	public string $nChaveCancNFCE;
	/**
	 * XML de Cancelamento da NFC-e.
	 *
	 * @var string
	 */
	public string $cXmlCancNFCE;
	/**
	 * Data de Cancelamento.<BR><BR>No formato "dd/mm/aaaa".
	 *
	 * @var string
	 */
	public string $cDataCancelamento;
	/**
	 * Hora de Cancelamento.<BR><BR>No formato "hh:mm:ss".<BR>
	 *
	 * @var string
	 */
	public string $cHoraCancelamento;
}
