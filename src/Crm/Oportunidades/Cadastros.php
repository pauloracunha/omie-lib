<?php

namespace OmieLib\Crm\Oportunidades;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Oportunidades\Request\OpAlterarRequest;
use OmieLib\Crm\Oportunidades\Request\OpConsultarRequest;
use OmieLib\Crm\Oportunidades\Request\OpExcluirRequest;
use OmieLib\Crm\Oportunidades\Request\OpIncluirRequest;
use OmieLib\Crm\Oportunidades\Request\OpListarRequest;
use OmieLib\Crm\Oportunidades\Request\OpUpsertRequest;
use OmieLib\Crm\Oportunidades\Response\OpAlterarResponse;
use OmieLib\Crm\Oportunidades\Response\OpConsultarResponse;
use OmieLib\Crm\Oportunidades\Response\OpExcluirResponse;
use OmieLib\Crm\Oportunidades\Response\OpIncluirResponse;
use OmieLib\Crm\Oportunidades\Response\OpListarResponse;
use OmieLib\Crm\Oportunidades\Response\OpUpsertResponse;

/**
 * Lista os cadastros encontrados.
 *
 * @pw_element identificacao $identificacao Cabeçalho da Oportunidade&nbsp;
 * @pw_element fasesStatus $fasesStatus Fase e Status da Oportunidade.&nbsp;
 * @pw_element ticket $ticket Ticket da Oportunidade&nbsp;
 * @pw_element previsaoTemp $previsaoTemp Previsão e Temperatura
 * @pw_element observacoes $observacoes Observações da oportunidade.&nbsp;
 * @pw_element outrasInf $outrasInf Outras informações.
 * @pw_element envolvidos $envolvidos Envolvidos na oportunidade.
 * @pw_element concorrentesArray $concorrentes Concorrentes
 * @pw_element tarefasArray $tarefas Lista de tarefas associadas.
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Cabeçalho da Oportunidade&nbsp;
	 *
	 * @var Identificacao
	 */
	public Identificacao $identificacao;
	/**
	 * Fase e Status da Oportunidade.&nbsp;
	 *
	 * @var FasesStatus
	 */
	public FasesStatus $fasesStatus;
	/**
	 * Ticket da Oportunidade&nbsp;
	 *
	 * @var Ticket
	 */
	public Ticket $ticket;
	/**
	 * Previsão e Temperatura
	 *
	 * @var PrevisaoTemp
	 */
	public PrevisaoTemp $previsaoTemp;
	/**
	 * Observações da oportunidade.&nbsp;
	 *
	 * @var Observacoes
	 */
	public Observacoes $observacoes;
	/**
	 * Outras informações.
	 *
	 * @var OutrasInf
	 */
	public OutrasInf $outrasInf;
	/**
	 * Envolvidos na oportunidade.
	 *
	 * @var Envolvidos
	 */
	public Envolvidos $envolvidos;
	/**
	 * Concorrentes
	 *
	 * @var Concorrentes[]
	 */
	public array $concorrentes;
	/**
	 * Lista de tarefas associadas.
	 *
	 * @var Tarefas[]
	 */
	public array $tarefas;
}
