<?php

namespace OmieLib\Geral\Finaltransf;

use OmieLib\Common\OmieFail;

/**
 * Cadastro de finalidades de transferências
 *
 * @pw_element string $banco Código do Banco / Instituição Financeira
 * @pw_element string $codigo Código da Finalidade de Transferência
 * @pw_element string $descricao Descrição da Finalidade de Transferência
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código do Banco / Instituição Financeira
	 *
	 * @var string
	 */
	public string $banco;
	/**
	 * Código da Finalidade de Transferência
	 *
	 * @var string
	 */
	public string $codigo;
	/**
	 * Descrição da Finalidade de Transferência
	 *
	 * @var string
	 */
	public string $descricao;
}
