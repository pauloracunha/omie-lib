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
 * Solicitação da listagem de Oportunidades.
 *
 * @pw_element string $cMesAno Mes e ano. (MM/AAAA).<BR><BR>Default mês atual.<BR><BR>Preenchimento opcional.
 * @pw_element string $cTemperatura Informe a temperatura da Oportundiade.<BR><BR>Pode ser:<BR>em-processo<BR>boas-chances<BR>comprometido<BR>conquistado<BR><BR>Preenchimento obrigatório.
 * @pw_complex ObterListaOpRequest
 */
class ObterListaOpRequest{
	/**
	 * Mes e ano. (MM/AAAA).<BR><BR>Default mês atual.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $cMesAno;
	/**
	 * Informe a temperatura da Oportundiade.<BR><BR>Pode ser:<BR>em-processo<BR>boas-chances<BR>comprometido<BR>conquistado<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $cTemperatura;
}
