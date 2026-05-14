<?php

namespace OmieLib\Geral\Tarefas;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Tarefas\Request\AlterarTarefaRequest;
use OmieLib\Geral\Tarefas\Request\ConsultarTarefaRequest;
use OmieLib\Geral\Tarefas\Request\ExcluirTarefaRequest;
use OmieLib\Geral\Tarefas\Request\IncluirTarefaRequest;
use OmieLib\Geral\Tarefas\Request\ListarTarefasRequest;
use OmieLib\Geral\Tarefas\Request\ObterCalendarioTarefasRequest;
use OmieLib\Geral\Tarefas\Request\ObterResumoTarefasRequest;
use OmieLib\Geral\Tarefas\Request\ObterTotalTarefasRequest;
use OmieLib\Geral\Tarefas\Response\AlterarTarefaResponse;
use OmieLib\Geral\Tarefas\Response\ConsultarTarefaResponse;
use OmieLib\Geral\Tarefas\Response\ExcluirTarefaResponse;
use OmieLib\Geral\Tarefas\Response\IncluirTarefaResponse;
use OmieLib\Geral\Tarefas\Response\ListarTarefasResponse;
use OmieLib\Geral\Tarefas\Response\ObterCalendarioTarefasResponse;
use OmieLib\Geral\Tarefas\Response\ObterResumoTarefasResponse;
use OmieLib\Geral\Tarefas\Response\ObterTotalTarefasResponse;

/**
 * Resumo das tarefas indicando quantas tarefas estão programadas para hoje, semana atual, próxima semana e mês atual.
 *
 * @pw_element integer $nHoje Número de tarefas de hoje.
 * @pw_element integer $nSemanaAtual Número de tarefas da semana atual.
 * @pw_element integer $nProximaSemana Número de tarefas da próxima semana.
 * @pw_element integer $nMesAtual Número de tarefas do mês atual.
 * @pw_complex resumo
 */
class Resumo{
	/**
	 * Número de tarefas de hoje.
	 *
	 * @var integer
	 */
	public int $nHoje;
	/**
	 * Número de tarefas da semana atual.
	 *
	 * @var integer
	 */
	public int $nSemanaAtual;
	/**
	 * Número de tarefas da próxima semana.
	 *
	 * @var integer
	 */
	public int $nProximaSemana;
	/**
	 * Número de tarefas do mês atual.
	 *
	 * @var integer
	 */
	public int $nMesAtual;
}
