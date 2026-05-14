<?php

namespace OmieLib\Financas\Extrato;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Extrato\Request\EccListarExtratoRequest;
use OmieLib\Financas\Extrato\Response\EccListarExtratoResponse;

/**
 * Lista de movimentos do período.
 *
 * @pw_element integer $nCodLancamento Código do Lançamento.
 * @pw_element integer $nCodLancRelac Código do Lançamento original relacionado (quando houver parcelamento)
 * @pw_element string $cSituacao Situação do lançamento.
 * @pw_element string $dDataLancamento Data do lançamento.
 * @pw_element string $cDesCliente Cliente ou Fornecedor (Nome Fantasia).
 * @pw_element string $cTipoDocumento Tipo de Documento.
 * @pw_element string $cNumero Número do Documento.
 * @pw_element decimal $nValorDocumento Valor do documento.
 * @pw_element decimal $nSaldo Saldo realizado em R$.
 * @pw_element decimal $nSaldoPrev Saldo Previsto R$.
 * @pw_element string $cCodCategoria Código da Categoria.
 * @pw_element string $cDesCategoria Descrição da Categoria.
 * @pw_element string $cDocumentoFiscal Número do Documento Fiscal (Nota Fiscal, Cupom Fiscal, CT-e, etc)
 * @pw_element string $cParcela Número da parcela.
 * @pw_element string $cNossoNumero Nosso Número.
 * @pw_element string $cOrigem Origem do lançamento.
 * @pw_element string $cVendedor Nome do Vendedor.
 * @pw_element string $cProjeto Descrição do Projeto.
 * @pw_element integer $nCodCliente Cliente ou Fornecedor (Código)
 * @pw_element string $cRazCliente Cliente ou Fornecedor (Razão Social)
 * @pw_element string $cDocCliente Cliente ou Fornecedor (CNPJ/CPF)
 * @pw_element string $cObservacoes Observações.
 * @pw_element string $cDataInclusao Data de Inclusão.
 * @pw_element string $cHoraInclusao Hora de Inclusão.
 * @pw_element string $cNatureza Natureza da operação.
 * @pw_element string $cBloqueado Lançamento bloqueado (S/N).
 * @pw_element string $dDataConciliacao Data da conciliação.
 * @pw_complex listaMovimentos
 */
class ListaMovimentos{
	/**
	 * Código do Lançamento.
	 *
	 * @var integer
	 */
	public int $nCodLancamento;
	/**
	 * Código do Lançamento original relacionado (quando houver parcelamento)
	 *
	 * @var integer
	 */
	public int $nCodLancRelac;
	/**
	 * Situação do lançamento.
	 *
	 * @var string
	 */
	public string $cSituacao;
	/**
	 * Data do lançamento.
	 *
	 * @var string
	 */
	public string $dDataLancamento;
	/**
	 * Cliente ou Fornecedor (Nome Fantasia).
	 *
	 * @var string
	 */
	public string $cDesCliente;
	/**
	 * Tipo de Documento.
	 *
	 * @var string
	 */
	public string $cTipoDocumento;
	/**
	 * Número do Documento.
	 *
	 * @var string
	 */
	public string $cNumero;
	/**
	 * Valor do documento.
	 *
	 * @var decimal
	 */
	public float $nValorDocumento;
	/**
	 * Saldo realizado em R$.
	 *
	 * @var decimal
	 */
	public float $nSaldo;
	/**
	 * Saldo Previsto R$.
	 *
	 * @var decimal
	 */
	public float $nSaldoPrev;
	/**
	 * Código da Categoria.
	 *
	 * @var string
	 */
	public string $cCodCategoria;
	/**
	 * Descrição da Categoria.
	 *
	 * @var string
	 */
	public string $cDesCategoria;
	/**
	 * Número do Documento Fiscal (Nota Fiscal, Cupom Fiscal, CT-e, etc)
	 *
	 * @var string
	 */
	public string $cDocumentoFiscal;
	/**
	 * Número da parcela.
	 *
	 * @var string
	 */
	public string $cParcela;
	/**
	 * Nosso Número.
	 *
	 * @var string
	 */
	public string $cNossoNumero;
	/**
	 * Origem do lançamento.
	 *
	 * @var string
	 */
	public string $cOrigem;
	/**
	 * Nome do Vendedor.
	 *
	 * @var string
	 */
	public string $cVendedor;
	/**
	 * Descrição do Projeto.
	 *
	 * @var string
	 */
	public string $cProjeto;
	/**
	 * Cliente ou Fornecedor (Código)
	 *
	 * @var integer
	 */
	public int $nCodCliente;
	/**
	 * Cliente ou Fornecedor (Razão Social)
	 *
	 * @var string
	 */
	public string $cRazCliente;
	/**
	 * Cliente ou Fornecedor (CNPJ/CPF)
	 *
	 * @var string
	 */
	public string $cDocCliente;
	/**
	 * Observações.
	 *
	 * @var string
	 */
	public string $cObservacoes;
	/**
	 * Data de Inclusão.
	 *
	 * @var string
	 */
	public string $cDataInclusao;
	/**
	 * Hora de Inclusão.
	 *
	 * @var string
	 */
	public string $cHoraInclusao;
	/**
	 * Natureza da operação.
	 *
	 * @var string
	 */
	public string $cNatureza;
	/**
	 * Lançamento bloqueado (S/N).
	 *
	 * @var string
	 */
	public string $cBloqueado;
	/**
	 * Data da conciliação.
	 *
	 * @var string
	 */
	public string $dDataConciliacao;
}
