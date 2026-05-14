<?php

namespace OmieLib\Financas\Mf;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Mf\Request\MfListarRequest;
use OmieLib\Financas\Mf\Response\MfListarResponse;

/**
 * Listagem da movimentação financeira (Contas a Pagar, Contas a Receber e Lançamentos do Conta Corrente).
 *
 * @pw_element detalhes $detalhes Detalhes do movimento financeiro.
 * @pw_element resumo $resumo Situação do movimento financeiro.
 * @pw_element departamentosArray $departamentos Distribuição por departamentos.
 * @pw_element categoriasArray $categorias Distribuição por Categorias.
 * @pw_complex movimentos
 */
class Movimentos{
	/**
	 * Detalhes do movimento financeiro.
	 *
	 * @var Detalhes
	 */
	public Detalhes $detalhes;
	/**
	 * Situação do movimento financeiro.
	 *
	 * @var Resumo
	 */
	public Resumo $resumo;
	/**
	 * Distribuição por departamentos.
	 *
	 * @var Departamentos[]
	 */
	public array $departamentos;
	/**
	 * Distribuição por Categorias.
	 *
	 * @var Categorias[]
	 */
	public array $categorias;
}
