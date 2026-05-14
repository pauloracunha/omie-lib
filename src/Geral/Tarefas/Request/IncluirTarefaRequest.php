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
 * Solicitação de cadastro de tarefa.
 *
 * @pw_element string $cCodIntTarefa Código de Integração.
 * @pw_element string $cOrigem Origem da tarefa.<BR><BR>Para método de criação:<BR>Preenchimento obrigatório.<BR><BR>Pode ser:<BR><BR>oportunidade<BR>geral<BR>cliente<BR>produto<BR>servico<BR>pedido-venda<BR>pedido-compra<BR>pedido-importacao<BR>contas-pagar<BR>contas-receber<BR>ordem-producao<BR>ordem-servico<BR>contrato-servico
 * @pw_element integer $nCodDoc Id do documento vinculado a tarefa.<BR><BR>Esse campo varia conforme a origem da tarefa.<BR>Ele permite vincular a tarefa a um documento específico, seja ele relacionado a uma oportunidade, contas a pagar, contas a receber, entre outros.<BR><BR>Exemplo:<BR>Se a origem da tarefa for "pedido-compra", esse campo reflete o código do pedido de compra.<BR>Se a origem da tarefa for "contas-receber", esse campo reflete o código da conta a receber.<BR><BR>No cadastro de uma tarefa, quando a origem for "geral", não é permitido informar esse campo.
 * @pw_element string $cDescricao Descrição da tarefa.
 * @pw_element string $dData Data
 * @pw_element string $hHora Hora
 * @pw_element string $cImportante Indica se a tarefa é importante (S/N).
 * @pw_element string $cUrgente Indica se a tarefa é urgente (S/N).
 * @pw_element string $cSituacao Situação da tarefa.<BR><BR>Para métodos de criação e edição:<BR>Preenchimento opcional.<BR>Como default será utilizado "Pendente".<BR><BR>Pode ser:<BR><BR>pendente (Pendente)<BR>em-execucao (Em execução)<BR>realizada (Realizada)
 * @pw_element integer $nCodAtividade Código do tipo de tarefa vinculado.<BR><BR>Para métodos de criação e edição:<BR>Preenchimento opcional.<BR><BR>Para obter os tipos de tarefa, utilize o método ObterTiposTarefa da API:<BR>/api/v1/geral/tipostarefa/
 * @pw_element integer $nCodNotif Id do periodo de envio da notificação
 * @pw_element integer $nCodUserAtb Código do usuário atribuído.<BR><BR>Para método de criação:<BR>Preenchimento obrigatório.<BR><BR>Para método de edição:<BR>Preenchimento opcional.<BR><BR>Para obter os possíveis usuários para alocar a tarefa, utilize o método ListarUsuarios da API:<BR>/api/v1/geral/usuarios/
 * @pw_complex IncluirTarefaRequest
 */
class IncluirTarefaRequest{
	/**
	 * Código de Integração.
	 *
	 * @var string
	 */
	public string $cCodIntTarefa;
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
	/**
	 * Descrição da tarefa.
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Data
	 *
	 * @var string
	 */
	public string $dData;
	/**
	 * Hora
	 *
	 * @var string
	 */
	public string $hHora;
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
	 * Código do tipo de tarefa vinculado.<BR><BR>Para métodos de criação e edição:<BR>Preenchimento opcional.<BR><BR>Para obter os tipos de tarefa, utilize o método ObterTiposTarefa da API:<BR>/api/v1/geral/tipostarefa/
	 *
	 * @var integer
	 */
	public int $nCodAtividade;
	/**
	 * Id do periodo de envio da notificação
	 *
	 * @var integer
	 */
	public int $nCodNotif;
	/**
	 * Código do usuário atribuído.<BR><BR>Para método de criação:<BR>Preenchimento obrigatório.<BR><BR>Para método de edição:<BR>Preenchimento opcional.<BR><BR>Para obter os possíveis usuários para alocar a tarefa, utilize o método ListarUsuarios da API:<BR>/api/v1/geral/usuarios/
	 *
	 * @var integer
	 */
	public int $nCodUserAtb;
}
