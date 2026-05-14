<?php

namespace OmieLib\Geral\Categorias;

use OmieLib\Common\OmieFail;

/**
 * Status de retorno do cadastro da categoria.
 *
 * @pw_element string $codigo_status Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro durante o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
 * @pw_element string $descricao_status Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
 * @pw_element string $codigo Código para a Categoria.<BR><BR>Informação obrigatória para o método AlterarCategoria.
 * @pw_complex categoria_cadastro_response
 */
class Categoria_cadastro_response{
	/**
	 * Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro durante o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
	 *
	 * @var string
	 */
	public string $codigo_status;
	/**
	 * Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
	 *
	 * @var string
	 */
	public string $descricao_status;
	/**
	 * Código para a Categoria.<BR><BR>Informação obrigatória para o método AlterarCategoria.
	 *
	 * @var string
	 */
	public string $codigo;
}
