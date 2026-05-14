<?php

namespace OmieLib\Financas\Resumo;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Resumo\Request\ObterDetalhesLancamentoRequest;
use OmieLib\Financas\Resumo\Request\ObterListaEmAbertoRequest;
use OmieLib\Financas\Resumo\Request\ObterListaFinancasRequest;
use OmieLib\Financas\Resumo\Request\ObterResumoFinRequest;
use OmieLib\Financas\Resumo\Response\ObterDetalhesLancamentoResponse;
use OmieLib\Financas\Resumo\Response\ObterListaEmAbertoResponse;
use OmieLib\Financas\Resumo\Response\ObterListaFinancasResponse;
use OmieLib\Financas\Resumo\Response\ObterResumoFinResponse;

/**
 * Detalhes do boleto gerado.
 *
 * @pw_element string $cNumBoleto Nosso número (sequencial).
 * @pw_element string $cNumBancario Nosso número impresso no boleto (formatado).
 * @pw_element string $cCodBarras Código de barras do boleto.
 * @pw_element string $cLinkBoleto Link do boleto.
 * @pw_element string $dEmissao Data de emissão.
 * @pw_element string $dVencimento Data de vencimento.
 * @pw_element decimal $nPerJuros Percentual de juros ao mês.
 * @pw_element decimal $nPerMulta Percentual de multa.
 * @pw_complex boletoInfo
 */
class BoletoInfo{
	/**
	 * Nosso número (sequencial).
	 *
	 * @var string
	 */
	public string $cNumBoleto;
	/**
	 * Nosso número impresso no boleto (formatado).
	 *
	 * @var string
	 */
	public string $cNumBancario;
	/**
	 * Código de barras do boleto.
	 *
	 * @var string
	 */
	public string $cCodBarras;
	/**
	 * Link do boleto.
	 *
	 * @var string
	 */
	public string $cLinkBoleto;
	/**
	 * Data de emissão.
	 *
	 * @var string
	 */
	public string $dEmissao;
	/**
	 * Data de vencimento.
	 *
	 * @var string
	 */
	public string $dVencimento;
	/**
	 * Percentual de juros ao mês.
	 *
	 * @var decimal
	 */
	public float $nPerJuros;
	/**
	 * Percentual de multa.
	 *
	 * @var decimal
	 */
	public float $nPerMulta;
}
