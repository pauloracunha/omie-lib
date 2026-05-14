<?php

namespace OmieLib\Geral\Categorias;

use OmieLib\Common\OmieFail;

/**
 * Inclusão de uma categoria.
 *
 * @pw_element string $categoria_superior Código do grupo da categoria<BR><BR>Para inclusão essa informação pode ser obtida pela API:<BR>/api/v1/geral/categorias/<BR><BR>Utilizando o método ListarCategorias, o código é retornado na tag 'codigo'<BR>Para que esse código seja válido, é necessário que:<BR>- 'codigo' tenha 4 dígitos<BR>- 'totalizadora' deve ser igual a 'S'
 * @pw_element string $descricao Descrição para a Categoria<BR><BR>Informação obrigatória para os métodos IncluirCategoria e IncluirGrupoCategoria.
 * @pw_element string $natureza Descrição da Natureza da conta, equivalente ao campo "Observação" da categoria no ERP
 * @pw_element string $tipo_categoria Tipo de gasto/receita realizado com esta categoria<BR><BR>Para inclusão ou alteração essa informação pode ser obtida pela API:<BR>/api/v1/geral/tipocategoria/<BR>Utilizando o método ListarTipoCategoria, o código é retornado na tag 'cCodigo'<BR>Para que esse código seja válido, é necessário que:<BR>Inclusão:<BR>- 'categoria_superior' começar com '1', então 'cTipo' deve ser igual a 'R'<BR>- 'categoria_superior' começar com '2', então 'cTipo' deve ser igual a 'P'<BR><BR>Alteração:<BR>- 'codigo' começar com '1', então 'cTipo' deve ser igual a 'R'<BR>- 'codigo' começar com '2', então 'cTipo' deve ser igual a 'P'
 * @pw_element string $codigo_dre Código no DRE (Demonstrativo de Resultados do Exercício)<BR><BR>Para inclusão ou alteração essa informação pode ser obtida pela API:<BR>/api/v1/geral/dre/<BR>Utilizando o método ListarCadastroDRE, o código é retornado na tag 'codigoDRE'<BR>Para que esse código seja válido, é necessário que:<BR>- 'nivelDRE' seja igual a 3<BR>- 'naoExibirDRE' seja igual a 'N'<BR>- 'totalizaDRE' seja igual a 'N'
 * @pw_complex categoria_incluir
 */
class Categoria_incluir{
	/**
	 * Código do grupo da categoria<BR><BR>Para inclusão essa informação pode ser obtida pela API:<BR>/api/v1/geral/categorias/<BR><BR>Utilizando o método ListarCategorias, o código é retornado na tag 'codigo'<BR>Para que esse código seja válido, é necessário que:<BR>- 'codigo' tenha 4 dígitos<BR>- 'totalizadora' deve ser igual a 'S'
	 *
	 * @var string
	 */
	public string $categoria_superior;
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
}
