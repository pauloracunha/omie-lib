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
 * Lista de Lançamentos.
 *
 * @pw_element integer $nIdTitulo Código do lançamento.<BR><BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element integer $nIdCliente Código do cliente/Forncedor.<BR><BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cNomeCliente Nome do Cliente/Fornecedor.
 * @pw_element decimal $vDoc Valor do lançamento.
 * @pw_element string $dVencimento Data de vencimento.
 * @pw_element string $dEmissao Data de emissão.
 * @pw_element string $dPrevisao Data de previsão do lançamento.
 * @pw_element integer $nIdConta Código da Conta Corrente.<BR><BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cNomeConta Descrição da conta corrente.
 * @pw_element string $cNumDocumentoFiscal Número do Documento fiscal.
 * @pw_element string $cNumDocumento Número do documento.
 * @pw_complex listaDetalhesFinancas
 */
class ListaDetalhesFinancas{
	/**
	 * Código do lançamento.<BR><BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nIdTitulo;
	/**
	 * Código do cliente/Forncedor.<BR><BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nIdCliente;
	/**
	 * Nome do Cliente/Fornecedor.
	 *
	 * @var string
	 */
	public string $cNomeCliente;
	/**
	 * Valor do lançamento.
	 *
	 * @var decimal
	 */
	public float $vDoc;
	/**
	 * Data de vencimento.
	 *
	 * @var string
	 */
	public string $dVencimento;
	/**
	 * Data de emissão.
	 *
	 * @var string
	 */
	public string $dEmissao;
	/**
	 * Data de previsão do lançamento.
	 *
	 * @var string
	 */
	public string $dPrevisao;
	/**
	 * Código da Conta Corrente.<BR><BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nIdConta;
	/**
	 * Descrição da conta corrente.
	 *
	 * @var string
	 */
	public string $cNomeConta;
	/**
	 * Número do Documento fiscal.
	 *
	 * @var string
	 */
	public string $cNumDocumentoFiscal;
	/**
	 * Número do documento.
	 *
	 * @var string
	 */
	public string $cNumDocumento;
}
