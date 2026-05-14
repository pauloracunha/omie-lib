<?php

namespace OmieLib\Geral\Unidade;

use OmieLib\Common\OmieFail;

/**
 * Dados da Unidade de Medida
 *
 * @pw_element string $codigo Código da Unidade
 * @pw_element string $descricao Descrição da Unidade
 * @pw_complex unidade_cadastro
 */
class Unidade_cadastro{
	/**
	 * Código da Unidade
	 *
	 * @var string
	 */
	public string $codigo;
	/**
	 * Descrição da Unidade
	 *
	 * @var string
	 */
	public string $descricao;
}
