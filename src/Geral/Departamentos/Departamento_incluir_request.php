<?php

namespace OmieLib\Geral\Departamentos;

use OmieLib\Common\OmieFail;

/**
 * Inclui um departamento.
 *
 * @pw_element string $codigo Código do Departamento / Centro de Custo no qual você deseja<BR>incluir o novo departamento.
 * @pw_element string $descricao Nome do Departamento / Centro de Custo
 * @pw_complex departamento_incluir_request
 */
class Departamento_incluir_request{
	/**
	 * Código do Departamento / Centro de Custo no qual você deseja<BR>incluir o novo departamento.
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
