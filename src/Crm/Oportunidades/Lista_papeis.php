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
 * Lista de Papeis
 *
 * @pw_element string $cDescricaoPapel Descrição do Papel.
 * @pw_element integer $nOrdemPapel Ordem do Papel.
 * @pw_complex lista_papeis
 */
class Lista_papeis{
	/**
	 * Descrição do Papel.
	 *
	 * @var string
	 */
	public string $cDescricaoPapel;
	/**
	 * Ordem do Papel.
	 *
	 * @var integer
	 */
	public int $nOrdemPapel;
}
