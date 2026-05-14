<?php

namespace OmieLib\Crm\Verticais;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Verticais\Request\VerticalListarRequest;
use OmieLib\Crm\Verticais\Response\VerticalListarResponse;

/**
 * Lista os cadastros encontrados.
 *
 * @pw_element integer $nCodigo Código da solução.
 * @pw_element string $cDescricao Descrição da solução.
 * @pw_element string $cObservacao Observações.
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código da solução.
	 *
	 * @var integer
	 */
	public int $nCodigo;
	/**
	 * Descrição da solução.
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Observações.
	 *
	 * @var string
	 */
	public string $cObservacao;
}
