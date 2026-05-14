<?php

namespace OmieLib\Geral\Tpativ\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Tpativ\Lista_tipos_atividade;
use OmieLib\Geral\Tpativ\Response\TpAtivListarResponse;
use OmieLib\Geral\Tpativ\TpAtivCadastroJsonClient;

/**
 * Solicitação de Listagem de Tipos de Atividade da Empresa.
 *
 * @pw_element string $filtrar_por_codigo Código do Tipo de Atividade da Empresa.<BR>Preenchimento Opcional.
 * @pw_element string $filtrar_por_descricao Descrição do Tipo de Atividade da Empresa.<BR>Preenchimento Opcional.
 * @pw_complex tpAtivListarRequest
 */
class TpAtivListarRequest{
	/**
	 * Código do Tipo de Atividade da Empresa.<BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $filtrar_por_codigo;
	/**
	 * Descrição do Tipo de Atividade da Empresa.<BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $filtrar_por_descricao;
}
