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
 * Lista de detalhes da tarefa.
 *
 * @pw_element decimal $nIdTarefa Código da tarefa.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $dDataTarefa Data da tarefa.
 * @pw_element string $cHoraTarefa Hora da tarefa.
 * @pw_element string $cEmExecucao Indica que a atividade está em execução.
 * @pw_element string $cRealizada Indica que a atividade foi realizada/concluída.
 * @pw_element integer $nIdResponsavel Código do responsável.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cNomeResponsavel Nome do responsável.
 * @pw_element integer $nIdNotificacao Código da notificação.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element integer $nIdOportunidade Código da oportunidade.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cNomeOportunidade Nome da oportunidade.
 * @pw_element string $cEmailOportunidade E-mail da oportunidade.
 * @pw_element integer $nIdContato Código do contato.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cNomeContato Nome do contato.
 * @pw_element string $cCargoContato Cargo do contato.
 * @pw_element string $cEmailContato E-mail do contato.
 * @pw_element string $cTelefoneContato Telefone do contato.
 * @pw_element string $cCelularContato Celular do contato.
 * @pw_element integer $nIdAtividade Código da atividade.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cNomeAtividade Nome da atividade.
 * @pw_element string $cImportante Indica que é uma atividade importante.
 * @pw_element string $cUrgente Indica que é uma atividade urgente.
 * @pw_element integer $nIdVendedor Código do responsável.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cNomeVendedor Nome do responsável.
 * @pw_element integer $nIdConta Código da conta.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cNomeConta Nome da conta.
 * @pw_element integer $nIdSolucao Código da solução
 * @pw_element string $cNomeSolucao Nome da solução.
 * @pw_complex listaDetalhesTarefas
 */
class ListaDetalhesTarefas{
	/**
	 * Código da tarefa.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var decimal
	 */
	public float $nIdTarefa;
	/**
	 * Data da tarefa.
	 *
	 * @var string
	 */
	public string $dDataTarefa;
	/**
	 * Hora da tarefa.
	 *
	 * @var string
	 */
	public string $cHoraTarefa;
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
	 * Código do responsável.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nIdResponsavel;
	/**
	 * Nome do responsável.
	 *
	 * @var string
	 */
	public string $cNomeResponsavel;
	/**
	 * Código da notificação.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nIdNotificacao;
	/**
	 * Código da oportunidade.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nIdOportunidade;
	/**
	 * Nome da oportunidade.
	 *
	 * @var string
	 */
	public string $cNomeOportunidade;
	/**
	 * E-mail da oportunidade.
	 *
	 * @var string
	 */
	public string $cEmailOportunidade;
	/**
	 * Código do contato.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nIdContato;
	/**
	 * Nome do contato.
	 *
	 * @var string
	 */
	public string $cNomeContato;
	/**
	 * Cargo do contato.
	 *
	 * @var string
	 */
	public string $cCargoContato;
	/**
	 * E-mail do contato.
	 *
	 * @var string
	 */
	public string $cEmailContato;
	/**
	 * Telefone do contato.
	 *
	 * @var string
	 */
	public string $cTelefoneContato;
	/**
	 * Celular do contato.
	 *
	 * @var string
	 */
	public string $cCelularContato;
	/**
	 * Código da atividade.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nIdAtividade;
	/**
	 * Nome da atividade.
	 *
	 * @var string
	 */
	public string $cNomeAtividade;
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
	 * Código do responsável.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nIdVendedor;
	/**
	 * Nome do responsável.
	 *
	 * @var string
	 */
	public string $cNomeVendedor;
	/**
	 * Código da conta.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nIdConta;
	/**
	 * Nome da conta.
	 *
	 * @var string
	 */
	public string $cNomeConta;
	/**
	 * Código da solução
	 *
	 * @var integer
	 */
	public int $nIdSolucao;
	/**
	 * Nome da solução.
	 *
	 * @var string
	 */
	public string $cNomeSolucao;
}
