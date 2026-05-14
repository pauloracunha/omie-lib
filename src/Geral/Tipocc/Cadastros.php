<?php

namespace OmieLib\Geral\Tipocc;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Tipocc\Request\TipoCCListarRequest;
use OmieLib\Geral\Tipocc\Response\TipoCCListarResponse;

/**
 * Lista os cadastros encontrados.
 *
 * @pw_element string $cCodigo Código do tipo de oportunidade.
 * @pw_element string $cDescricao Descrição do tipo de oportunidade.
 * @pw_element string $cGrupo Observação do tipo de oportunidade.
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código do tipo de oportunidade.
	 *
	 * @var string
	 */
	public string $cCodigo;
	/**
	 * Descrição do tipo de oportunidade.
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Observação do tipo de oportunidade.
	 *
	 * @var string
	 */
	public string $cGrupo;
}
