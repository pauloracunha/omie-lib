<?php

namespace OmieLib\Geral\Familias;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Familias\Request\FamConsultarRequest;
use OmieLib\Geral\Familias\Request\FamListarRequest;
use OmieLib\Geral\Familias\Response\FamConsultarResponse;
use OmieLib\Geral\Familias\Response\FamListarResponse;

/**
 * chave de pesquisa do Cadastro de Familias de produtos
 *
 * @pw_element integer $codigo Código da Familia de Produto
 * @pw_element string $codInt Código de Integração da Familia de Produto
 * @pw_complex famChave
 */
class FamChave{
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
}
