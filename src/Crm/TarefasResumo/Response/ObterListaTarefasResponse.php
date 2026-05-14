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
 * Resposta da solicitação da listagem do resumo das tarefas do CRM
 *
 * @pw_element listaDetalhesTarefasArray $listaDetalhesTarefas Lista de detalhes da tarefa.
 * @pw_element integer $nRegistros Número de registros.
 * @pw_element integer $nPagina Número da página.
 * @pw_element integer $nTotPaginas Número total de páginas.
 * @pw_element integer $nTotRegistros Número total de registros.
 * @pw_complex ObterListaTarefasResponse
 */
class ObterListaTarefasResponse{
	/**
	 * Lista de detalhes da tarefa.
	 *
	 * @var ListaDetalhesTarefas[]
	 */
	public array $listaDetalhesTarefas;
	/**
	 * Número de registros.
	 *
	 * @var integer
	 */
	public int $nRegistros;
	/**
	 * Número da página.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número total de páginas.
	 *
	 * @var integer
	 */
	public int $nTotPaginas;
	/**
	 * Número total de registros.
	 *
	 * @var integer
	 */
	public int $nTotRegistros;
}
