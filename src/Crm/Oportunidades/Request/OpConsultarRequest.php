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
 * Solicitação de consulta de oportunidades.
 *
 * @pw_element integer $nCodOp Código da oportunidade.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodIntOp Código de integração da oportunidade.<BR>(Utilizado em títulos criados via API, não é visualizado na tela)
 * @pw_complex opConsultarRequest
 */
class OpConsultarRequest{
	/**
	 * Código da oportunidade.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodOp;
	/**
	 * Código de integração da oportunidade.<BR>(Utilizado em títulos criados via API, não é visualizado na tela)
	 *
	 * @var string
	 */
	public string $cCodIntOp;
}
