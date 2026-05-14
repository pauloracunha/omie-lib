<?php

namespace OmieLib\Geral\Categorias;

use OmieLib\Common\OmieFail;

/**
 * Cadastro de Categorias
 *
 * @pw_element string $codigo Código para a Categoria.<BR><BR>Informação obrigatória para o método AlterarCategoria.
 * @pw_element string $descricao Descrição para a Categoria<BR><BR>Informação obrigatória para os métodos IncluirCategoria e IncluirGrupoCategoria.
 * @pw_element string $descricao_padrao Descrição Padrão para a Categoria
 * @pw_element string $tipo_categoria Tipo de gasto/receita realizado com esta categoria<BR><BR>Para inclusão ou alteração essa informação pode ser obtida pela API:<BR>/api/v1/geral/tipocategoria/<BR>Utilizando o método ListarTipoCategoria, o código é retornado na tag 'cCodigo'<BR>Para que esse código seja válido, é necessário que:<BR>Inclusão:<BR>- 'categoria_superior' começar com '1', então 'cTipo' deve ser igual a 'R'<BR>- 'categoria_superior' começar com '2', então 'cTipo' deve ser igual a 'P'<BR><BR>Alteração:<BR>- 'codigo' começar com '1', então 'cTipo' deve ser igual a 'R'<BR>- 'codigo' começar com '2', então 'cTipo' deve ser igual a 'P'
 * @pw_element string $conta_inativa Indica que a categoria ou grupo de categoria está inativo.
 * @pw_element string $definida_pelo_usuario Indica que a conta financeira é definida pelo usuário
 * @pw_element integer $id_conta_contabil ID da Conta Contábil
 * @pw_element string $tag_conta_contabil Tag para Conta Contábil
 * @pw_element string $conta_despesa Quando S, indica que é conta de despesa
 * @pw_element string $conta_receita Quando S, indica que é conta de receita
 * @pw_element string $nao_exibir Indica que a Categoria não deve ser exibida em ComboBox
 * @pw_element string $natureza Descrição da Natureza da conta, equivalente ao campo "Observação" da categoria no ERP
 * @pw_element string $totalizadora Quando S, indica que é totalizadora de conta
 * @pw_element string $transferencia Quando S, indica que é categoria de transferência
 * @pw_element string $codigo_dre Código no DRE (Demonstrativo de Resultados do Exercício)<BR><BR>Para inclusão ou alteração essa informação pode ser obtida pela API:<BR>/api/v1/geral/dre/<BR>Utilizando o método ListarCadastroDRE, o código é retornado na tag 'codigoDRE'<BR>Para que esse código seja válido, é necessário que:<BR>- 'nivelDRE' seja igual a 3<BR>- 'naoExibirDRE' seja igual a 'N'<BR>- 'totalizaDRE' seja igual a 'N'
 * @pw_element string $categoria_superior Código do grupo da categoria<BR><BR>Para inclusão essa informação pode ser obtida pela API:<BR>/api/v1/geral/categorias/<BR><BR>Utilizando o método ListarCategorias, o código é retornado na tag 'codigo'<BR>Para que esse código seja válido, é necessário que:<BR>- 'codigo' tenha 4 dígitos<BR>- 'totalizadora' deve ser igual a 'S'
 * @pw_element dadosDRE $dadosDRE Detalhes da conta do DRE.
 * @pw_complex categoria_cadastro
 */
class Categoria_cadastro{
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
	 * Descrição Padrão para a Categoria
	 *
	 * @var string
	 */
	public string $descricao_padrao;
	/**
	 * Tipo de gasto/receita realizado com esta categoria<BR><BR>Para inclusão ou alteração essa informação pode ser obtida pela API:<BR>/api/v1/geral/tipocategoria/<BR>Utilizando o método ListarTipoCategoria, o código é retornado na tag 'cCodigo'<BR>Para que esse código seja válido, é necessário que:<BR>Inclusão:<BR>- 'categoria_superior' começar com '1', então 'cTipo' deve ser igual a 'R'<BR>- 'categoria_superior' começar com '2', então 'cTipo' deve ser igual a 'P'<BR><BR>Alteração:<BR>- 'codigo' começar com '1', então 'cTipo' deve ser igual a 'R'<BR>- 'codigo' começar com '2', então 'cTipo' deve ser igual a 'P'
	 *
	 * @var string
	 */
	public string $tipo_categoria;
	/**
	 * Indica que a categoria ou grupo de categoria está inativo.
	 *
	 * @var string
	 */
	public string $conta_inativa;
	/**
	 * Indica que a conta financeira é definida pelo usuário
	 *
	 * @var string
	 */
	public string $definida_pelo_usuario;
	/**
	 * ID da Conta Contábil
	 *
	 * @var integer
	 */
	public int $id_conta_contabil;
	/**
	 * Tag para Conta Contábil
	 *
	 * @var string
	 */
	public string $tag_conta_contabil;
	/**
	 * Quando S, indica que é conta de despesa
	 *
	 * @var string
	 */
	public string $conta_despesa;
	/**
	 * Quando S, indica que é conta de receita
	 *
	 * @var string
	 */
	public string $conta_receita;
	/**
	 * Indica que a Categoria não deve ser exibida em ComboBox
	 *
	 * @var string
	 */
	public string $nao_exibir;
	/**
	 * Descrição da Natureza da conta, equivalente ao campo "Observação" da categoria no ERP
	 *
	 * @var string
	 */
	public string $natureza;
	/**
	 * Quando S, indica que é totalizadora de conta
	 *
	 * @var string
	 */
	public string $totalizadora;
	/**
	 * Quando S, indica que é categoria de transferência
	 *
	 * @var string
	 */
	public string $transferencia;
	/**
	 * Código no DRE (Demonstrativo de Resultados do Exercício)<BR><BR>Para inclusão ou alteração essa informação pode ser obtida pela API:<BR>/api/v1/geral/dre/<BR>Utilizando o método ListarCadastroDRE, o código é retornado na tag 'codigoDRE'<BR>Para que esse código seja válido, é necessário que:<BR>- 'nivelDRE' seja igual a 3<BR>- 'naoExibirDRE' seja igual a 'N'<BR>- 'totalizaDRE' seja igual a 'N'
	 *
	 * @var string
	 */
	public string $codigo_dre;
	/**
	 * Código do grupo da categoria<BR><BR>Para inclusão essa informação pode ser obtida pela API:<BR>/api/v1/geral/categorias/<BR><BR>Utilizando o método ListarCategorias, o código é retornado na tag 'codigo'<BR>Para que esse código seja válido, é necessário que:<BR>- 'codigo' tenha 4 dígitos<BR>- 'totalizadora' deve ser igual a 'S'
	 *
	 * @var string
	 */
	public string $categoria_superior;
	/**
	 * Detalhes da conta do DRE.
	 *
	 * @var DadosDRE
	 */
	public DadosDRE $dadosDRE;
}
