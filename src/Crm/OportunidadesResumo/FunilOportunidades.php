<?php

namespace OmieLib\Crm\OportunidadesResumo;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\OportunidadesResumo\Request\ObterListaOpRequest;
use OmieLib\Crm\OportunidadesResumo\Request\ObterResumoOpRequest;
use OmieLib\Crm\OportunidadesResumo\Response\ObterListaOpResponse;
use OmieLib\Crm\OportunidadesResumo\Response\ObterResumoOpResponse;

/**
 * Funil de oportunidades.
 *
 * @pw_element mesAtual $mesAtual Resumo total mês atual.
 * @pw_element proximoMes $proximoMes Resumo total próximo mês.
 * @pw_element mesesSeguintes $mesesSeguintes Resumo total próximos meses.
 * @pw_complex funilOportunidades
 */
class FunilOportunidades{
	/**
	 * Resumo total mês atual.
	 *
	 * @var MesAtual
	 */
	public MesAtual $mesAtual;
	/**
	 * Resumo total próximo mês.
	 *
	 * @var ProximoMes
	 */
	public ProximoMes $proximoMes;
	/**
	 * Resumo total próximos meses.
	 *
	 * @var MesesSeguintes
	 */
	public MesesSeguintes $mesesSeguintes;
}
