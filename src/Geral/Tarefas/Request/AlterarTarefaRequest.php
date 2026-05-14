<?php

namespace OmieLib\Geral\Tarefas\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Tarefas\Calendario;
use OmieLib\Geral\Tarefas\ListaTarefas;
use OmieLib\Geral\Tarefas\Response\AlterarTarefaResponse;
use OmieLib\Geral\Tarefas\Response\ConsultarTarefaResponse;
use OmieLib\Geral\Tarefas\Response\ExcluirTarefaResponse;
use OmieLib\Geral\Tarefas\Response\IncluirTarefaResponse;
use OmieLib\Geral\Tarefas\Response\ListarTarefasResponse;
use OmieLib\Geral\Tarefas\Response\ObterCalendarioTarefasResponse;
use OmieLib\Geral\Tarefas\Response\ObterResumoTarefasResponse;
use OmieLib\Geral\Tarefas\Response\ObterTotalTarefasResponse;
use OmieLib\Geral\Tarefas\Resumo;
use OmieLib\Geral\Tarefas\Tarefa;
use OmieLib\Geral\Tarefas\TarefasJsonClient;

/**
 * Solicitação de alteração de uma tarefa.
 *
 * @pw_element integer $nCodTarefa Código único da tarefa.
 * @pw_element string $cCodIntTarefa Código de Integração.
 * @pw_element string $cDescricao Descrição da tarefa.
 * @pw_element string $dData Data
 * @pw_element string $hHora Hora
 * @pw_element string $cImportante Indica se a tarefa é importante (S/N).
 * @pw_element string $cUrgente Indica se a tarefa é urgente (S/N).
 * @pw_element string $cSituacao Situação da tarefa.<BR><BR>Para métodos de criação e edição:<BR>Preenchimento opcional.<BR>Como default será utilizado "Pendente".<BR><BR>Pode ser:<BR><BR>pendente (Pendente)<BR>em-execucao (Em execução)<BR>realizada (Realizada)
 * @pw_element integer $nCodAtividade Código do tipo de tarefa vinculado.<BR><BR>Para métodos de criação e edição:<BR>Preenchimento opcional.<BR><BR>Para obter os tipos de tarefa, utilize o método ObterTiposTarefa da API:<BR>/api/v1/geral/tipostarefa/
 * @pw_element integer $nCodNotif Id do periodo de envio da notificação
 * @pw_element integer $nCodUserAtb Código do usuário atribuído.<BR><BR>Para método de criação:<BR>Preenchimento obrigatório.<BR><BR>Para método de edição:<BR>Preenchimento opcional.<BR><BR>Para obter os possíveis usuários para alocar a tarefa, utilize o método ListarUsuarios da API:<BR>/api/v1/geral/usuarios/
 * @pw_complex AlterarTarefaRequest
 */
class AlterarTarefaRequest{
	/**
	 * Código único da tarefa.
	 *
	 * @var integer
	 */
	public int $nCodTarefa;
	/**
	 * Código de Integração.
	 *
	 * @var string
	 */
	public string $cCodIntTarefa;
	/**
	 * Descrição da tarefa.
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Data
	 *
	 * @var string
	 */
	public string $dData;
	/**
	 * Hora
	 *
	 * @var string
	 */
	public string $hHora;
	/**
	 * Indica se a tarefa é importante (S/N).
	 *
	 * @var string
	 */
	public string $cImportante;
	/**
	 * Indica se a tarefa é urgente (S/N).
	 *
	 * @var string
	 */
	public string $cUrgente;
	/**
	 * Situação da tarefa.<BR><BR>Para métodos de criação e edição:<BR>Preenchimento opcional.<BR>Como default será utilizado "Pendente".<BR><BR>Pode ser:<BR><BR>pendente (Pendente)<BR>em-execucao (Em execução)<BR>realizada (Realizada)
	 *
	 * @var string
	 */
	public string $cSituacao;
	/**
	 * Código do tipo de tarefa vinculado.<BR><BR>Para métodos de criação e edição:<BR>Preenchimento opcional.<BR><BR>Para obter os tipos de tarefa, utilize o método ObterTiposTarefa da API:<BR>/api/v1/geral/tipostarefa/
	 *
	 * @var integer
	 */
	public int $nCodAtividade;
	/**
	 * Id do periodo de envio da notificação
	 *
	 * @var integer
	 */
	public int $nCodNotif;
	/**
	 * Código do usuário atribuído.<BR><BR>Para método de criação:<BR>Preenchimento obrigatório.<BR><BR>Para método de edição:<BR>Preenchimento opcional.<BR><BR>Para obter os possíveis usuários para alocar a tarefa, utilize o método ListarUsuarios da API:<BR>/api/v1/geral/usuarios/
	 *
	 * @var integer
	 */
	public int $nCodUserAtb;
}
