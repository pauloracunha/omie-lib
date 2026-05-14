<?php

namespace OmieLib\Produtos\Cte;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cte\Request\CteAverbacaoRequest;
use OmieLib\Produtos\Cte\Request\CteCCRequest;
use OmieLib\Produtos\Cte\Request\CteCancelarRequest;
use OmieLib\Produtos\Cte\Request\CteExcluirFatRequest;
use OmieLib\Produtos\Cte\Request\CteExcluirRequest;
use OmieLib\Produtos\Cte\Request\CteFaturarLoteRequest;
use OmieLib\Produtos\Cte\Request\CteFaturarRequest;
use OmieLib\Produtos\Cte\Request\CteImportarRequest;
use OmieLib\Produtos\Cte\Request\CteListarNFeRequest;
use OmieLib\Produtos\Cte\Request\CteStatusFaturaRequest;
use OmieLib\Produtos\Cte\Response\CteAverbacaoResponse;
use OmieLib\Produtos\Cte\Response\CteCCResponse;
use OmieLib\Produtos\Cte\Response\CteCancelarResponse;
use OmieLib\Produtos\Cte\Response\CteExcluirFatResponse;
use OmieLib\Produtos\Cte\Response\CteExcluirResponse;
use OmieLib\Produtos\Cte\Response\CteFaturarLoteResponse;
use OmieLib\Produtos\Cte\Response\CteFaturarResponse;
use OmieLib\Produtos\Cte\Response\CteImportarResponse;
use OmieLib\Produtos\Cte\Response\CteListarNFeResponse;
use OmieLib\Produtos\Cte\Response\CteStatusFaturaResponse;

/**
 * Lista de NF-es encontradas.
 *
 * @pw_element string $emitCNPJ CNPJ do emitente da NF-e.
 * @pw_element string $destCNPJ CNPJ do destinário da NF-e.
 * @pw_element string $chNFe Chave da NF-e.
 * @pw_element integer $nProt Número do protocolo da NF-e.
 * @pw_element string $dEmi Data de emissão da NF-e.
 * @pw_element string $hEmi Hora de emissão da NF-e.
 * @pw_element string $versao Versão do XML da NF-e.
 * @pw_element string $tpNF Tipo de nota fiscal.<BR><BR>Pode ser:<BR>0 - Entrada.<BR>1 - Saída.
 * @pw_element decimal $vNF Valor da nota fiscal.
 * @pw_element string $cXmlNFe XML da nota fiscal.
 * @pw_complex nfeEncontradas
 */
class NfeEncontradas{
	/**
	 * CNPJ do emitente da NF-e.
	 *
	 * @var string
	 */
	public string $emitCNPJ;
	/**
	 * CNPJ do destinário da NF-e.
	 *
	 * @var string
	 */
	public string $destCNPJ;
	/**
	 * Chave da NF-e.
	 *
	 * @var string
	 */
	public string $chNFe;
	/**
	 * Número do protocolo da NF-e.
	 *
	 * @var integer
	 */
	public int $nProt;
	/**
	 * Data de emissão da NF-e.
	 *
	 * @var string
	 */
	public string $dEmi;
	/**
	 * Hora de emissão da NF-e.
	 *
	 * @var string
	 */
	public string $hEmi;
	/**
	 * Versão do XML da NF-e.
	 *
	 * @var string
	 */
	public string $versao;
	/**
	 * Tipo de nota fiscal.<BR><BR>Pode ser:<BR>0 - Entrada.<BR>1 - Saída.
	 *
	 * @var string
	 */
	public string $tpNF;
	/**
	 * Valor da nota fiscal.
	 *
	 * @var decimal
	 */
	public float $vNF;
	/**
	 * XML da nota fiscal.
	 *
	 * @var string
	 */
	public string $cXmlNFe;
}
