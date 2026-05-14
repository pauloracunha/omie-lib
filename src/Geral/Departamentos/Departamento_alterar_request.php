<?php

namespace OmieLib\Geral\Departamentos;

use OmieLib\Common\OmieFail;

/**
 * Altera um departamento.
 *
 * @pw_element string $codigo Código do Departamento / Centro de Custo
 * @pw_element string $descricao Nome do Departamento / Centro de Custo
 * @pw_complex departamento_alterar_request
 */
class Departamento_alterar_request{
	/**
	 * Código do Departamento / Centro de Custo
	 *
	 * @var string
	 */
	public string $codigo;
	/**
	 * Nome do Departamento / Centro de Custo
	 *
	 * @var string
	 */
	public string $descricao;
}
