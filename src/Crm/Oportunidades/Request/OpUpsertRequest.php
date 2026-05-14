<?php

namespace OmieLib\Crm\Oportunidades\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Oportunidades\Cadastros;
use OmieLib\Crm\Oportunidades\Concorrentes;
use OmieLib\Crm\Oportunidades\Envolvidos;
use OmieLib\Crm\Oportunidades\FasesStatus;
use OmieLib\Crm\Oportunidades\Identificacao;
use OmieLib\Crm\Oportunidades\Lista_papeis;
use OmieLib\Crm\Oportunidades\Lista_tickets;
use OmieLib\Crm\Oportunidades\Observacoes;
use OmieLib\Crm\Oportunidades\OportunidadesJsonClient;
use OmieLib\Crm\Oportunidades\OutrasInf;
use OmieLib\Crm\Oportunidades\PrevisaoTemp;
use OmieLib\Crm\Oportunidades\Response\OpAlterarResponse;
use OmieLib\Crm\Oportunidades\Response\OpConsultarResponse;
use OmieLib\Crm\Oportunidades\Response\OpExcluirResponse;
use OmieLib\Crm\Oportunidades\Response\OpIncluirResponse;
use OmieLib\Crm\Oportunidades\Response\OpListarResponse;
use OmieLib\Crm\Oportunidades\Response\OpUpsertResponse;
use OmieLib\Crm\Oportunidades\Tarefas;
use OmieLib\Crm\Oportunidades\Ticket;

/**
 * Solicitação de Upsert de oportunidades
 *
 * @pw_element identificacao $identificacao Cabeçalho da Oportunidade&nbsp;
 * @pw_element fasesStatus $fasesStatus Fase e Status da Oportunidade.&nbsp;
 * @pw_element ticket $ticket Ticket da Oportunidade&nbsp;
 * @pw_element previsaoTemp $previsaoTemp Previsão e Temperatura
 * @pw_element observacoes $observacoes Observações da oportunidade.&nbsp;
 * @pw_element outrasInf $outrasInf Outras informações.
 * @pw_element envolvidos $envolvidos Envolvidos na oportunidade.
 * @pw_element concorrentesArray $concorrentes Concorrentes
 * @pw_complex opUpsertRequest
 */
class OpUpsertRequest{
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
}
