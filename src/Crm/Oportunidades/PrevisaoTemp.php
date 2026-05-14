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
 * Previsão e Temperatura
 *
 * @pw_element integer $nTemperatura Temperatura
 * @pw_element integer $nMesPrev Mês de previsão de fechamento.
 * @pw_element integer $nAnoPrev Ano de previsão de fechamento.
 * @pw_complex previsaoTemp
 */
class PrevisaoTemp{
	/**
	 * Temperatura
	 *
	 * @var integer
	 */
	public int $nTemperatura;
	/**
	 * Mês de previsão de fechamento.
	 *
	 * @var integer
	 */
	public int $nMesPrev;
	/**
	 * Ano de previsão de fechamento.
	 *
	 * @var integer
	 */
	public int $nAnoPrev;
}
