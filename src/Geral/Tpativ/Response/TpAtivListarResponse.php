<?php

namespace OmieLib\Geral\Tpativ\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Tpativ\Lista_tipos_atividade;
use OmieLib\Geral\Tpativ\Request\TpAtivListarRequest;
use OmieLib\Geral\Tpativ\TpAtivCadastroJsonClient;

/**
 * Resposta da listagem deTipos de Atividade da Empresa.
 *
 * @pw_element lista_tipos_atividadeArray $lista_tipos_atividade Lista de Tipo de Atividade da Empresa.
 * @pw_complex tpAtivListarResponse
 */
class TpAtivListarResponse{
	/**
	 * Lista de Tipo de Atividade da Empresa.
	 *
	 * @var Lista_tipos_atividade[]
	 */
	public array $lista_tipos_atividade;
}
