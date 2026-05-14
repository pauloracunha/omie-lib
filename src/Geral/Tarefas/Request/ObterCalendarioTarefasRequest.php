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
 * Solicitação para obter informações do calendário das tarefas.
 *
 * @pw_element string $dDataInicial Filtrar tarefas a partir dessa data
 * @pw_element string $dDataFinal Filtrar tarefas até essa data
 * @pw_element string $cOrigem Origem da tarefa.<BR><BR>Para método de criação:<BR>Preenchimento obrigatório.<BR><BR>Pode ser:<BR><BR>oportunidade<BR>geral<BR>cliente<BR>produto<BR>servico<BR>pedido-venda<BR>pedido-compra<BR>pedido-importacao<BR>contas-pagar<BR>contas-receber<BR>ordem-producao<BR>ordem-servico<BR>contrato-servico
 * @pw_element string $cCriadasPorMim Indica se deve retornar apenas as tarefas criadas pelo usuário (S/N).
 * @pw_element string $cAtribuidasAMim Indica se deve retornar apenas as tarefas atribuídas ao usuário (S/N).
 * @pw_complex ObterCalendarioTarefasRequest
 */
class ObterCalendarioTarefasRequest{
	/**
	 * Filtrar tarefas a partir dessa data
	 *
	 * @var string
	 */
	public string $dDataInicial;
	/**
	 * Filtrar tarefas até essa data
	 *
	 * @var string
	 */
	public string $dDataFinal;
	/**
	 * Origem da tarefa.<BR><BR>Para método de criação:<BR>Preenchimento obrigatório.<BR><BR>Pode ser:<BR><BR>oportunidade<BR>geral<BR>cliente<BR>produto<BR>servico<BR>pedido-venda<BR>pedido-compra<BR>pedido-importacao<BR>contas-pagar<BR>contas-receber<BR>ordem-producao<BR>ordem-servico<BR>contrato-servico
	 *
	 * @var string
	 */
	public string $cOrigem;
	/**
	 * Indica se deve retornar apenas as tarefas criadas pelo usuário (S/N).
	 *
	 * @var string
	 */
	public string $cCriadasPorMim;
	/**
	 * Indica se deve retornar apenas as tarefas atribuídas ao usuário (S/N).
	 *
	 * @var string
	 */
	public string $cAtribuidasAMim;
}
