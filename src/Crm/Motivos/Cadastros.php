<?php

namespace OmieLib\Crm\Motivos;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Motivos\Request\MotivoListarRequest;
use OmieLib\Crm\Motivos\Response\MotivoListarResponse;

/**
 * Lista os cadastros encontrados.
 *
 * @pw_element integer $nCodigo Código do motivo da oportunidade.
 * @pw_element string $cDescricao Descrição do motivo da oportunidade.
 * @pw_element string $cObservacao Observação da oportunidade.
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código do motivo da oportunidade.
	 *
	 * @var integer
	 */
	public int $nCodigo;
	/**
	 * Descrição do motivo da oportunidade.
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Observação da oportunidade.
	 *
	 * @var string
	 */
	public string $cObservacao;
}
