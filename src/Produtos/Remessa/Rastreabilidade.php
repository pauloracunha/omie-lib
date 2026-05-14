<?php

namespace OmieLib\Produtos\Remessa;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Remessa\Request\RemessaDevolverRequest;
use OmieLib\Produtos\Remessa\Request\RemessaListarRequest;
use OmieLib\Produtos\Remessa\Request\RemessaStatusRequest;
use OmieLib\Produtos\Remessa\Response\RemessaDevolverResponse;
use OmieLib\Produtos\Remessa\Response\RemessaListarResponse;
use OmieLib\Produtos\Remessa\Response\RemessaStatusResponse;

/**
 * Rastreabilidade do produto
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
