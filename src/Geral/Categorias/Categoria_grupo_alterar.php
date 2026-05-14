<?php

namespace OmieLib\Geral\Categorias;

use OmieLib\Common\OmieFail;

/**
 * Alteração de um grupo totalizador de categoria.
 *
 * @pw_element string $codigo Código para a Categoria.<BR><BR>Informação obrigatória para o método AlterarCategoria.
 * @pw_element string $descricao Descrição para a Categoria<BR><BR>Informação obrigatória para os métodos IncluirCategoria e IncluirGrupoCategoria.
 * @pw_element string $natureza Descrição da Natureza da conta, equivalente ao campo "Observação" da categoria no ERP
 * @pw_complex categoria_grupo_alterar
 */
class Categoria_grupo_alterar{
	/**
	 * Código para a Categoria.<BR><BR>Informação obrigatória para o método AlterarCategoria.
	 *
	 * @var string
	 */
	public string $codigo;
	/**
	 * Descrição para a Categoria<BR><BR>Informação obrigatória para os métodos IncluirCategoria e IncluirGrupoCategoria.
	 *
	 * @var string
	 */
	public string $descricao;
	/**
	 * Descrição da Natureza da conta, equivalente ao campo "Observação" da categoria no ERP
	 *
	 * @var string
	 */
	public string $natureza;
}
