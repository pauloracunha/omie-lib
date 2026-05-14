<?php

namespace OmieLib\Geral\Vendedores\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Vendedores\Cadastro;
use OmieLib\Geral\Vendedores\Request\VendAlterarRequest;
use OmieLib\Geral\Vendedores\Request\VendConsultarRequest;
use OmieLib\Geral\Vendedores\Request\VendExcluirRequest;
use OmieLib\Geral\Vendedores\Request\VendListarRequest;
use OmieLib\Geral\Vendedores\Request\VendUpsertRequest;
use OmieLib\Geral\Vendedores\Request\VendincluirRequest;
use OmieLib\Geral\Vendedores\VendedoresCadastroJsonClient;

/**
 * Resposta da Solicitação de alteração de um vendedor.
 *
 * @pw_element integer $codigo Código do Vendedor
 * @pw_element string $codInt Código de Integração do Vendedor
 * @pw_element string $status Status do processamento
 * @pw_element string $descricao Descrição do status
 * @pw_complex vendAlterarResponse
 */
class VendAlterarResponse{
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
	/**
	 * Status do processamento
	 *
	 * @var string
	 */
	public string $status;
	/**
	 * Descrição do status
	 *
	 * @var string
	 */
	public string $descricao;
}
