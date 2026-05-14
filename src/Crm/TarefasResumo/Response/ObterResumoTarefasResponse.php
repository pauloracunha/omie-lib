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
 * Resposta da solicitação das tarefas do CRM.
 *
 * @pw_element resumoTarefasTodosArray $resumoTarefasTodos Lista de todas as tarefas encontradas.
 * @pw_element resumoTarefasFuturasArray $resumoTarefasFuturas Lista das tarefas futuras.
 * @pw_element resumoTarefasHojeArray $resumoTarefasHoje Lista das tarefas para hoje.
 * @pw_element resumoTarefasExecucaoArray $resumoTarefasExecucao Lista das tarefas em execução.
 * @pw_element resumoTarefasRealizadasArray $resumoTarefasRealizadas Lista das tarefas realizadas.
 * @pw_complex obterResumoTarefasResponse
 */
class ObterResumoTarefasResponse{
	/**
	 * Lista de todas as tarefas encontradas.
	 *
	 * @var ResumoTarefasTodos[]
	 */
	public array $resumoTarefasTodos;
	/**
	 * Lista das tarefas futuras.
	 *
	 * @var ResumoTarefasFuturas[]
	 */
	public array $resumoTarefasFuturas;
	/**
	 * Lista das tarefas para hoje.
	 *
	 * @var ResumoTarefasHoje[]
	 */
	public array $resumoTarefasHoje;
	/**
	 * Lista das tarefas em execução.
	 *
	 * @var ResumoTarefasExecucao[]
	 */
	public array $resumoTarefasExecucao;
	/**
	 * Lista das tarefas realizadas.
	 *
	 * @var ResumoTarefasRealizadas[]
	 */
	public array $resumoTarefasRealizadas;
}
