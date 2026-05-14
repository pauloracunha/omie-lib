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
 * Exibe os totais dos lançamentos a receber.
 *
 * @pw_element decimal $nTotal Quantidade de lançamentos.
 * @pw_element decimal $vTotal Valor total.
 * @pw_element decimal $vAtraso Valor total dos lançamentos em atraso.
 * @pw_element string $cIcone Unicode do Ícone.
 * @pw_element string $cCor Hexadecimal da cor.
 * @pw_complex contaReceber
 */
class ContaReceber{
	/**
	 * Quantidade de lançamentos.
	 *
	 * @var decimal
	 */
	public float $nTotal;
	/**
	 * Valor total.
	 *
	 * @var decimal
	 */
	public float $vTotal;
	/**
	 * Valor total dos lançamentos em atraso.
	 *
	 * @var decimal
	 */
	public float $vAtraso;
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
