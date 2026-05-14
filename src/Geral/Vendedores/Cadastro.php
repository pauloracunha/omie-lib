<?php

namespace OmieLib\Geral\Vendedores;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Vendedores\Request\VendAlterarRequest;
use OmieLib\Geral\Vendedores\Request\VendConsultarRequest;
use OmieLib\Geral\Vendedores\Request\VendExcluirRequest;
use OmieLib\Geral\Vendedores\Request\VendListarRequest;
use OmieLib\Geral\Vendedores\Request\VendUpsertRequest;
use OmieLib\Geral\Vendedores\Request\VendincluirRequest;
use OmieLib\Geral\Vendedores\Response\VendAlterarResponse;
use OmieLib\Geral\Vendedores\Response\VendConsultarResponse;
use OmieLib\Geral\Vendedores\Response\VendExcluirResponse;
use OmieLib\Geral\Vendedores\Response\VendIncluirResponse;
use OmieLib\Geral\Vendedores\Response\VendListarResponse;
use OmieLib\Geral\Vendedores\Response\VendUpsertResponse;

/**
 * Cadastro de Vendedores
 *
 * @pw_element integer $codigo Código do Vendedor
 * @pw_element string $codInt Código de Integração do Vendedor
 * @pw_element string $nome Nome do Vendedor
 * @pw_element string $inativo Indica se o vendedor está inativo [S/N]
 * @pw_element string $email E-mail do vendedor.
 * @pw_element string $fatura_pedido O vendedor pode faturar um pedido?<BR><BR>Informe "S" ou "N".<BR><BR>
 * @pw_element string $visualiza_pedido Visualiza apenas os pedidos em que é o vendedor.<BR><BR>Informar "S" ou "N".<BR>
 * @pw_element decimal $comissao Percentual de Comissão.
 * @pw_complex cadastro
 */
class Cadastro{
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
