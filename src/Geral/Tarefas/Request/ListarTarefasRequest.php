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
 * Solicitação da listagem de tarefas cadastradas.
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nRegPorPagina Número de registros retornados
 * @pw_element string $cOrigem Origem da tarefa.<BR><BR>Para método de criação:<BR>Preenchimento obrigatório.<BR><BR>Pode ser:<BR><BR>oportunidade<BR>geral<BR>cliente<BR>produto<BR>servico<BR>pedido-venda<BR>pedido-compra<BR>pedido-importacao<BR>contas-pagar<BR>contas-receber<BR>ordem-producao<BR>ordem-servico<BR>contrato-servico
 * @pw_element string $cImportante Indica se a tarefa é importante (S/N).
 * @pw_element string $cUrgente Indica se a tarefa é urgente (S/N).
 * @pw_element string $cSituacao Situação da tarefa.<BR><BR>Para métodos de criação e edição:<BR>Preenchimento opcional.<BR>Como default será utilizado "Pendente".<BR><BR>Pode ser:<BR><BR>pendente (Pendente)<BR>em-execucao (Em execução)<BR>realizada (Realizada)
 * @pw_element string $cIntervalo Filtrar tarefas a partir de intervalos específicos.<BR><BR>Quando preenchida essa tag, não informar as tags 'dDataInicial' e 'dDataFinal'<BR><BR>Pode ser:<BR><BR>hoje<BR>semana-atual<BR>proxima-semana<BR>mes (mês atual)
 * @pw_element string $dDataInicial Filtrar tarefas a partir dessa data
 * @pw_element string $dDataFinal Filtrar tarefas até essa data
 * @pw_element string $cCriadasPorMim Indica se deve retornar apenas as tarefas criadas pelo usuário (S/N).
 * @pw_element string $cAtribuidasAMim Indica se deve retornar apenas as tarefas atribuídas ao usuário (S/N).
 * @pw_element integer $nCodDoc Id do documento vinculado a tarefa.<BR><BR>Esse campo varia conforme a origem da tarefa.<BR>Ele permite vincular a tarefa a um documento específico, seja ele relacionado a uma oportunidade, contas a pagar, contas a receber, entre outros.<BR><BR>Exemplo:<BR>Se a origem da tarefa for "pedido-compra", esse campo reflete o código do pedido de compra.<BR>Se a origem da tarefa for "contas-receber", esse campo reflete o código da conta a receber.<BR><BR>No cadastro de uma tarefa, quando a origem for "geral", não é permitido informar esse campo.
 * @pw_element string $cOrdenarPor Ordem de exibição dos dados.<BR>Quando não preenchido o padrão será por código<BR><BR>Pode ser:<BR><BR>codigo<BR>codint<BR>data<BR>descricao
 * @pw_element string $cOrdemDesc Indica se a ordem de exibição é decrescente (S/N).<BR><BR>Caso não informado, o padrão é "N".
 * @pw_complex ListarTarefasRequest
 */
class ListarTarefasRequest{
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
	public int $nRegPorPagina;
	/**
	 * Origem da tarefa.<BR><BR>Para método de criação:<BR>Preenchimento obrigatório.<BR><BR>Pode ser:<BR><BR>oportunidade<BR>geral<BR>cliente<BR>produto<BR>servico<BR>pedido-venda<BR>pedido-compra<BR>pedido-importacao<BR>contas-pagar<BR>contas-receber<BR>ordem-producao<BR>ordem-servico<BR>contrato-servico
	 *
	 * @var string
	 */
	public string $cOrigem;
	/**
	 * Indica se a tarefa é importante (S/N).
	 *
	 * @var string
	 */
	public string $cImportante;
	/**
	 * Indica se a tarefa é urgente (S/N).
	 *
	 * @var string
	 */
	public string $cUrgente;
	/**
	 * Situação da tarefa.<BR><BR>Para métodos de criação e edição:<BR>Preenchimento opcional.<BR>Como default será utilizado "Pendente".<BR><BR>Pode ser:<BR><BR>pendente (Pendente)<BR>em-execucao (Em execução)<BR>realizada (Realizada)
	 *
	 * @var string
	 */
	public string $cSituacao;
	/**
	 * Filtrar tarefas a partir de intervalos específicos.<BR><BR>Quando preenchida essa tag, não informar as tags 'dDataInicial' e 'dDataFinal'<BR><BR>Pode ser:<BR><BR>hoje<BR>semana-atual<BR>proxima-semana<BR>mes (mês atual)
	 *
	 * @var string
	 */
	public string $cIntervalo;
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
	/**
	 * Id do documento vinculado a tarefa.<BR><BR>Esse campo varia conforme a origem da tarefa.<BR>Ele permite vincular a tarefa a um documento específico, seja ele relacionado a uma oportunidade, contas a pagar, contas a receber, entre outros.<BR><BR>Exemplo:<BR>Se a origem da tarefa for "pedido-compra", esse campo reflete o código do pedido de compra.<BR>Se a origem da tarefa for "contas-receber", esse campo reflete o código da conta a receber.<BR><BR>No cadastro de uma tarefa, quando a origem for "geral", não é permitido informar esse campo.
	 *
	 * @var integer
	 */
	public int $nCodDoc;
	/**
	 * Ordem de exibição dos dados.<BR>Quando não preenchido o padrão será por código<BR><BR>Pode ser:<BR><BR>codigo<BR>codint<BR>data<BR>descricao
	 *
	 * @var string
	 */
	public string $cOrdenarPor;
	/**
	 * Indica se a ordem de exibição é decrescente (S/N).<BR><BR>Caso não informado, o padrão é "N".
	 *
	 * @var string
	 */
	public string $cOrdemDesc;
}
