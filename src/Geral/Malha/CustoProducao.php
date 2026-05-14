<?php

namespace OmieLib\Geral\Malha;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Malha\Request\MalhaAlterarRequest;
use OmieLib\Geral\Malha\Request\MalhaConsultarRequest;
use OmieLib\Geral\Malha\Request\MalhaExcluirRequest;
use OmieLib\Geral\Malha\Request\MalhaIncluirRequest;
use OmieLib\Geral\Malha\Request\MalhaPesquisarRequest;
use OmieLib\Geral\Malha\Response\MalhaAlterarResponse;
use OmieLib\Geral\Malha\Response\MalhaConsultarResponse;
use OmieLib\Geral\Malha\Response\MalhaExcluirResponse;
use OmieLib\Geral\Malha\Response\MalhaIncluirResponse;
use OmieLib\Geral\Malha\Response\MalhaPesquisarResponse;

/**
 * Custo de Produção.
 *
 * @pw_element decimal $vMOD Valor da Mão de Obra Direta (MOD).
 * @pw_element decimal $vGGF Valor dos Gastos Gerais de Fabricação (GGF).
 * @pw_complex custoProducao
 */
class CustoProducao{
	/**
	 * Valor da Mão de Obra Direta (MOD).
	 *
	 * @var decimal
	 */
	public float $vMOD;
	/**
	 * Valor dos Gastos Gerais de Fabricação (GGF).
	 *
	 * @var decimal
	 */
	public float $vGGF;
}
