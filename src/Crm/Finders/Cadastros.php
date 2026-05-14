<?php

namespace OmieLib\Crm\Finders;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Finders\Request\FinderListarRequest;
use OmieLib\Crm\Finders\Response\FinderListarResponse;

/**
 * Lista os cadastros encontrados.
 *
 * @pw_element integer $nCodigo Código do finder da oportunidade.
 * @pw_element string $cNome Nome do finder da oportunidade.
 * @pw_element string $cEmail Email do finder da oportunidade.
 * @pw_element string $cObservacao Observação do finder da oportunidade.
 * @pw_element string $cInativo Indica se finder da oportunidade está inativo.
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código do finder da oportunidade.
	 *
	 * @var integer
	 */
	public int $nCodigo;
	/**
	 * Nome do finder da oportunidade.
	 *
	 * @var string
	 */
	public string $cNome;
	/**
	 * Email do finder da oportunidade.
	 *
	 * @var string
	 */
	public string $cEmail;
	/**
	 * Observação do finder da oportunidade.
	 *
	 * @var string
	 */
	public string $cObservacao;
	/**
	 * Indica se finder da oportunidade está inativo.
	 *
	 * @var string
	 */
	public string $cInativo;
}
