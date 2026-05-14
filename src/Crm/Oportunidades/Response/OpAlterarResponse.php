<?php

namespace OmieLib\Crm\Oportunidades\Response;

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
use OmieLib\Crm\Oportunidades\Request\OpAlterarRequest;
use OmieLib\Crm\Oportunidades\Request\OpConsultarRequest;
use OmieLib\Crm\Oportunidades\Request\OpExcluirRequest;
use OmieLib\Crm\Oportunidades\Request\OpIncluirRequest;
use OmieLib\Crm\Oportunidades\Request\OpListarRequest;
use OmieLib\Crm\Oportunidades\Request\OpUpsertRequest;
use OmieLib\Crm\Oportunidades\Tarefas;
use OmieLib\Crm\Oportunidades\Ticket;

/**
 * Resposta da alteração de oportunidades.
 *
 * @pw_element integer $nCodOp Código da oportunidade.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodIntOp Código de integração da oportunidade.<BR>(Utilizado em títulos criados via API, não é visualizado na tela)
 * @pw_element string $cCodStatus Código do Status
 * @pw_element string $cDesStatus Descrição do Status
 * @pw_complex opAlterarResponse
 */
class OpAlterarResponse{
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
	/**
	 * Código do Status
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do Status
	 *
	 * @var string
	 */
	public string $cDesStatus;
}
