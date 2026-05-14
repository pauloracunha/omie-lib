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
 * Exibe os totais por categoria dos lançamentos a receber.
 *
 * @pw_element decimal $vTotal Valor total.
 * @pw_element decimal $nTotal Quantidade total de lançamentos.
 * @pw_element string $cCodCateg Código da Categoria
 * @pw_element string $cDescCateg Descrição da categoria.
 * @pw_element string $cIcone Unicode do Ícone.
 * @pw_element string $cCor Hexadecimal da cor.
 * @pw_complex contaReceberCategoria
 */
class ContaReceberCategoria{
	/**
	 * Valor total.
	 *
	 * @var decimal
	 */
	public float $vTotal;
	/**
	 * Quantidade total de lançamentos.
	 *
	 * @var decimal
	 */
	public float $nTotal;
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
}
