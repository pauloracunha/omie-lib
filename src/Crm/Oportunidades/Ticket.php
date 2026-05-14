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
 * Ticket da Oportunidade
 *
 * @pw_element decimal $nProdutos Valor de produtos.
 * @pw_element decimal $nServicos Valor de serviços.
 * @pw_element decimal $nRecorrencia Valor da recorrência.
 * @pw_element integer $nMeses Meses de contrato.
 * @pw_element decimal $nTicket Valor do ticket calculado.<BR>(Calculado automaticamente)
 * @pw_complex ticket
 */
class Ticket{
	/**
	 * Valor de produtos.
	 *
	 * @var decimal
	 */
	public float $nProdutos;
	/**
	 * Valor de serviços.
	 *
	 * @var decimal
	 */
	public float $nServicos;
	/**
	 * Valor da recorrência.
	 *
	 * @var decimal
	 */
	public float $nRecorrencia;
	/**
	 * Meses de contrato.
	 *
	 * @var integer
	 */
	public int $nMeses;
	/**
	 * Valor do ticket calculado.<BR>(Calculado automaticamente)
	 *
	 * @var decimal
	 */
	public float $nTicket;
}
