<?php

namespace OmieLib\Produtos\Cfop;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cfop\Request\CfopListarRequest;
use OmieLib\Produtos\Cfop\Response\CfopListarResponse;

/**
 * Lista os CFOPs encontrados.
 *
 * @pw_element string $nCodigo Código do CFOP.
 * @pw_element string $cDescricao Descrição do CFOP.
 * @pw_element string $cObservacao Observação do CFOP.
 * @pw_element string $cTipo Tipo do CFOP.<BR>E-Entrada / S-Saída
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código do CFOP.
	 *
	 * @var string
	 */
	public string $nCodigo;
	/**
	 * Descrição do CFOP.
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Observação do CFOP.
	 *
	 * @var string
	 */
	public string $cObservacao;
	/**
	 * Tipo do CFOP.<BR>E-Entrada / S-Saída
	 *
	 * @var string
	 */
	public string $cTipo;
}
