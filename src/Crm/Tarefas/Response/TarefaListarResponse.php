<?php

namespace OmieLib\Crm\Tarefas\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Tarefas\Cadastros;
use OmieLib\Crm\Tarefas\CadastrosEmail;
use OmieLib\Crm\Tarefas\DetalhesOportunidade;
use OmieLib\Crm\Tarefas\Request\TarefaAlterarRequest;
use OmieLib\Crm\Tarefas\Request\TarefaConsultarRequest;
use OmieLib\Crm\Tarefas\Request\TarefaEmailListarRequest;
use OmieLib\Crm\Tarefas\Request\TarefaIncluirRequest;
use OmieLib\Crm\Tarefas\Request\TarefaListarRequest;
use OmieLib\Crm\Tarefas\Request\TarefaUpsertRequest;
use OmieLib\Crm\Tarefas\Tarefa_ics_request;
use OmieLib\Crm\Tarefas\Tarefa_ics_response;
use OmieLib\Crm\Tarefas\TarefasJsonClient;

/**
 * Resposta da solicitação da listagem de tarefas da oportunidade.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element cadastrosArray $cadastros Lista os cadastros encontrados.
 * @pw_complex tarefaListarResponse
 */
class TarefaListarResponse{
	/**
	 * Número da página retornada
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Número total de páginas
	 *
	 * @var integer
	 */
	public int $total_de_paginas;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $registros;
	/**
	 * total de registros encontrados
	 *
	 * @var integer
	 */
	public int $total_de_registros;
	/**
	 * Lista os cadastros encontrados.
	 *
	 * @var Cadastros[]
	 */
	public array $cadastros;
}
