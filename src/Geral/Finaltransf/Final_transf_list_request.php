<?php

namespace OmieLib\Geral\Finaltransf;

use OmieLib\Common\OmieFail;

/**
 * Requisição para listagem as finalidades de transferências cadastradas
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $filtrar_por_banco Código do Banco / Instituição Financeira
 * @pw_complex final_transf_list_request
 */
class Final_transf_list_request{
	/**
	 * Número da página retornada
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $registros_por_pagina;
	/**
	 * Código do Banco / Instituição Financeira
	 *
	 * @var string
	 */
	public string $filtrar_por_banco;
}
