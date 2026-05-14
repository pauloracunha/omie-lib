<?php

namespace OmieLib\Crm\Tarefas\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Tarefas\Cadastros;
use OmieLib\Crm\Tarefas\CadastrosEmail;
use OmieLib\Crm\Tarefas\DetalhesOportunidade;
use OmieLib\Crm\Tarefas\Response\TarefaAlterarResponse;
use OmieLib\Crm\Tarefas\Response\TarefaConsultarResponse;
use OmieLib\Crm\Tarefas\Response\TarefaEmailListarResponse;
use OmieLib\Crm\Tarefas\Response\TarefaExcluirResponse;
use OmieLib\Crm\Tarefas\Response\TarefaIncluirResponse;
use OmieLib\Crm\Tarefas\Response\TarefaListarResponse;
use OmieLib\Crm\Tarefas\Response\TarefaUpsertResponse;
use OmieLib\Crm\Tarefas\Tarefa_ics_request;
use OmieLib\Crm\Tarefas\Tarefa_ics_response;
use OmieLib\Crm\Tarefas\TarefasJsonClient;

/**
 * Solicitação da listagem de tarefas da oportunidade.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $apenas_importado_api Exibir apenas os registros gerados pela API
 * @pw_element string $ordenar_por Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $ordem_decrescente Se a lista será apresentada em ordem decrescente.
 * @pw_element integer $nCodOp Código da oportunidade.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $email_vendedor E-Mail do Vendedor
 * @pw_element integer $codigo_vendedor Código do Vendedor.
 * @pw_element string $data_inicial Data inicial da tarefa.
 * @pw_element string $data_final Data final da tarefa.
 * @pw_element string $hora_inicial Hora inicial da tarefa.
 * @pw_element string $hora_final Hora final da tarefa.
 * @pw_element string $exibir_detalhes Exibe os detalhes da tarefa.
 * @pw_element string $cImportante Indica que é uma atividade importante.
 * @pw_element string $cUrgente Indica que é uma atividade urgente.
 * @pw_element string $cEmExecucao Indica que a atividade está em execução.
 * @pw_element string $cRealizada Indica que a atividade foi realizada/concluída.
 * @pw_element string $cTarefasUsuario Retornar apenas tarefas atribuidas ao vendedor (S/N).<BR><BR>
 * @pw_complex tarefaListarRequest
 */
class TarefaListarRequest{
	/**
	 * Número da página retornada
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $registros_por_pagina;
	/**
	 * Exibir apenas os registros gerados pela API
	 *
	 * @var string
	 */
	public string $apenas_importado_api;
	/**
	 * Ordem de exibição dos dados. Padrão: Código.
	 *
	 * @var string
	 */
	public string $ordenar_por;
	/**
	 * Se a lista será apresentada em ordem decrescente.
	 *
	 * @var string
	 */
	public string $ordem_decrescente;
	/**
	 * Código da oportunidade.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodOp;
	/**
	 * E-Mail do Vendedor
	 *
	 * @var string
	 */
	public string $email_vendedor;
	/**
	 * Código do Vendedor.
	 *
	 * @var integer
	 */
	public int $codigo_vendedor;
	/**
	 * Data inicial da tarefa.
	 *
	 * @var string
	 */
	public string $data_inicial;
	/**
	 * Data final da tarefa.
	 *
	 * @var string
	 */
	public string $data_final;
	/**
	 * Hora inicial da tarefa.
	 *
	 * @var string
	 */
	public string $hora_inicial;
	/**
	 * Hora final da tarefa.
	 *
	 * @var string
	 */
	public string $hora_final;
	/**
	 * Exibe os detalhes da tarefa.
	 *
	 * @var string
	 */
	public string $exibir_detalhes;
	/**
	 * Indica que é uma atividade importante.
	 *
	 * @var string
	 */
	public string $cImportante;
	/**
	 * Indica que é uma atividade urgente.
	 *
	 * @var string
	 */
	public string $cUrgente;
	/**
	 * Indica que a atividade está em execução.
	 *
	 * @var string
	 */
	public string $cEmExecucao;
	/**
	 * Indica que a atividade foi realizada/concluída.
	 *
	 * @var string
	 */
	public string $cRealizada;
	/**
	 * Retornar apenas tarefas atribuidas ao vendedor (S/N).<BR><BR>
	 *
	 * @var string
	 */
	public string $cTarefasUsuario;
}
