<?php

namespace OmieLib\Crm\OportunidadesResumo\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\OportunidadesResumo\FunilOportunidades;
use OmieLib\Crm\OportunidadesResumo\ListaDetalhesOp;
use OmieLib\Crm\OportunidadesResumo\MesAtual;
use OmieLib\Crm\OportunidadesResumo\MesesSeguintes;
use OmieLib\Crm\OportunidadesResumo\ProximoMes;
use OmieLib\Crm\OportunidadesResumo\Request\ObterListaOpRequest;
use OmieLib\Crm\OportunidadesResumo\Request\ObterResumoOpRequest;
use OmieLib\Crm\OportunidadesResumo\ResumoOportunidadesJsonClient;
use OmieLib\Crm\OportunidadesResumo\SaudePipeline;

/**
 * Resposta da solicitação do resumo do CRM.
 *
 * @pw_element integer $nIdVendedor Código do usuário / vendedor.
 * @pw_element integer $nIdParceiro Código do parceiro ou equipe.
 * @pw_element string $cMesAno Mes e ano. (MM/AAAA).
 * @pw_element funilOportunidades $funilOportunidades Funil de oportunidades.
 * @pw_element saudePipeline $saudePipeline Saúde do pipeline.
 * @pw_complex obterResumoOpResponse
 */
class ObterResumoOpResponse{
	/**
	 * Código do usuário / vendedor.
	 *
	 * @var integer
	 */
	public int $nIdVendedor;
	/**
	 * Código do parceiro ou equipe.
	 *
	 * @var integer
	 */
	public int $nIdParceiro;
	/**
	 * Mes e ano. (MM/AAAA).
	 *
	 * @var string
	 */
	public string $cMesAno;
	/**
	 * Funil de oportunidades.
	 *
	 * @var FunilOportunidades
	 */
	public FunilOportunidades $funilOportunidades;
	/**
	 * Saúde do pipeline.
	 *
	 * @var SaudePipeline
	 */
	public SaudePipeline $saudePipeline;
}
