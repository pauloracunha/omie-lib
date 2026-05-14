<?php

namespace OmieLib\Geral\Familias;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Familias\Request\FamConsultarRequest;
use OmieLib\Geral\Familias\Request\FamListarRequest;
use OmieLib\Geral\Familias\Response\FamConsultarResponse;
use OmieLib\Geral\Familias\Response\FamListarResponse;

/**
 * Status da Familia de Produtos
 *
 * @pw_element integer $codigo Código da Familia de Produto
 * @pw_element string $codInt Código de Integração da Familia de Produto
 * @pw_element string $cCodStatus Código do Status
 * @pw_element string $cDesStatus Descrição do Status da Remessa
 * @pw_complex famStatus
 */
class FamStatus{
	/**
	 * Código da Familia de Produto
	 *
	 * @var integer
	 */
	public int $codigo;
	/**
	 * Código de Integração da Familia de Produto
	 *
	 * @var string
	 */
	public string $codInt;
	/**
	 * Código do Status
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do Status da Remessa
	 *
	 * @var string
	 */
	public string $cDesStatus;
}
