<?php

namespace OmieLib\Crm\TarefasResumo\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\TarefasResumo\ListaDetalhesTarefas;
use OmieLib\Crm\TarefasResumo\Request\ObterDetalhesTarefasRequest;
use OmieLib\Crm\TarefasResumo\Request\ObterListaTarefasRequest;
use OmieLib\Crm\TarefasResumo\Request\ObterResumoTarefasRequest;
use OmieLib\Crm\TarefasResumo\ResumoTarefasExecucao;
use OmieLib\Crm\TarefasResumo\ResumoTarefasFuturas;
use OmieLib\Crm\TarefasResumo\ResumoTarefasHoje;
use OmieLib\Crm\TarefasResumo\ResumoTarefasJsonClient;
use OmieLib\Crm\TarefasResumo\ResumoTarefasRealizadas;
use OmieLib\Crm\TarefasResumo\ResumoTarefasTodos;

/**
 * Resposta da consulta de detalhes de uma tarefa.
 *
 * @pw_element string $dDataEmail Data em que deve ser enviado o e-mail de notificação.
 * @pw_element string $cHoraEmail Hora em que deve ser enviado o e-mail de notificação.
 * @pw_element string $cEnviadoEmail Indica que foi enviado o e-mail de notificação.
 * @pw_element string $cDescricaoTarefa Descrição da tarefa.
 * @pw_complex ObterDetalhesTarefasResponse
 */
class ObterDetalhesTarefasResponse{
	/**
	 * Data em que deve ser enviado o e-mail de notificação.
	 *
	 * @var string
	 */
	public string $dDataEmail;
	/**
	 * Hora em que deve ser enviado o e-mail de notificação.
	 *
	 * @var string
	 */
	public string $cHoraEmail;
	/**
	 * Indica que foi enviado o e-mail de notificação.
	 *
	 * @var string
	 */
	public string $cEnviadoEmail;
	/**
	 * Descrição da tarefa.
	 *
	 * @var string
	 */
	public string $cDescricaoTarefa;
}
