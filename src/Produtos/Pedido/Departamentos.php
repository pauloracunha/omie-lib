<?php

namespace OmieLib\Produtos\Pedido;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedido\Request\PvpAlterarPedFatRequest;
use OmieLib\Produtos\Pedido\Request\PvpConsultarRequest;
use OmieLib\Produtos\Pedido\Request\PvpDevolverRequest;
use OmieLib\Produtos\Pedido\Request\PvpExcluirRequest;
use OmieLib\Produtos\Pedido\Request\PvpListarRequest;
use OmieLib\Produtos\Pedido\Request\PvpSimularImpRequest;
use OmieLib\Produtos\Pedido\Request\PvpStatusRequest;
use OmieLib\Produtos\Pedido\Request\PvpTrocarEtapaRequest;
use OmieLib\Produtos\Pedido\Response\PvpAlterarPedFatResponse;
use OmieLib\Produtos\Pedido\Response\PvpConsultarResponse;
use OmieLib\Produtos\Pedido\Response\PvpDevolverResponse;
use OmieLib\Produtos\Pedido\Response\PvpExcluirResponse;
use OmieLib\Produtos\Pedido\Response\PvpListarResponse;
use OmieLib\Produtos\Pedido\Response\PvpSimularImpResponse;
use OmieLib\Produtos\Pedido\Response\PvpStatusResponse;
use OmieLib\Produtos\Pedido\Response\PvpTrocarEtapaResponse;

/**
 * Dados da Aba "Departamentos" do Pedido de Venda.
 *
 * @pw_element string $cCodDepto ID do Departamento.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Departamentos" do Pedido de Venda.<BR><BR>Utilize a tag "codigo" do método "ListarDepatartamentos" da API<BR>http://app.omie.com.br/api/v1/geral/departamentos/<BR>para obter essa informação.
 * @pw_element decimal $nPerc Percentual de Rateio.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Departamentos" do Pedido de Venda.<BR>
 * @pw_element decimal $nValor Valor do Rateio.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Departamentos" do Pedido de Venda.<BR>
 * @pw_element string $nValorFixo Indica que o valor foi fixado na distribuição do rateio.<BR>Preenchimento Obrigatório.<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Departamentos" do Pedido de Venda.<BR>
 * @pw_complex departamentos
 */
class Departamentos{
	/**
	 * ID do Departamento.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Departamentos" do Pedido de Venda.<BR><BR>Utilize a tag "codigo" do método "ListarDepatartamentos" da API<BR>http://app.omie.com.br/api/v1/geral/departamentos/<BR>para obter essa informação.
	 *
	 * @var string
	 */
	public string $cCodDepto;
	/**
	 * Percentual de Rateio.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Departamentos" do Pedido de Venda.<BR>
	 *
	 * @var decimal
	 */
	public float $nPerc;
	/**
	 * Valor do Rateio.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Departamentos" do Pedido de Venda.<BR>
	 *
	 * @var decimal
	 */
	public float $nValor;
	/**
	 * Indica que o valor foi fixado na distribuição do rateio.<BR>Preenchimento Obrigatório.<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Departamentos" do Pedido de Venda.<BR>
	 *
	 * @var string
	 */
	public string $nValorFixo;
}
