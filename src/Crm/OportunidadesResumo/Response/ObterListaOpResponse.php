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
 * Resposta da solicitação da listagem de Oportunidades.
 *
 * @pw_element listaDetalhesOpArray $listaDetalhesOp Lista de oportunidades.
 * @pw_complex ObterListaOpResponse
 */
class ObterListaOpResponse{
	/**
	 * Lista de oportunidades.
	 *
	 * @var ListaDetalhesOp[]
	 */
	public array $listaDetalhesOp;
}
