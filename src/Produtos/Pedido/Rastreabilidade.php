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
 * Dados da rastreabilidade do produto.
 *
 * @pw_element string $numeroLote Número do Lote
 * @pw_element decimal $qtdeProdutoLote Quantidade de Produto
 * @pw_element string $dataFabricacaoLote Data de Fabricação/Produção
 * @pw_element string $dataValidadeLote Data de Validade
 * @pw_element string $codigoAgregacaoLote Código de Agregação
 * @pw_complex rastreabilidade
 */
class Rastreabilidade{
	/**
	 * Número do Lote
	 *
	 * @var string
	 */
	public string $numeroLote;
	/**
	 * Quantidade de Produto
	 *
	 * @var decimal
	 */
	public float $qtdeProdutoLote;
	/**
	 * Data de Fabricação/Produção
	 *
	 * @var string
	 */
	public string $dataFabricacaoLote;
	/**
	 * Data de Validade
	 *
	 * @var string
	 */
	public string $dataValidadeLote;
	/**
	 * Código de Agregação
	 *
	 * @var string
	 */
	public string $codigoAgregacaoLote;
}
