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
 * Exibe os lançamentos a pagar atrasados.
 *
 * @pw_element integer $nIdTitulo Código do lançamento.<BR><BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element integer $nIdCliente Código do cliente/Forncedor.<BR><BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cNomeCliente Nome do Cliente/Fornecedor.
 * @pw_element decimal $vDoc Valor do lançamento.
 * @pw_element string $dVencimento Data de vencimento.
 * @pw_element string $dEmissao Data de emissão.
 * @pw_element string $cCodCateg Código da Categoria
 * @pw_element string $cDescCateg Descrição da categoria.
 * @pw_element decimal $nDiasAtraso Dias de atraso do lançamento.
 * @pw_element string $cIcone Unicode do Ícone.
 * @pw_element string $cCor Hexadecimal da cor.
 * @pw_element string $cUrlLogoBanco URL da Imagem do Logo do Banco.
 * @pw_complex contaPagarAtraso
 */
class ContaPagarAtraso{
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
	 * Código da Categoria
	 *
	 * @var string
	 */
	public string $cCodCateg;
	/**
	 * Descrição da categoria.
	 *
	 * @var string
	 */
	public string $cDescCateg;
	/**
	 * Dias de atraso do lançamento.
	 *
	 * @var decimal
	 */
	public float $nDiasAtraso;
	/**
	 * Unicode do Ícone.
	 *
	 * @var string
	 */
	public string $cIcone;
	/**
	 * Hexadecimal da cor.
	 *
	 * @var string
	 */
	public string $cCor;
	/**
	 * URL da Imagem do Logo do Banco.
	 *
	 * @var string
	 */
	public string $cUrlLogoBanco;
}
