<?php

namespace OmieLib\Geral\Vendedores\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Vendedores\Cadastro;
use OmieLib\Geral\Vendedores\Response\VendAlterarResponse;
use OmieLib\Geral\Vendedores\Response\VendConsultarResponse;
use OmieLib\Geral\Vendedores\Response\VendExcluirResponse;
use OmieLib\Geral\Vendedores\Response\VendIncluirResponse;
use OmieLib\Geral\Vendedores\Response\VendListarResponse;
use OmieLib\Geral\Vendedores\Response\VendUpsertResponse;
use OmieLib\Geral\Vendedores\VendedoresCadastroJsonClient;

/**
 * Solicitação de Consulta de um Vendedor
 *
 * @pw_element integer $codigo Código do Vendedor
 * @pw_element string $codInt Código de Integração do Vendedor
 * @pw_complex vendConsultarRequest
 */
class VendConsultarRequest{
	/**
	 * Código do Vendedor
	 *
	 * @var integer
	 */
	public int $codigo;
	/**
	 * Código de Integração do Vendedor
	 *
	 * @var string
	 */
	public string $codInt;
}
