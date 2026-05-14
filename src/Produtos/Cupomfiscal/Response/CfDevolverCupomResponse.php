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
 * Resposta da solicitação da inclusão da devolução do Cupom Fiscal.
 *
 * @pw_element integer $nIdDevolucao ID da devolução.
 * @pw_element string $cCodStatus Código do Status do processamento.
 * @pw_element string $cDesStatus Descrição do status de processamento.
 * @pw_complex cfDevolverCupomResponse
 */
class CfDevolverCupomResponse{
	/**
	 * ID da devolução.
	 *
	 * @var integer
	 */
	public int $nIdDevolucao;
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
