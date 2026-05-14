<?php

namespace OmieLib\Crm\Status;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Status\Request\StatusListarRequest;
use OmieLib\Crm\Status\Response\StatusListarResponse;

/**
 * Lista os cadastros encontrados.
 *
 * @pw_element integer $nCodigo Código do status da oportunidade.
 * @pw_element string $cDescricao Descrição do status da oportunidade.
 * @pw_element string $cObservacao Observação do status da oportunidade.
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código do status da oportunidade.
	 *
	 * @var integer
	 */
	public int $nCodigo;
	/**
	 * Descrição do status da oportunidade.
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Observação do status da oportunidade.
	 *
	 * @var string
	 */
	public string $cObservacao;
}
