<?php

namespace OmieLib\Produtos\Cupomfiscal\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cupomfiscal\CupomFiscalJsonClient;
use OmieLib\Produtos\Cupomfiscal\DadosCancNFCE;
use OmieLib\Produtos\Cupomfiscal\DadosCancSAT;
use OmieLib\Produtos\Cupomfiscal\IdenticacaoNFCE;
use OmieLib\Produtos\Cupomfiscal\IdenticacaoSAT;
use OmieLib\Produtos\Cupomfiscal\Itens;
use OmieLib\Produtos\Cupomfiscal\ListaCupons;
use OmieLib\Produtos\Cupomfiscal\Request\CfCancelarNfceRequest;
use OmieLib\Produtos\Cupomfiscal\Request\CfCancelarRequest;
use OmieLib\Produtos\Cupomfiscal\Request\CfCancelarSatRequest;
use OmieLib\Produtos\Cupomfiscal\Request\CfDevolverCupomRequest;
use OmieLib\Produtos\Cupomfiscal\Request\CfExcluirLoteRequest;
use OmieLib\Produtos\Cupomfiscal\Request\CfExcluirPorNumRequest;
use OmieLib\Produtos\Cupomfiscal\Request\CfExcluirRequest;
use OmieLib\Produtos\Cupomfiscal\Request\CfListarRequest;
use OmieLib\Produtos\Cupomfiscal\Request\CfObterProxLoteRequest;

/**
 * Resposta da solicitação da exclusão de Cupom Fiscal.
 *
 * @pw_element integer $nIdCupom ID do Cupom Fiscal.
 * @pw_element string $cCodStatus Código do Status do processamento.
 * @pw_element string $cDesStatus Descrição do status de processamento.
 * @pw_complex cfExcluirResponse
 */
class CfExcluirResponse{
	/**
	 * ID do Cupom Fiscal.
	 *
	 * @var integer
	 */
	public int $nIdCupom;
	/**
	 * Código do Status do processamento.
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do status de processamento.
	 *
	 * @var string
	 */
	public string $cDesStatus;
}
