<?php

namespace OmieLib\Crm\TarefasResumo;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\TarefasResumo\Request\ObterDetalhesTarefasRequest;
use OmieLib\Crm\TarefasResumo\Request\ObterListaTarefasRequest;
use OmieLib\Crm\TarefasResumo\Request\ObterResumoTarefasRequest;
use OmieLib\Crm\TarefasResumo\Response\ObterDetalhesTarefasResponse;
use OmieLib\Crm\TarefasResumo\Response\ObterListaTarefasResponse;
use OmieLib\Crm\TarefasResumo\Response\ObterResumoTarefasResponse;

/**
 * Lista das tarefas realizadas.
 *
 * @pw_element string $dDia Data da consulta<BR><BR><BR>Preenchimento opcional.
 * @pw_element decimal $nTarefas Quantidade de tarefas.
 * @pw_complex resumoTarefasRealizadas
 */
class ResumoTarefasRealizadas{
	/**
	 * Data da consulta<BR><BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $dDia;
	/**
	 * Quantidade de tarefas.
	 *
	 * @var decimal
	 */
	public float $nTarefas;
}
