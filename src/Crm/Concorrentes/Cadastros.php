<?php

namespace OmieLib\Crm\Concorrentes;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Concorrentes\Request\ConcorrenteListarRequest;
use OmieLib\Crm\Concorrentes\Response\ConcorrenteListarResponse;

/**
 * Lista os cadastros encontrados.
 *
 * @pw_element integer $nCodigo Código do concorrente de oportunidade.
 * @pw_element string $cDescricao Descrição do concorrente de oportunidade.
 * @pw_element string $cObservacao Observação do concorrente de oportunidade.
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código do concorrente de oportunidade.
	 *
	 * @var integer
	 */
	public int $nCodigo;
	/**
	 * Descrição do concorrente de oportunidade.
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Observação do concorrente de oportunidade.
	 *
	 * @var string
	 */
	public string $cObservacao;
}
