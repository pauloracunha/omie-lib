<?php

namespace OmieLib\Geral\Categorias;

use OmieLib\Common\OmieFail;

/**
 * Inativar uma categoria ou um grupo totalizador de categoria
 *
 * @pw_element string $codigo Código para a Categoria.<BR><BR>Informação obrigatória para o método AlterarCategoria.
 * @pw_complex categoria_inativar
 */
class Categoria_inativar{
	/**
	 * Código para a Categoria.<BR><BR>Informação obrigatória para o método AlterarCategoria.
	 *
	 * @var string
	 */
	public string $codigo;
}
