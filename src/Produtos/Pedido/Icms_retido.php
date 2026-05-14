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
 * Dados do ICMS Retido do Serviço de Transporte.
 *
 * @pw_element decimal $vServicoTr Valor de Serviço de Transporte.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
 * @pw_element decimal $vBCRetencaoTr Base de Cálculo da Retenção.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
 * @pw_element decimal $vAliquotaRetencaoTr Percentual de Alíquota de Retenção.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
 * @pw_element decimal $vIcmsRetidoTr Valor de ICMS Retido.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
 * @pw_element string $cCfopTr CFOP.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.<BR><BR>Utilize a tag "nCodigo" do método "ListarCFOP" da API<BR>http://app.omie.com.br/api/v1/produtos/cfop/<BR>para obter essa informação.
 * @pw_element string $cCidadeTr Cidade de Ocorrência do Fato Gerador do ICMS.<BR><BR>Utilize o formato: CIDADE (UF), como no exemplos:<BR><BR>"SAO PAULO (SP)"<BR>"RIO DE JANEIRO (RJ)"<BR>"FLORIANOPOLIS (SC)"<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.<BR><BR>Utilize a tag "cCod" do método "PesquisarCidades" da API<BR>http://app.omie.com.br/api/v1/geral/cidades/<BR>para obter essa informação.<BR>
 * @pw_complex icms_retido
 */
class Icms_retido{
	/**
	 * Valor de Serviço de Transporte.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
	 *
	 * @var decimal
	 */
	public float $vServicoTr;
	/**
	 * Base de Cálculo da Retenção.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
	 *
	 * @var decimal
	 */
	public float $vBCRetencaoTr;
	/**
	 * Percentual de Alíquota de Retenção.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
	 *
	 * @var decimal
	 */
	public float $vAliquotaRetencaoTr;
	/**
	 * Valor de ICMS Retido.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
	 *
	 * @var decimal
	 */
	public float $vIcmsRetidoTr;
	/**
	 * CFOP.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.<BR><BR>Utilize a tag "nCodigo" do método "ListarCFOP" da API<BR>http://app.omie.com.br/api/v1/produtos/cfop/<BR>para obter essa informação.
	 *
	 * @var string
	 */
	public string $cCfopTr;
	/**
	 * Cidade de Ocorrência do Fato Gerador do ICMS.<BR><BR>Utilize o formato: CIDADE (UF), como no exemplos:<BR><BR>"SAO PAULO (SP)"<BR>"RIO DE JANEIRO (RJ)"<BR>"FLORIANOPOLIS (SC)"<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.<BR><BR>Utilize a tag "cCod" do método "PesquisarCidades" da API<BR>http://app.omie.com.br/api/v1/geral/cidades/<BR>para obter essa informação.<BR>
	 *
	 * @var string
	 */
	public string $cCidadeTr;
}
