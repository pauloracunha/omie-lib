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
 * Calendário de tarefas no intervalo especificado pelas datas de início e fim.
 *
 * @pw_element string $dData Data relacionada à consulta ou ao agrupamento de tarefas.
 * @pw_element integer $nPendentes Número de tarefas pendentes para a data.
 * @pw_element integer $nEmExecucao Número de tarefas em execução para a data.
 * @pw_element integer $nConcluidas Número de tarefas concluídas para a data.
 * @pw_element string $cStatus Status de situação geral para o dia.<BR><BR>Pode ser:<BR><BR>"00" - Nenhuma tarefa mapeada para essa data<BR>"01" - Possui tarefas pendentes/execução<BR>"02" - Possui tarefas pendentes/execução (atrasados - menor que a data atual)<BR>"03" - Todas tarefas já foram concluídas
 * @pw_complex calendario
 */
class Calendario{
	/**
	 * Data relacionada à consulta ou ao agrupamento de tarefas.
	 *
	 * @var string
	 */
	public string $dData;
	/**
	 * Número de tarefas pendentes para a data.
	 *
	 * @var integer
	 */
	public int $nPendentes;
	/**
	 * Número de tarefas em execução para a data.
	 *
	 * @var integer
	 */
	public int $nEmExecucao;
	/**
	 * Número de tarefas concluídas para a data.
	 *
	 * @var integer
	 */
	public int $nConcluidas;
	/**
	 * Status de situação geral para o dia.<BR><BR>Pode ser:<BR><BR>"00" - Nenhuma tarefa mapeada para essa data<BR>"01" - Possui tarefas pendentes/execução<BR>"02" - Possui tarefas pendentes/execução (atrasados - menor que a data atual)<BR>"03" - Todas tarefas já foram concluídas
	 *
	 * @var string
	 */
	public string $cStatus;
}
