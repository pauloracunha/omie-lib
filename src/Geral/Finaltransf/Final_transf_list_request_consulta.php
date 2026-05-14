<?php

namespace OmieLib\Geral\Finaltransf;

use OmieLib\Common\OmieFail;

/**
 * Requisição para consulta de finalidades de transferências cadastradas
 *
 * @pw_element string $banco Código do Banco / Instituição Financeira
 * @pw_element string $codigo Código da Finalidade de Transferência
 * @pw_complex final_transf_list_request_consulta
 */
class Final_transf_list_request_consulta{
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
}
