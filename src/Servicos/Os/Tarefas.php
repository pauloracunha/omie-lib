<?php

namespace OmieLib\Servicos\Os;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Os\Request\OsListarRequest;
use OmieLib\Servicos\Os\Request\OsObterRequest;
use OmieLib\Servicos\Os\Request\OsStatusRequest;
use OmieLib\Servicos\Os\Request\OsTrocarEtapaRequest;
use OmieLib\Servicos\Os\Response\OsListarResponse;
use OmieLib\Servicos\Os\Response\OsObterResponse;
use OmieLib\Servicos\Os\Response\OsStatusResponse;
use OmieLib\Servicos\Os\Response\OsTrocarEtapaResponse;

/**
 * Lista com as tarefas relacionadas a ordem de serviço.
 *
 * @pw_element integer $nCodTarefa Código único da tarefa.
 * @pw_element string $cCodIntTarefa Código de Integração.
 * @pw_element string $cDescricao Descrição da tarefa.
 * @pw_element string $dData Data
 * @pw_element string $hHora Hora
 * @pw_element integer $nCodDoc Id do documento vinculado a tarefa.<BR><BR>Esse campo varia conforme a origem da tarefa.<BR>Ele permite vincular a tarefa a um documento específico, seja ele relacionado a uma oportunidade, contas a pagar, contas a receber, entre outros.<BR><BR>Exemplo:<BR>Se a origem da tarefa for "pedido-compra", esse campo reflete o código do pedido de compra.<BR>Se a origem da tarefa for "contas-receber", esse campo reflete o código da conta a receber.
 * @pw_element integer $nCodUserAtb Código do usuário atribuído.
 * @pw_element string $cNomeUserAtb Nome Completo do Usuário
 * @pw_complex Tarefas
 */
class Tarefas{
	/**
	 * Código único da tarefa.
	 *
	 * @var integer
	 */
	public int $nCodTarefa;
	/**
	 * Código de Integração.
	 *
	 * @var string
	 */
	public string $cCodIntTarefa;
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
	 * Id do documento vinculado a tarefa.<BR><BR>Esse campo varia conforme a origem da tarefa.<BR>Ele permite vincular a tarefa a um documento específico, seja ele relacionado a uma oportunidade, contas a pagar, contas a receber, entre outros.<BR><BR>Exemplo:<BR>Se a origem da tarefa for "pedido-compra", esse campo reflete o código do pedido de compra.<BR>Se a origem da tarefa for "contas-receber", esse campo reflete o código da conta a receber.
	 *
	 * @var integer
	 */
	public int $nCodDoc;
	/**
	 * Código do usuário atribuído.
	 *
	 * @var integer
	 */
	public int $nCodUserAtb;
	/**
	 * Nome Completo do Usuário
	 *
	 * @var string
	 */
	public string $cNomeUserAtb;
}
