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
 * Lista de Cupons Fiscais.
 *
 * @pw_element integer $nNumLote Número do Lote do Cupom Fiscal.
 * @pw_element integer $nNumMovimento Número do Movimento (Caixa).
 * @pw_element string $dDtEmissao Data de emissão do Cupom Fiscal.
 * @pw_element string $cHrEmisao Hora de emissão de Cupom Fiscal.
 * @pw_element integer $nNumVenda Número do Cupom Fiscal.
 * @pw_element integer $nNumCupom Número do Cupom Fiscal.
 * @pw_element decimal $nValorNF Valor do Cupom Fiscal.
 * @pw_element string $cProcessado Cupom Fiscal foi processado (S/N)?<BR><BR>Também como retornar como 'E' indicando que o cupom foi excluído.
 * @pw_element string $cCaixaFechado Caixa está fechado (S/N)?
 * @pw_element string $cCancelado Cupom Fiscal Cancelado (S/N)?
 * @pw_element string $cErro Cupom Fiscal com erro no processamento (S/N)?
 * @pw_element string $cAcao Ação realizada.<BR>Pode ser:<BR>ADD - Adiciona um cupom.<BR>TMP - Adiciona um cupom de um caixa em aberto.<BR>CAN - Cupom Cancelado.<BR>CTG - Cupom em Contingência.<BR>INU - Cupom Inutilizado.<BR>EXC - Cupom Excluído.
 * @pw_element string $cModelo Modelo de Cupom Fiscal.<BR>Pode ser:<BR>00 - ECF<BR>59 - CFe-SAT<BR>65 - NFC-e
 * @pw_element string $cChave Chave do Cupom Fiscal.
 * @pw_element integer $nIdCupom ID do Cupom Fiscal.
 * @pw_complex listaCupons
 */
class ListaCupons{
	/**
	 * Número do Lote do Cupom Fiscal.
	 *
	 * @var integer
	 */
	public int $nNumLote;
	/**
	 * Número do Movimento (Caixa).
	 *
	 * @var integer
	 */
	public int $nNumMovimento;
	/**
	 * Data de emissão do Cupom Fiscal.
	 *
	 * @var string
	 */
	public string $dDtEmissao;
	/**
	 * Hora de emissão de Cupom Fiscal.
	 *
	 * @var string
	 */
	public string $cHrEmisao;
	/**
	 * Número do Cupom Fiscal.
	 *
	 * @var integer
	 */
	public int $nNumVenda;
	/**
	 * Número do Cupom Fiscal.
	 *
	 * @var integer
	 */
	public int $nNumCupom;
	/**
	 * Valor do Cupom Fiscal.
	 *
	 * @var decimal
	 */
	public float $nValorNF;
	/**
	 * Cupom Fiscal foi processado (S/N)?<BR><BR>Também como retornar como 'E' indicando que o cupom foi excluído.
	 *
	 * @var string
	 */
	public string $cProcessado;
	/**
	 * Caixa está fechado (S/N)?
	 *
	 * @var string
	 */
	public string $cCaixaFechado;
	/**
	 * Cupom Fiscal Cancelado (S/N)?
	 *
	 * @var string
	 */
	public string $cCancelado;
	/**
	 * Cupom Fiscal com erro no processamento (S/N)?
	 *
	 * @var string
	 */
	public string $cErro;
	/**
	 * Ação realizada.<BR>Pode ser:<BR>ADD - Adiciona um cupom.<BR>TMP - Adiciona um cupom de um caixa em aberto.<BR>CAN - Cupom Cancelado.<BR>CTG - Cupom em Contingência.<BR>INU - Cupom Inutilizado.<BR>EXC - Cupom Excluído.
	 *
	 * @var string
	 */
	public string $cAcao;
	/**
	 * Modelo de Cupom Fiscal.<BR>Pode ser:<BR>00 - ECF<BR>59 - CFe-SAT<BR>65 - NFC-e
	 *
	 * @var string
	 */
	public string $cModelo;
	/**
	 * Chave do Cupom Fiscal.
	 *
	 * @var string
	 */
	public string $cChave;
	/**
	 * ID do Cupom Fiscal.
	 *
	 * @var integer
	 */
	public int $nIdCupom;
}
