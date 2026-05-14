<?php

namespace OmieLib\Crm\Tarefas;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Tarefas\Request\TarefaAlterarRequest;
use OmieLib\Crm\Tarefas\Request\TarefaConsultarRequest;
use OmieLib\Crm\Tarefas\Request\TarefaEmailListarRequest;
use OmieLib\Crm\Tarefas\Request\TarefaIncluirRequest;
use OmieLib\Crm\Tarefas\Request\TarefaListarRequest;
use OmieLib\Crm\Tarefas\Request\TarefaUpsertRequest;
use OmieLib\Crm\Tarefas\Response\TarefaAlterarResponse;
use OmieLib\Crm\Tarefas\Response\TarefaConsultarResponse;
use OmieLib\Crm\Tarefas\Response\TarefaEmailListarResponse;
use OmieLib\Crm\Tarefas\Response\TarefaExcluirResponse;
use OmieLib\Crm\Tarefas\Response\TarefaIncluirResponse;
use OmieLib\Crm\Tarefas\Response\TarefaListarResponse;
use OmieLib\Crm\Tarefas\Response\TarefaUpsertResponse;

/**
 * Request Calendar Events (ICS)
 *
 * @pw_element string $email_vend E-mail do Usuário Vendedor
 * @pw_element string $calendar_key Calendar Key
 * @pw_complex tarefa_ics_request
 */
class Tarefa_ics_request{
	/**
	 * E-mail do Usuário Vendedor
	 *
	 * @var string
	 */
	public string $email_vend;
	/**
	 * Calendar Key
	 *
	 * @var string
	 */
	public string $calendar_key;
}
