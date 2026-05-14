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
 * Fase e Status da Oportunidade.
 *
 * @pw_element integer $nCodFase Código da fase. <BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element integer $nCodStatus Código do status.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element integer $nCodMotivo Código do motivo.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $dNovoLead Data do Novo Lead.
 * @pw_element string $dQualificacao Data da Qualificação.
 * @pw_element string $dTreinamento Data de Treinamento.
 * @pw_element string $dShowRoom Data de ShowRoom
 * @pw_element string $dProjeto Data de projeto.
 * @pw_element string $dConclusao Data de conclusão.
 * @pw_complex fasesStatus
 */
class FasesStatus{
	/**
	 * Código da fase. <BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodFase;
	/**
	 * Código do status.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodStatus;
	/**
	 * Código do motivo.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodMotivo;
	/**
	 * Data do Novo Lead.
	 *
	 * @var string
	 */
	public string $dNovoLead;
	/**
	 * Data da Qualificação.
	 *
	 * @var string
	 */
	public string $dQualificacao;
	/**
	 * Data de Treinamento.
	 *
	 * @var string
	 */
	public string $dTreinamento;
	/**
	 * Data de ShowRoom
	 *
	 * @var string
	 */
	public string $dShowRoom;
	/**
	 * Data de projeto.
	 *
	 * @var string
	 */
	public string $dProjeto;
	/**
	 * Data de conclusão.
	 *
	 * @var string
	 */
	public string $dConclusao;
}
