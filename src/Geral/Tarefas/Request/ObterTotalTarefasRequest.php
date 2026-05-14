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
 * Solicitação para obter o número de tarefas por documento e origem.
 *
 * @pw_element string $cOrigem Origem da tarefa.<BR><BR>Para método de criação:<BR>Preenchimento obrigatório.<BR><BR>Pode ser:<BR><BR>oportunidade<BR>geral<BR>cliente<BR>produto<BR>servico<BR>pedido-venda<BR>pedido-compra<BR>pedido-importacao<BR>contas-pagar<BR>contas-receber<BR>ordem-producao<BR>ordem-servico<BR>contrato-servico
 * @pw_element integer $nCodDoc Id do documento vinculado a tarefa.<BR><BR>Esse campo varia conforme a origem da tarefa.<BR>Ele permite vincular a tarefa a um documento específico, seja ele relacionado a uma oportunidade, contas a pagar, contas a receber, entre outros.<BR><BR>Exemplo:<BR>Se a origem da tarefa for "pedido-compra", esse campo reflete o código do pedido de compra.<BR>Se a origem da tarefa for "contas-receber", esse campo reflete o código da conta a receber.<BR><BR>No cadastro de uma tarefa, quando a origem for "geral", não é permitido informar esse campo.
 * @pw_complex ObterTotalTarefasRequest
 */
class ObterTotalTarefasRequest{
	/**
	 * Origem da tarefa.<BR><BR>Para método de criação:<BR>Preenchimento obrigatório.<BR><BR>Pode ser:<BR><BR>oportunidade<BR>geral<BR>cliente<BR>produto<BR>servico<BR>pedido-venda<BR>pedido-compra<BR>pedido-importacao<BR>contas-pagar<BR>contas-receber<BR>ordem-producao<BR>ordem-servico<BR>contrato-servico
	 *
	 * @var string
	 */
	public string $cOrigem;
	/**
	 * Id do documento vinculado a tarefa.<BR><BR>Esse campo varia conforme a origem da tarefa.<BR>Ele permite vincular a tarefa a um documento específico, seja ele relacionado a uma oportunidade, contas a pagar, contas a receber, entre outros.<BR><BR>Exemplo:<BR>Se a origem da tarefa for "pedido-compra", esse campo reflete o código do pedido de compra.<BR>Se a origem da tarefa for "contas-receber", esse campo reflete o código da conta a receber.<BR><BR>No cadastro de uma tarefa, quando a origem for "geral", não é permitido informar esse campo.
	 *
	 * @var integer
	 */
	public int $nCodDoc;
}
