<?php

namespace OmieLib\Geral\Familias\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Familias\FamCadastro;
use OmieLib\Geral\Familias\FamChave;
use OmieLib\Geral\Familias\FamStatus;
use OmieLib\Geral\Familias\FamiliasCadastroJsonClient;
use OmieLib\Geral\Familias\Response\FamConsultarResponse;
use OmieLib\Geral\Familias\Response\FamListarResponse;

/**
 * Solicitação de Consulta de uma Familia de Produtos
 *
 * @pw_element integer $codigo Código da Familia de Produto
 * @pw_element string $codInt Código de Integração da Familia de Produto
 * @pw_complex famConsultarRequest
 */
class FamConsultarRequest{
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
