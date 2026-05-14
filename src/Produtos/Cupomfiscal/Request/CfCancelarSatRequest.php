<?php

namespace OmieLib\Produtos\Cupomfiscal\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cupomfiscal\CupomFiscalJsonClient;
use OmieLib\Produtos\Cupomfiscal\DadosCancNFCE;
use OmieLib\Produtos\Cupomfiscal\DadosCancSAT;
use OmieLib\Produtos\Cupomfiscal\IdenticacaoNFCE;
use OmieLib\Produtos\Cupomfiscal\IdenticacaoSAT;
use OmieLib\Produtos\Cupomfiscal\Itens;
use OmieLib\Produtos\Cupomfiscal\ListaCupons;
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
 * Solicitação de cancelamento de SAT.
 *
 * @pw_element string $nCodigoPDV Código do PDV.<BR><BR>Preenchimento opcional.
 * @pw_element integer $nNumeroCaixa Número do Movimento (Caixa).
 * @pw_element string $cDataEmissao Data de emissão do Cupom Fiscal.
 * @pw_element IdenticacaoSAT $IdenticacaoSAT Indicação do CF-e-SAT.
 * @pw_element DadosCancSAT $DadosCancSAT Dados do Cancelamento do CF-e-SAT.
 * @pw_complex cfCancelarSatRequest
 */
class CfCancelarSatRequest{
	/**
	 * Código do PDV.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $nCodigoPDV;
	/**
	 * Número do Movimento (Caixa).
	 *
	 * @var integer
	 */
	public int $nNumeroCaixa;
	/**
	 * Data de emissão do Cupom Fiscal.
	 *
	 * @var string
	 */
	public string $cDataEmissao;
	/**
	 * Indicação do CF-e-SAT.
	 *
	 * @var IdenticacaoSAT
	 */
	public IdenticacaoSAT $IdenticacaoSAT;
	/**
	 * Dados do Cancelamento do CF-e-SAT.
	 *
	 * @var DadosCancSAT
	 */
	public DadosCancSAT $DadosCancSAT;
}
