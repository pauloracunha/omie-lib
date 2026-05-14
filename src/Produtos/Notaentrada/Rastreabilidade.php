<?php

namespace OmieLib\Produtos\Notaentrada;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Notaentrada\Request\NeAlterarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeConsultarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeExcluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeIncluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeListarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeStatusRequest;
use OmieLib\Produtos\Notaentrada\Response\NeAlterarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeConsultarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeExcluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeIncluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeListarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeStatusResponse;

/**
 * Rastreabilidade do produto
 *
 * @pw_element string $numeroLote Número do lote do produto.<BR><BR>Deve ser informado apenas quando a tag [nIdLote] não for informada, com isso, será criado um novo lote a partir do número informado.
 * @pw_element decimal $qtdeProdutoLote Quantidade de Produto
 * @pw_element string $dataFabricacaoLote Data de fabricação do lote.<BR><BR>Deve ser informado apenas quando a tag [nIdLote] não for informada.<BR><BR>Como default é utilizado a data atual.
 * @pw_element string $dataValidadeLote Data de validade do lote.<BR><BR>Deve ser informado apenas quando a tag [nIdLote] não for informada.
 * @pw_element string $codigoAgregacaoLote Código de agregação do lote do produto.<BR><BR>Deve ser informado apenas quando a tag [nIdLote] não for informada.
 * @pw_complex rastreabilidade
 */
class Rastreabilidade{
	/**
	 * Número do lote do produto.<BR><BR>Deve ser informado apenas quando a tag [nIdLote] não for informada, com isso, será criado um novo lote a partir do número informado.
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
	 * Data de fabricação do lote.<BR><BR>Deve ser informado apenas quando a tag [nIdLote] não for informada.<BR><BR>Como default é utilizado a data atual.
	 *
	 * @var string
	 */
	public string $dataFabricacaoLote;
	/**
	 * Data de validade do lote.<BR><BR>Deve ser informado apenas quando a tag [nIdLote] não for informada.
	 *
	 * @var string
	 */
	public string $dataValidadeLote;
	/**
	 * Código de agregação do lote do produto.<BR><BR>Deve ser informado apenas quando a tag [nIdLote] não for informada.
	 *
	 * @var string
	 */
	public string $codigoAgregacaoLote;
}
