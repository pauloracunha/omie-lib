<?php

namespace OmieLib\Geral\Empresas;

use OmieLib\Common\OmieFail;

/**
 * Lista de status da empresa
 *
 * @pw_element integer $codigo_empresa_integracao Código da Empresa
 * @pw_element string $codigo_empresa Código de Integração
 * @pw_element string $codigo_status Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro durante o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
 * @pw_element string $descricao_status Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
 * @pw_complex empresas_status
 */
class Empresas_status{
	/**
	 * Código da Empresa
	 *
	 * @var integer
	 */
	public int $codigo_empresa_integracao;
	/**
	 * Código de Integração
	 *
	 * @var string
	 */
	public string $codigo_empresa;
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
}
