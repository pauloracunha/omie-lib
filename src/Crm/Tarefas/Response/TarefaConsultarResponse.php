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
 * Resposta da solicitação de consulta de tarefa de uma oportunidade.
 *
 * @pw_element integer $nCodTarefa Código da tarefa.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element integer $nCodOp Código da oportunidade.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodInt Código de integração da tarefa.<BR>(Utilizado em títulos criados via API, não é visualizado na tela)
 * @pw_element integer $nCodUsuario Código do usuário vendedor.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $dData Data da tarefa.
 * @pw_element string $cHora Hora da tarefa.
 * @pw_element integer $nCodNotif Código do envio da notificação por e-mail,<BR>Pode ser:<BR>99999 - Não notificar<BR>15 - 15 minutos antes<BR>30 - 30 minutos antes<BR>60 - 1 hora antes<BR>120 - 2 horas antes<BR>180 - 3 horas antes<BR>1001 - 1 dia antes<BR>1002 - 2 dias antes<BR>1003 - 3 dias antes<BR>2001 - 1 semana antes<BR>2002 - 2 semanas antes
 * @pw_element integer $nCodAtividade Código da atividade.<BR>Pode ser:<BR>1 - Ligar<BR>2 - Reunião<BR>3 - Tarefa<BR>4 - E-mail<BR>5 - Almoço<BR>6 - Prazo Final<BR>7 - Nota
 * @pw_element string $cDescricao Descrição da tarefa.
 * @pw_element string $cImportante Indica que é uma atividade importante.
 * @pw_element string $cUrgente Indica que é uma atividade urgente.
 * @pw_element string $cEmExecucao Indica que a atividade está em execução.
 * @pw_element string $cRealizada Indica que a atividade foi realizada/concluída.
 * @pw_element integer $nIncluidoPor Código do usuário que incluiu a tarefa.
 * @pw_complex tarefaConsultarResponse
 */
class TarefaConsultarResponse{
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
	 * Código do usuário vendedor.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodUsuario;
	/**
	 * Data da tarefa.
	 *
	 * @var string
	 */
	public string $dData;
	/**
	 * Hora da tarefa.
	 *
	 * @var string
	 */
	public string $cHora;
	/**
	 * Código do envio da notificação por e-mail,<BR>Pode ser:<BR>99999 - Não notificar<BR>15 - 15 minutos antes<BR>30 - 30 minutos antes<BR>60 - 1 hora antes<BR>120 - 2 horas antes<BR>180 - 3 horas antes<BR>1001 - 1 dia antes<BR>1002 - 2 dias antes<BR>1003 - 3 dias antes<BR>2001 - 1 semana antes<BR>2002 - 2 semanas antes
	 *
	 * @var integer
	 */
	public int $nCodNotif;
	/**
	 * Código da atividade.<BR>Pode ser:<BR>1 - Ligar<BR>2 - Reunião<BR>3 - Tarefa<BR>4 - E-mail<BR>5 - Almoço<BR>6 - Prazo Final<BR>7 - Nota
	 *
	 * @var integer
	 */
	public int $nCodAtividade;
	/**
	 * Descrição da tarefa.
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Indica que é uma atividade importante.
	 *
	 * @var string
	 */
	public string $cImportante;
	/**
	 * Indica que é uma atividade urgente.
	 *
	 * @var string
	 */
	public string $cUrgente;
	/**
	 * Indica que a atividade está em execução.
	 *
	 * @var string
	 */
	public string $cEmExecucao;
	/**
	 * Indica que a atividade foi realizada/concluída.
	 *
	 * @var string
	 */
	public string $cRealizada;
	/**
	 * Código do usuário que incluiu a tarefa.
	 *
	 * @var integer
	 */
	public int $nIncluidoPor;
}
