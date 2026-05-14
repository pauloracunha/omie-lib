<?php

namespace OmieLib\Crm\Tipostarefa\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Tipostarefa\Cadastros;
use OmieLib\Crm\Tipostarefa\Response\TipostarefaAlterarResponse;
use OmieLib\Crm\Tipostarefa\Response\TipostarefaConsultarResponse;
use OmieLib\Crm\Tipostarefa\Response\TipostarefaExcluirResponse;
use OmieLib\Crm\Tipostarefa\Response\TipostarefaIncluirResponse;
use OmieLib\Crm\Tipostarefa\Response\TipostarefaListarResponse;
use OmieLib\Crm\Tipostarefa\TiposTarefaJsonClient;

/**
 * Solicitação da listagem de tipos de tarefa
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $ordenar_por Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $ordem_decrescente Se a lista será apresentada em ordem decrescente.
 * @pw_complex tipostarefaListarRequest
 */
class TipostarefaListarRequest{
	/**
	 * Número da página retornada
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $registros_por_pagina;
	/**
	 * Ordem de exibição dos dados. Padrão: Código.
	 *
	 * @var string
	 */
	public string $ordenar_por;
	/**
	 * Se a lista será apresentada em ordem decrescente.
	 *
	 * @var string
	 */
	public string $ordem_decrescente;
}
