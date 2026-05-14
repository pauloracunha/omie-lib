<?php

namespace OmieLib\Geral\Tarefas\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Tarefas\Calendario;
use OmieLib\Geral\Tarefas\ListaTarefas;
use OmieLib\Geral\Tarefas\Request\AlterarTarefaRequest;
use OmieLib\Geral\Tarefas\Request\ConsultarTarefaRequest;
use OmieLib\Geral\Tarefas\Request\ExcluirTarefaRequest;
use OmieLib\Geral\Tarefas\Request\IncluirTarefaRequest;
use OmieLib\Geral\Tarefas\Request\ListarTarefasRequest;
use OmieLib\Geral\Tarefas\Request\ObterCalendarioTarefasRequest;
use OmieLib\Geral\Tarefas\Request\ObterResumoTarefasRequest;
use OmieLib\Geral\Tarefas\Request\ObterTotalTarefasRequest;
use OmieLib\Geral\Tarefas\Resumo;
use OmieLib\Geral\Tarefas\Tarefa;
use OmieLib\Geral\Tarefas\TarefasJsonClient;

/**
 * Resposta da solicitação para obter o número de tarefas por documento e origem.
 *
 * @pw_element string $cCodStatus Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro durante o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
 * @pw_element string $cDesStatus Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
 * @pw_element integer $nTarefas Número de tarefas.
 * @pw_complex ObterTotalTarefasResponse
 */
class ObterTotalTarefasResponse{
	/**
	 * Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro durante o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
	 *
	 * @var string
	 */
	public string $cDesStatus;
	/**
	 * Número de tarefas.
	 *
	 * @var integer
	 */
	public int $nTarefas;
}
