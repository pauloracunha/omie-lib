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
 * Solicitação de cancelamento do Cupom Fiscal.
 *
 * @pw_element integer $nIdCupom ID do Cupom Fiscal.
 * @pw_complex cfCancelarRequest
 */
class CfCancelarRequest{
	/**
	 * ID do Cupom Fiscal.
	 *
	 * @var integer
	 */
	public int $nIdCupom;
}
