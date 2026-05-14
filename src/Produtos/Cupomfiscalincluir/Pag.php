<?php

namespace OmieLib\Produtos\Cupomfiscalincluir;

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
 * Informações do pagamento.
 *
 * @pw_element decimal $vPag Valor do pagamento.<BR><BR>Preenchimento obrigatório.
 * @pw_element decimal $vTroco Valor do troco.
 * @pw_element decimal $vTaxa Valor da taxa da administradora de cartões.
 * @pw_element decimal $pTaxa Percentual da taxa da administradora de cartões.
 * @pw_element decimal $vLiq Valor líquido do pagamento.<BR><BR>Preenchimento obrigatório.
 * @pw_complex pag
 */
class Pag{
	/**
	 * Valor do pagamento.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var decimal
	 */
	public float $vPag;
	/**
	 * Valor do troco.
	 *
	 * @var decimal
	 */
	public float $vTroco;
	/**
	 * Valor da taxa da administradora de cartões.
	 *
	 * @var decimal
	 */
	public float $vTaxa;
	/**
	 * Percentual da taxa da administradora de cartões.
	 *
	 * @var decimal
	 */
	public float $pTaxa;
	/**
	 * Valor líquido do pagamento.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var decimal
	 */
	public float $vLiq;
}
