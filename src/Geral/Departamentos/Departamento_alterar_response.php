<?php

namespace OmieLib\Geral\Departamentos;

use OmieLib\Common\OmieFail;

/**
 * Resposta da solicitação de alteração de um departamento.
 *
 * @pw_element string $codigo Código do Departamento / Centro de Custo
 * @pw_element string $descricao Nome do Departamento / Centro de Custo
 * @pw_element string $cCodStatus Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro duranteo o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
 * @pw_element string $cDesStatus Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
 * @pw_complex departamento_alterar_response
 */
class Departamento_alterar_response{
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
	 * Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro duranteo o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
	 *
	 * @var string
	 */
	public string $cDesStatus;
}
