<?php

namespace OmieLib\Geral\Departamentos;

use OmieLib\Common\OmieFail;

/**
 * Consulta um código de departamento.
 *
 * @pw_element string $codigo Código do Departamento / Centro de Custo
 * @pw_complex departamento_consultar
 */
class Departamento_consultar{
	/**
	 * Código do Departamento / Centro de Custo
	 *
	 * @var string
	 */
	public string $codigo;
}
