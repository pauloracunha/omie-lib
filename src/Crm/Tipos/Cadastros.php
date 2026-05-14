<?php

namespace OmieLib\Crm\Tipos;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Tipos\Request\TipoListarRequest;
use OmieLib\Crm\Tipos\Response\TipoListarResponse;

/**
 * Lista os cadastros encontrados.
 *
 * @pw_element integer $nCodigo Código do tipo de oportunidade.
 * @pw_element string $cDescricao Descrição do tipo de oportunidade.
 * @pw_element string $cObservacao Observação do tipo de oportunidade.
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código do tipo de oportunidade.
	 *
	 * @var integer
	 */
	public int $nCodigo;
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
	public string $cObservacao;
}
