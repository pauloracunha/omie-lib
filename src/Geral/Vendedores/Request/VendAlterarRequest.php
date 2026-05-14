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
 * Solicitação de Alteração de um vendedor
 *
 * @pw_element integer $codigo Código do Vendedor
 * @pw_element string $codInt Código de Integração do Vendedor
 * @pw_element string $nome Nome do Vendedor
 * @pw_element string $inativo Indica se o vendedor está inativo [S/N]
 * @pw_element string $email E-mail do vendedor.
 * @pw_element string $fatura_pedido O vendedor pode faturar um pedido?<BR><BR>Informe "S" ou "N".<BR><BR>
 * @pw_element string $visualiza_pedido Visualiza apenas os pedidos em que é o vendedor.<BR><BR>Informar "S" ou "N".<BR>
 * @pw_element decimal $comissao Percentual de Comissão.
 * @pw_complex vendAlterarRequest
 */
class VendAlterarRequest{
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
	 * Nome do Vendedor
	 *
	 * @var string
	 */
	public string $nome;
	/**
	 * Indica se o vendedor está inativo [S/N]
	 *
	 * @var string
	 */
	public string $inativo;
	/**
	 * E-mail do vendedor.
	 *
	 * @var string
	 */
	public string $email;
	/**
	 * O vendedor pode faturar um pedido?<BR><BR>Informe "S" ou "N".<BR><BR>
	 *
	 * @var string
	 */
	public string $fatura_pedido;
	/**
	 * Visualiza apenas os pedidos em que é o vendedor.<BR><BR>Informar "S" ou "N".<BR>
	 *
	 * @var string
	 */
	public string $visualiza_pedido;
	/**
	 * Percentual de Comissão.
	 *
	 * @var decimal
	 */
	public float $comissao;
}
