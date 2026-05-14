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
 * Resposta da solicitação da listagem de tarefas cadastradas.
 *
 * @pw_element string $cCodStatus Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro durante o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
 * @pw_element string $cDesStatus Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nRegistros Número de registros retornados
 * @pw_element integer $nTotPaginas Total de páginas encontradas.
 * @pw_element integer $nTotRegistros Total de registros encontrados.
 * @pw_element listaTarefasArray $listaTarefas Lista de tarefas.
 * @pw_complex ListarTarefasResponse
 */
class ListarTarefasResponse{
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
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número de registros retornados
	 *
	 * @var integer
	 */
	public int $nRegistros;
	/**
	 * Total de páginas encontradas.
	 *
	 * @var integer
	 */
	public int $nTotPaginas;
	/**
	 * Total de registros encontrados.
	 *
	 * @var integer
	 */
	public int $nTotRegistros;
	/**
	 * Lista de tarefas.
	 *
	 * @var ListaTarefas[]
	 */
	public array $listaTarefas;
}
