<?php

namespace OmieLib\Crm\Oportunidades;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Oportunidades\Request\OpAlterarRequest;
use OmieLib\Crm\Oportunidades\Request\OpConsultarRequest;
use OmieLib\Crm\Oportunidades\Request\OpExcluirRequest;
use OmieLib\Crm\Oportunidades\Request\OpIncluirRequest;
use OmieLib\Crm\Oportunidades\Request\OpListarRequest;
use OmieLib\Crm\Oportunidades\Request\OpUpsertRequest;
use OmieLib\Crm\Oportunidades\Response\OpAlterarResponse;
use OmieLib\Crm\Oportunidades\Response\OpConsultarResponse;
use OmieLib\Crm\Oportunidades\Response\OpExcluirResponse;
use OmieLib\Crm\Oportunidades\Response\OpIncluirResponse;
use OmieLib\Crm\Oportunidades\Response\OpListarResponse;
use OmieLib\Crm\Oportunidades\Response\OpUpsertResponse;

/**
 * Lista de tarefas associadas.
 *
 * @pw_element string $cCodIntTarefa Código de Integração da Tarefa.
 * @pw_element string $cDescricaoTarefa Descrição da Tarefa.
 * @pw_element string $cDataTarefa Data da Tarefa.
 * @pw_element string $cHoraTarefa Hora da Tarefa.
 * @pw_element string $cImportante Tarefa está definida como "Importante": S/N.
 * @pw_element string $cEmExecucao Tarefa está definida como "Em Execução": S/N
 * @pw_element string $cRealizada Tarefa está definida como "Realizada": S/N
 * @pw_element string $cUrgente Tarefa está definida como "Urgente": S/N
 * @pw_element integer $nCodAtividade Código do Atividade.
 * @pw_element string $cDesAtividade Descrição da Atividade.
 * @pw_element integer $nCodNotificacao Código da Notificação.
 * @pw_element string $cDesNotificacao Descrição da Notificação.
 * @pw_element integer $nCodUsuario Código do usuário.
 * @pw_element string $cNomUsuario Nome do usuário.
 * @pw_element string $cEmailUsuario E-mail do usuário.
 * @pw_complex tarefas
 */
class Tarefas{
	/**
	 * Código de Integração da Tarefa.
	 *
	 * @var string
	 */
	public string $cCodIntTarefa;
	/**
	 * Descrição da Tarefa.
	 *
	 * @var string
	 */
	public string $cDescricaoTarefa;
	/**
	 * Data da Tarefa.
	 *
	 * @var string
	 */
	public string $cDataTarefa;
	/**
	 * Hora da Tarefa.
	 *
	 * @var string
	 */
	public string $cHoraTarefa;
	/**
	 * Tarefa está definida como "Importante": S/N.
	 *
	 * @var string
	 */
	public string $cImportante;
	/**
	 * Tarefa está definida como "Em Execução": S/N
	 *
	 * @var string
	 */
	public string $cEmExecucao;
	/**
	 * Tarefa está definida como "Realizada": S/N
	 *
	 * @var string
	 */
	public string $cRealizada;
	/**
	 * Tarefa está definida como "Urgente": S/N
	 *
	 * @var string
	 */
	public string $cUrgente;
	/**
	 * Código do Atividade.
	 *
	 * @var integer
	 */
	public int $nCodAtividade;
	/**
	 * Descrição da Atividade.
	 *
	 * @var string
	 */
	public string $cDesAtividade;
	/**
	 * Código da Notificação.
	 *
	 * @var integer
	 */
	public int $nCodNotificacao;
	/**
	 * Descrição da Notificação.
	 *
	 * @var string
	 */
	public string $cDesNotificacao;
	/**
	 * Código do usuário.
	 *
	 * @var integer
	 */
	public int $nCodUsuario;
	/**
	 * Nome do usuário.
	 *
	 * @var string
	 */
	public string $cNomUsuario;
	/**
	 * E-mail do usuário.
	 *
	 * @var string
	 */
	public string $cEmailUsuario;
}
