<?php

namespace OmieLib\Produtos\Cupomfiscalconsultar;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cupomfiscalconsultar\Request\CfcItensRequest;
use OmieLib\Produtos\Cupomfiscalconsultar\Request\CfcListarRequest;
use OmieLib\Produtos\Cupomfiscalconsultar\Request\CfcPagamentosRequest;
use OmieLib\Produtos\Cupomfiscalconsultar\Response\CfcItensResponse;
use OmieLib\Produtos\Cupomfiscalconsultar\Response\CfcListarResponse;
use OmieLib\Produtos\Cupomfiscalconsultar\Response\CfcPagamentosResponse;

/**
 * Informações do cabeçalho do Cupom Fiscal.
 *
 * @pw_element integer $nIdCupom ID do Cupom Fiscal.
 * @pw_element string $cModeloCupom Modelo de Cupom Fiscal.<BR>Pode ser:<BR>00 - ECF<BR>59 - CFe-SAT<BR>65 - NFC-e
 * @pw_element integer $nNumCupom Número do Cupom Fiscal.
 * @pw_element string $nSerieCupom Série do Cupom Fiscal
 * @pw_element integer $seqCaixa Número sequencial do Caixa.
 * @pw_element string $cChaveCupom Chave do Cupom Fiscal.
 * @pw_element integer $seqCupom Numero sequencial do cupom.
 * @pw_element decimal $nValorCupom Valor do Cupom Fiscal.
 * @pw_element string $dDtEmissaoCupom Data de emissão do Cupom Fiscal.
 * @pw_element string $cHrEmisaoCupom Hora de emissão de Cupom Fiscal.
 * @pw_element integer $idCliente Código do cliente.
 * @pw_element string $cContingencia Indica se o Cupom Fiscal foi Emitido em ambiente de Contingencia. (S/N).
 * @pw_element decimal $nValorTaxa Valor da Taxa.
 * @pw_element decimal $nValorPIS Valor do PIS.
 * @pw_element decimal $nValorCOFINS Valor do COFINS.
 * @pw_element decimal $nValorICMS Valor do ICMS.
 * @pw_element integer $idVendedor Código do Vendedor.
 * @pw_element info $info Informações adicionais do Cupom Fiscal.
 * @pw_complex cabecalhoCupom
 */
class CabecalhoCupom{
	/**
	 * ID do Cupom Fiscal.
	 *
	 * @var integer
	 */
	public int $nIdCupom;
	/**
	 * Modelo de Cupom Fiscal.<BR>Pode ser:<BR>00 - ECF<BR>59 - CFe-SAT<BR>65 - NFC-e
	 *
	 * @var string
	 */
	public string $cModeloCupom;
	/**
	 * Número do Cupom Fiscal.
	 *
	 * @var integer
	 */
	public int $nNumCupom;
	/**
	 * Série do Cupom Fiscal
	 *
	 * @var string
	 */
	public string $nSerieCupom;
	/**
	 * Número sequencial do Caixa.
	 *
	 * @var integer
	 */
	public int $seqCaixa;
	/**
	 * Chave do Cupom Fiscal.
	 *
	 * @var string
	 */
	public string $cChaveCupom;
	/**
	 * Numero sequencial do cupom.
	 *
	 * @var integer
	 */
	public int $seqCupom;
	/**
	 * Valor do Cupom Fiscal.
	 *
	 * @var decimal
	 */
	public float $nValorCupom;
	/**
	 * Data de emissão do Cupom Fiscal.
	 *
	 * @var string
	 */
	public string $dDtEmissaoCupom;
	/**
	 * Hora de emissão de Cupom Fiscal.
	 *
	 * @var string
	 */
	public string $cHrEmisaoCupom;
	/**
	 * Código do cliente.
	 *
	 * @var integer
	 */
	public int $idCliente;
	/**
	 * Indica se o Cupom Fiscal foi Emitido em ambiente de Contingencia. (S/N).
	 *
	 * @var string
	 */
	public string $cContingencia;
	/**
	 * Valor da Taxa.
	 *
	 * @var decimal
	 */
	public float $nValorTaxa;
	/**
	 * Valor do PIS.
	 *
	 * @var decimal
	 */
	public float $nValorPIS;
	/**
	 * Valor do COFINS.
	 *
	 * @var decimal
	 */
	public float $nValorCOFINS;
	/**
	 * Valor do ICMS.
	 *
	 * @var decimal
	 */
	public float $nValorICMS;
	/**
	 * Código do Vendedor.
	 *
	 * @var integer
	 */
	public int $idVendedor;
	/**
	 * Informações adicionais do Cupom Fiscal.
	 *
	 * @var Info
	 */
	public Info $info;
}
