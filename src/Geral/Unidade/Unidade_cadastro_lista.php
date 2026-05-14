<?php

namespace OmieLib\Geral\Unidade;

use OmieLib\Common\OmieFail;

/**
 * Lista de Cadastro de Unidades
 *
 * @pw_element unidade_cadastroArray $unidade_cadastro Dados da Unidade de Medida
 * @pw_complex unidade_cadastro_lista
 */
class Unidade_cadastro_lista{
	/**
	 * Dados da Unidade de Medida
	 *
	 * @var Unidade_cadastro[]
	 */
	public array $unidade_cadastro;
}
