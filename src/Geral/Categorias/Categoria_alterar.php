<?php

namespace OmieLib\Geral\Categorias;

use OmieLib\Common\OmieFail;

/**
 * Alteração de uma categoria.
 *
 * @pw_element string $codigo Código para a Categoria.<BR><BR>Informação obrigatória para o método AlterarCategoria.
 * @pw_element string $descricao Descrição para a Categoria<BR><BR>Informação obrigatória para os métodos IncluirCategoria e IncluirGrupoCategoria.
 * @pw_element string $natureza Descrição da Natureza da conta, equivalente ao campo "Observação" da categoria no ERP
 * @pw_element string $tipo_categoria Tipo de gasto/receita realizado com esta categoria<BR><BR>Para inclusão ou alteração essa informação pode ser obtida pela API:<BR>/api/v1/geral/tipocategoria/<BR>Utilizando o método ListarTipoCategoria, o código é retornado na tag 'cCodigo'<BR>Para que esse código seja válido, é necessário que:<BR>Inclusão:<BR>- 'categoria_superior' começar com '1', então 'cTipo' deve ser igual a 'R'<BR>- 'categoria_superior' começar com '2', então 'cTipo' deve ser igual a 'P'<BR><BR>Alteração:<BR>- 'codigo' começar com '1', então 'cTipo' deve ser igual a 'R'<BR>- 'codigo' começar com '2', então 'cTipo' deve ser igual a 'P'
 * @pw_element string $codigo_dre Código no DRE (Demonstrativo de Resultados do Exercício)<BR><BR>Para inclusão ou alteração essa informação pode ser obtida pela API:<BR>/api/v1/geral/dre/<BR>Utilizando o método ListarCadastroDRE, o código é retornado na tag 'codigoDRE'<BR>Para que esse código seja válido, é necessário que:<BR>- 'nivelDRE' seja igual a 3<BR>- 'naoExibirDRE' seja igual a 'N'<BR>- 'totalizaDRE' seja igual a 'N'
 * @pw_element string $conta_inativa Indica que a categoria ou grupo de categoria está inativo.
 * @pw_complex categoria_alterar
 */
class Categoria_alterar{
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
	/**
	 * Tipo de gasto/receita realizado com esta categoria<BR><BR>Para inclusão ou alteração essa informação pode ser obtida pela API:<BR>/api/v1/geral/tipocategoria/<BR>Utilizando o método ListarTipoCategoria, o código é retornado na tag 'cCodigo'<BR>Para que esse código seja válido, é necessário que:<BR>Inclusão:<BR>- 'categoria_superior' começar com '1', então 'cTipo' deve ser igual a 'R'<BR>- 'categoria_superior' começar com '2', então 'cTipo' deve ser igual a 'P'<BR><BR>Alteração:<BR>- 'codigo' começar com '1', então 'cTipo' deve ser igual a 'R'<BR>- 'codigo' começar com '2', então 'cTipo' deve ser igual a 'P'
	 *
	 * @var string
	 */
	public string $tipo_categoria;
	/**
	 * Código no DRE (Demonstrativo de Resultados do Exercício)<BR><BR>Para inclusão ou alteração essa informação pode ser obtida pela API:<BR>/api/v1/geral/dre/<BR>Utilizando o método ListarCadastroDRE, o código é retornado na tag 'codigoDRE'<BR>Para que esse código seja válido, é necessário que:<BR>- 'nivelDRE' seja igual a 3<BR>- 'naoExibirDRE' seja igual a 'N'<BR>- 'totalizaDRE' seja igual a 'N'
	 *
	 * @var string
	 */
	public string $codigo_dre;
	/**
	 * Indica que a categoria ou grupo de categoria está inativo.
	 *
	 * @var string
	 */
	public string $conta_inativa;
}
