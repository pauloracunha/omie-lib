<?php

namespace OmieLib\Geral\Departamentos;

use OmieLib\Common\OmieFail;

/**
 * Cadastro de Departamentos
 *
 * @pw_element string $codigo Código do Departamento / Centro de Custo
 * @pw_element string $descricao Nome do Departamento / Centro de Custo
 * @pw_element string $estrutura Utilizado para estruturação dos Departamentos no modo "diagrama"
 * @pw_element string $inativo Indica que o Departamento / Centro de Custo está inativo
 * @pw_element string $nivel_totalizador Indica que o Departamento / Centro de Custo é um nível totalizador
 * @pw_complex departamentos
 */
class Departamentos{
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
	/**
	 * Utilizado para estruturação dos Departamentos no modo "diagrama"
	 *
	 * @var string
	 */
	public string $estrutura;
	/**
	 * Indica que o Departamento / Centro de Custo está inativo
	 *
	 * @var string
	 */
	public string $inativo;
	/**
	 * Indica que o Departamento / Centro de Custo é um nível totalizador
	 *
	 * @var string
	 */
	public string $nivel_totalizador;
}
