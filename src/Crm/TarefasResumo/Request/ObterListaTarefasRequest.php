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
 * Solicitação da listagem do resumo das tarefas do CRM.
 *
 * @pw_element string $dDia Data da consulta<BR><BR><BR>Preenchimento opcional.
 * @pw_element integer $nPagina Número da página.
 * @pw_element integer $nRegPorPagina Número de registros.
 * @pw_complex ObterListaTarefasRequest
 */
class ObterListaTarefasRequest{
	/**
	 * Data da consulta<BR><BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $dDia;
	/**
	 * Número da página.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número de registros.
	 *
	 * @var integer
	 */
	public int $nRegPorPagina;
}
