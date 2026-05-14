<?php

namespace OmieLib\Estoque\Comprador;

use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Comprador\Request\CompradorListarRequest;
use OmieLib\Estoque\Comprador\Response\CompradorListarResponse;

/**
 * Lista os cadastros encontrados.
 *
 * @pw_element integer $nCodigo Código do tipo de oportunidade.
 * @pw_element string $cDescricao Descrição do tipo de oportunidade.
 * @pw_element string $cInativo Comprador Inativo S/N.
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
	 * Comprador Inativo S/N.
	 *
	 * @var string
	 */
	public string $cInativo;
}
