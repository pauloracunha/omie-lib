<?php

namespace OmieLib\Geral\Categorias;

use OmieLib\Common\OmieFail;

/**
 * Consulta um código de categoria
 *
 * @pw_element string $codigo Código para a Categoria.<BR><BR>Informação obrigatória para o método AlterarCategoria.
 * @pw_complex categoria_consultar
 */
class Categoria_consultar{
	/**
	 * Código para a Categoria.<BR><BR>Informação obrigatória para o método AlterarCategoria.
	 *
	 * @var string
	 */
	public string $codigo;
}
