<?php

namespace OmieLib\Geral\Bancos;

use OmieLib\Common\OmieFail;

/**
 * Chave para pesquisa do cadastro de Bancos / Instituíções Financeiras.
 *
 * @pw_element string $codigo Código do Banco / Instituição Financeira
 * @pw_complex fin_bancos_cadastro_chave
 */
class Fin_bancos_cadastro_chave{
	/**
	 * Código do Banco / Instituição Financeira
	 *
	 * @var string
	 */
	public string $codigo;
}
