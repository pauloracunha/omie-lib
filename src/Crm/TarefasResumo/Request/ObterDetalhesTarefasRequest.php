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
 * Consulta os detalhes de uma tafera.
 *
 * @pw_element integer $nIdOportunidade Código da oportunidade.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element decimal $nIdTarefa Código da tarefa.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_complex ObterDetalhesTarefasRequest
 */
class ObterDetalhesTarefasRequest{
	/**
	 * Código da oportunidade.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nIdOportunidade;
	/**
	 * Código da tarefa.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var decimal
	 */
	public float $nIdTarefa;
}
