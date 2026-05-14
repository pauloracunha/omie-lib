<?php

namespace OmieLib\Geral\Tpativ;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Tpativ\Request\TpAtivListarRequest;
use OmieLib\Geral\Tpativ\Response\TpAtivListarResponse;

/**
 * Lista de Tipo de Atividade da Empresa.
 *
 * @pw_element string $cCodigo Código do Tipo de Atividade da Empresa.
 * @pw_element string $cDescricao Descrição do Tipo de Atividade da Empresa.
 * @pw_complex lista_tipos_atividade
 */
class Lista_tipos_atividade{
	/**
	 * Código do Tipo de Atividade da Empresa.
	 *
	 * @var string
	 */
	public string $cCodigo;
	/**
	 * Descrição do Tipo de Atividade da Empresa.
	 *
	 * @var string
	 */
	public string $cDescricao;
}
