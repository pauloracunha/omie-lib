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
 * Solicitação de exclusão de uma tarefa.
 *
 * @pw_element integer $nCodTarefa Código único da tarefa.
 * @pw_element string $cCodIntTarefa Código de Integração.
 * @pw_complex ExcluirTarefaRequest
 */
class ExcluirTarefaRequest{
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
}
