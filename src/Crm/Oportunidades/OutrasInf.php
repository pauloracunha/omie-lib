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
 * Outras informações.
 *
 * @pw_element integer $nCodTipo Código do tipo.
 * @pw_element string $cEmailOp E-mail da oportunidade.
 * @pw_element string $dInclusao Data de inclusão da oportunidade.
 * @pw_element string $hInclusao Hora de inclusão da oportunidade.
 * @pw_element string $dAlteracao Data de alteração da oportunidade.
 * @pw_element string $hAlteracao Hora de alteração da oportunidade.
 * @pw_complex outrasInf
 */
class OutrasInf{
	/**
	 * Código do tipo.
	 *
	 * @var integer
	 */
	public int $nCodTipo;
	/**
	 * E-mail da oportunidade.
	 *
	 * @var string
	 */
	public string $cEmailOp;
	/**
	 * Data de inclusão da oportunidade.
	 *
	 * @var string
	 */
	public string $dInclusao;
	/**
	 * Hora de inclusão da oportunidade.
	 *
	 * @var string
	 */
	public string $hInclusao;
	/**
	 * Data de alteração da oportunidade.
	 *
	 * @var string
	 */
	public string $dAlteracao;
	/**
	 * Hora de alteração da oportunidade.
	 *
	 * @var string
	 */
	public string $hAlteracao;
}
