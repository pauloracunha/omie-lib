<?php

namespace OmieLib\Crm\Tarefas\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Tarefas\Cadastros;
use OmieLib\Crm\Tarefas\CadastrosEmail;
use OmieLib\Crm\Tarefas\DetalhesOportunidade;
use OmieLib\Crm\Tarefas\Response\TarefaAlterarResponse;
use OmieLib\Crm\Tarefas\Response\TarefaConsultarResponse;
use OmieLib\Crm\Tarefas\Response\TarefaEmailListarResponse;
use OmieLib\Crm\Tarefas\Response\TarefaExcluirResponse;
use OmieLib\Crm\Tarefas\Response\TarefaIncluirResponse;
use OmieLib\Crm\Tarefas\Response\TarefaListarResponse;
use OmieLib\Crm\Tarefas\Response\TarefaUpsertResponse;
use OmieLib\Crm\Tarefas\Tarefa_ics_request;
use OmieLib\Crm\Tarefas\Tarefa_ics_response;
use OmieLib\Crm\Tarefas\TarefasJsonClient;

/**
 * Solicitação da consulta da tarefa de uma oportunidade.
 *
 * @pw_element integer $nCodTarefa Código da tarefa.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element integer $nCodOp Código da oportunidade.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodInt Código de integração da tarefa.<BR>(Utilizado em títulos criados via API, não é visualizado na tela)
 * @pw_complex tarefaConsultarRequest
 */
class TarefaConsultarRequest{
	/**
	 * Código da tarefa.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodTarefa;
	/**
	 * Código da oportunidade.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodOp;
	/**
	 * Código de integração da tarefa.<BR>(Utilizado em títulos criados via API, não é visualizado na tela)
	 *
	 * @var string
	 */
	public string $cCodInt;
}
