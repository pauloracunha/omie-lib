<?php

namespace OmieLib\Crm\Contascaract\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Contascaract\Caracteristicas;
use OmieLib\Crm\Contascaract\ContasCaracteristicasJsonClient;
use OmieLib\Crm\Contascaract\Request\AlterarCaractCRMContaRequest;
use OmieLib\Crm\Contascaract\Request\ConsultarCaractCRMContaRequest;
use OmieLib\Crm\Contascaract\Request\ExcluirCaractCRMContaRequest;
use OmieLib\Crm\Contascaract\Request\ExcluirTodasCaractCRMContaRequest;
use OmieLib\Crm\Contascaract\Request\IncluirCaractCRMContaRequest;

/**
 * Resposta da consulta de todas as características de uma conta.
 *
 * @pw_element integer $nCod Código da conta
 * @pw_element string $cCodInt Código de integração com sistemas legados
 * @pw_element caracteristicas $caracteristicas Características da conta
 * @pw_complex ConsultarCaractCRMContaResponse
 */
class ConsultarCaractCRMContaResponse{
	/**
	 * Código da conta
	 *
	 * @var integer
	 */
	public int $nCod;
	/**
	 * Código de integração com sistemas legados
	 *
	 * @var string
	 */
	public string $cCodInt;
	/**
	 * Características da conta
	 *
	 * @var Caracteristicas
	 */
	public Caracteristicas $caracteristicas;
}
