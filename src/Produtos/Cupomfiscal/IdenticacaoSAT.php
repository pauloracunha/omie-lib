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
 * Indicação do CF-e-SAT.
 *
 * @pw_element integer $nNumeroSAT Número do CF-e-SAT.
 * @pw_element string $nChaveSAT Chave da CF-e-SAT.
 * @pw_element string $cNumeroSerieSAT Número de Série do Equipamento SAT.
 * @pw_complex IdenticacaoSAT
 */
class IdenticacaoSAT{
	/**
	 * Número do CF-e-SAT.
	 *
	 * @var integer
	 */
	public int $nNumeroSAT;
	/**
	 * Chave da CF-e-SAT.
	 *
	 * @var string
	 */
	public string $nChaveSAT;
	/**
	 * Número de Série do Equipamento SAT.
	 *
	 * @var string
	 */
	public string $cNumeroSerieSAT;
}
