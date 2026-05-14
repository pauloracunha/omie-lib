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
 * Listagem de cupons fiscais.
 *
 * @pw_element integer $nPagina Número da página resgatada.
 * @pw_element integer $nRegPorPagina Número de registros retornados na página.
 * @pw_element string $cOrdenarPor Ordem os resultados da página por:<BR>NUMCUPOM - Número do Cupom Fiscal.<BR>NUMVENDA - Número da Venda.<BR>DATAEMISSAO - Data de Emissão.
 * @pw_element string $cOrdemDecrescente Indica se a ordem de exibição é Decrescente caso seja informado "S".
 * @pw_element string $dDtEmisInicial Data de emissão inicial.<BR>No formato dd/mm/aaaa.
 * @pw_element string $dDtEmisFinal Data de emissão final.<BR>No formato dd/mm/aaaa.
 * @pw_element integer $nNumLote Número do Lote do Cupom Fiscal.
 * @pw_element integer $nNumMovimento Número do Movimento (Caixa).
 * @pw_element string $cAcao Ação realizada.<BR>Pode ser:<BR>ADD - Adiciona um cupom.<BR>TMP - Adiciona um cupom de um caixa em aberto.<BR>CAN - Cupom Cancelado.<BR>CTG - Cupom em Contingência.<BR>INU - Cupom Inutilizado.<BR>EXC - Cupom Excluído.
 * @pw_element string $cModelo Modelo de Cupom Fiscal.<BR>Pode ser:<BR>00 - ECF<BR>59 - CFe-SAT<BR>65 - NFC-e
 * @pw_element string $cProcessado Cupom Fiscal foi processado (S/N)?<BR><BR>Também como retornar como 'E' indicando que o cupom foi excluído.
 * @pw_element string $cCaixaFechado Caixa está fechado (S/N)?
 * @pw_element string $cCancelado Cupom Fiscal Cancelado (S/N)?
 * @pw_element string $cErro Cupom Fiscal com erro no processamento (S/N)?
 * @pw_element integer $nCOO Número do COO.
 * @pw_element integer $nCCF Número do CCF.
 * @pw_element string $cNumeroSerieECF Número de Série da Impressora Fiscal.
 * @pw_element integer $nNumeroSAT Número do CF-e-SAT.
 * @pw_element string $nChaveSAT Chave da CF-e-SAT.
 * @pw_element string $nNumeroNFCE Número do NFC-e.
 * @pw_element string $nSerieNFCE Número de Série da NFC-e.
 * @pw_element string $nChaveNFCE Chave do Cupom Fiscal.
 * @pw_element string $nCodigoPDV Código do PDV.<BR><BR>Preenchimento opcional.
 * @pw_complex cfListarRequest
 */
class CfListarRequest{
	/**
	 * Número da página resgatada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $nRegPorPagina;
	/**
	 * Ordem os resultados da página por:<BR>NUMCUPOM - Número do Cupom Fiscal.<BR>NUMVENDA - Número da Venda.<BR>DATAEMISSAO - Data de Emissão.
	 *
	 * @var string
	 */
	public string $cOrdenarPor;
	/**
	 * Indica se a ordem de exibição é Decrescente caso seja informado "S".
	 *
	 * @var string
	 */
	public string $cOrdemDecrescente;
	/**
	 * Data de emissão inicial.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtEmisInicial;
	/**
	 * Data de emissão final.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtEmisFinal;
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
	 * Número do COO.
	 *
	 * @var integer
	 */
	public int $nCOO;
	/**
	 * Número do CCF.
	 *
	 * @var integer
	 */
	public int $nCCF;
	/**
	 * Número de Série da Impressora Fiscal.
	 *
	 * @var string
	 */
	public string $cNumeroSerieECF;
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
	/**
	 * Código do PDV.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $nCodigoPDV;
}
