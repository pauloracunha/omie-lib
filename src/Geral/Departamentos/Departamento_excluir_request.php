<?php

namespace OmieLib\Geral\Departamentos;

use OmieLib\Common\OmieFail;

/**
 * Exclui um departamento.
 *
 * @pw_element string $codigo Código do Departamento / Centro de Custo
 * @pw_complex departamento_excluir_request
 */
class Departamento_excluir_request{
	/**
	 * Código do Departamento / Centro de Custo
	 *
	 * @var string
	 */
	public string $codigo;
}
