<?php

namespace OmieLib\Crm\OportunidadesResumo\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\OportunidadesResumo\FunilOportunidades;
use OmieLib\Crm\OportunidadesResumo\ListaDetalhesOp;
use OmieLib\Crm\OportunidadesResumo\MesAtual;
use OmieLib\Crm\OportunidadesResumo\MesesSeguintes;
use OmieLib\Crm\OportunidadesResumo\ProximoMes;
use OmieLib\Crm\OportunidadesResumo\Response\ObterListaOpResponse;
use OmieLib\Crm\OportunidadesResumo\Response\ObterResumoOpResponse;
use OmieLib\Crm\OportunidadesResumo\ResumoOportunidadesJsonClient;
use OmieLib\Crm\OportunidadesResumo\SaudePipeline;

/**
 * Solicitação do resumo do CRM.
 *
 * @pw_element integer $nIdVendedor Código do usuário / vendedor.
 * @pw_element integer $nIdParceiro Código do parceiro ou equipe.
 * @pw_element string $cMesAno Mes e ano. (MM/AAAA).
 * @pw_element boolean $lApenasResumo Exibir apenas o resumo.<BR><BR>Quando true será retornado as estruturas:<BR><BR>funilOportunidades->mesAtual<BR>saudePipeline<BR><BR>Quando false retornará todas as estruturas.<BR><BR>Default = true<BR>
 * @pw_complex obterResumoOpRequest
 */
class ObterResumoOpRequest{
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
	 * Exibir apenas o resumo.<BR><BR>Quando true será retornado as estruturas:<BR><BR>funilOportunidades->mesAtual<BR>saudePipeline<BR><BR>Quando false retornará todas as estruturas.<BR><BR>Default = true<BR>
	 *
	 * @var boolean
	 */
	public bool $lApenasResumo;
}
