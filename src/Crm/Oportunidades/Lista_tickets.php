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
 * Lista de descrições dos títulos.
 *
 * @pw_element string $cDescricaoTicket Descrição do ticket.
 * @pw_element integer $nOrdemTicket Ordem do Ticket.
 * @pw_complex lista_tickets
 */
class Lista_tickets{
	/**
	 * Descrição do ticket.
	 *
	 * @var string
	 */
	public string $cDescricaoTicket;
	/**
	 * Ordem do Ticket.
	 *
	 * @var integer
	 */
	public int $nOrdemTicket;
}
