<?php

namespace OmieLib\Crm\TarefasResumo\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\TarefasResumo\ListaDetalhesTarefas;
use OmieLib\Crm\TarefasResumo\Response\ObterDetalhesTarefasResponse;
use OmieLib\Crm\TarefasResumo\Response\ObterListaTarefasResponse;
use OmieLib\Crm\TarefasResumo\Response\ObterResumoTarefasResponse;
use OmieLib\Crm\TarefasResumo\ResumoTarefasExecucao;
use OmieLib\Crm\TarefasResumo\ResumoTarefasFuturas;
use OmieLib\Crm\TarefasResumo\ResumoTarefasHoje;
use OmieLib\Crm\TarefasResumo\ResumoTarefasJsonClient;
use OmieLib\Crm\TarefasResumo\ResumoTarefasRealizadas;
use OmieLib\Crm\TarefasResumo\ResumoTarefasTodos;

/**
 * Solicitação do resumo das tarefas do CRM.
 *
 * @pw_element string $dDataInicio Data Inicial de Consulta.<BR><BR><BR>Preenchimento opcional.
 * @pw_element string $dDataFim Data final de Consulta.<BR><BR><BR>Preenchimento opcional.
 * @pw_element string $cTipoTarefa Código do tipo da tarefa.<BR>O valor default desse campo é zero, o que significa que todas as listas serão retornadas.<BR><BR><BR>Pode ser:<BR>0 - Todas os resumos<BR>1 - Apenas Tarefas Futuras<BR>2 - Apenas Tarefas para Hoje<BR>3 - Apenas Tarefas em Execução<BR>4 - Apenas Tarefas Realizadas<BR>9 - Apenas Tarefas Totalizadas<BR>
 * @pw_complex obterResumoTarefasRequest
 */
class ObterResumoTarefasRequest{
	/**
	 * Data Inicial de Consulta.<BR><BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $dDataInicio;
	/**
	 * Data final de Consulta.<BR><BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $dDataFim;
	/**
	 * Código do tipo da tarefa.<BR>O valor default desse campo é zero, o que significa que todas as listas serão retornadas.<BR><BR><BR>Pode ser:<BR>0 - Todas os resumos<BR>1 - Apenas Tarefas Futuras<BR>2 - Apenas Tarefas para Hoje<BR>3 - Apenas Tarefas em Execução<BR>4 - Apenas Tarefas Realizadas<BR>9 - Apenas Tarefas Totalizadas<BR>
	 *
	 * @var string
	 */
	public string $cTipoTarefa;
}
