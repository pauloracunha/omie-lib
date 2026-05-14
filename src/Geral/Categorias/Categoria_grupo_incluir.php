<?php

namespace OmieLib\Geral\Categorias;

use OmieLib\Common\OmieFail;

/**
 * Inclusão de um grupo totalizador de categoria.
 *
 * @pw_element string $descricao Descrição para a Categoria<BR><BR>Informação obrigatória para os métodos IncluirCategoria e IncluirGrupoCategoria.
 * @pw_element string $tipo_grupo Tipo de grupo de categorias ( R = Receita ou D = Despesa ).<BR><BR>Informação obrigatória para o método IncluirGrupoCategoria.
 * @pw_element string $natureza Descrição da Natureza da conta, equivalente ao campo "Observação" da categoria no ERP
 * @pw_complex categoria_grupo_incluir
 */
class Categoria_grupo_incluir{
	/**
	 * Descrição para a Categoria<BR><BR>Informação obrigatória para os métodos IncluirCategoria e IncluirGrupoCategoria.
	 *
	 * @var string
	 */
	public string $descricao;
	/**
	 * Tipo de grupo de categorias ( R = Receita ou D = Despesa ).<BR><BR>Informação obrigatória para o método IncluirGrupoCategoria.
	 *
	 * @var string
	 */
	public string $tipo_grupo;
	/**
	 * Descrição da Natureza da conta, equivalente ao campo "Observação" da categoria no ERP
	 *
	 * @var string
	 */
	public string $natureza;
}
