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
 * Resposta da inclusão/alteração da tarefa de uma oportunidade.
 *
 * @pw_element integer $nCodTarefa Código da tarefa.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element integer $nCodOp Código da oportunidade.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodInt Código de integração da tarefa.<BR>(Utilizado em títulos criados via API, não é visualizado na tela)
 * @pw_element string $cCodStatus Código do Status&nbsp;
 * @pw_element string $cDesStatus Descrição do Status
 * @pw_complex tarefaUpsertResponse
 */
class TarefaUpsertResponse{
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
	/**
	 * Código do Status&nbsp;
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do Status
	 *
	 * @var string
	 */
	public string $cDesStatus;
}
