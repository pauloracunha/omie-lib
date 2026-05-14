<?php

namespace OmieLib\Produtos\Produtoslote;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Produtoslote\Request\LoteProdutoConsultarRequest;
use OmieLib\Produtos\Produtoslote\Request\LoteProdutoListarRequest;
use OmieLib\Produtos\Produtoslote\Response\LoteProdutoConsultarResponse;
use OmieLib\Produtos\Produtoslote\Response\LoteProdutoListarResponse;

/**
 * Informações dos lotes do produto.
 *
 * @pw_element integer $nIdLote Código interno de identificação do lote.<BR>É o ID do lote e será utilizado apenas nas APIs como chave principal para localizar um lote.
 * @pw_element integer $nIdLocal Código interno de identificação do local(Estoque).
 * @pw_element string $cNumLote Numero do lote.
 * @pw_element string $dDataFabricacao Data fabricação do lote.
 * @pw_element string $dDataValidade Data validade do lote.
 * @pw_element decimal $nQuantDisponivel Quantidade disponível do lote.
 * @pw_element decimal $nQuantEntrada Quantidade entrada do lote.
 * @pw_element decimal $nQuantSaida Quantidade de saídas do lote.
 * @pw_element decimal $nSaldoLote Quantidade da entrada do produto menos a saída do produto.
 * @pw_element decimal $nQuantReservada Quantidade reservada do lote.
 * @pw_element string $cCodAgregado Código agregado do lote.
 * @pw_element string $cObs Observação.
 * @pw_complex lotes
 */
class Lotes{
	/**
	 * Código interno de identificação do lote.<BR>É o ID do lote e será utilizado apenas nas APIs como chave principal para localizar um lote.
	 *
	 * @var integer
	 */
	public int $nIdLote;
	/**
	 * Código interno de identificação do local(Estoque).
	 *
	 * @var integer
	 */
	public int $nIdLocal;
	/**
	 * Numero do lote.
	 *
	 * @var string
	 */
	public string $cNumLote;
	/**
	 * Data fabricação do lote.
	 *
	 * @var string
	 */
	public string $dDataFabricacao;
	/**
	 * Data validade do lote.
	 *
	 * @var string
	 */
	public string $dDataValidade;
	/**
	 * Quantidade disponível do lote.
	 *
	 * @var decimal
	 */
	public float $nQuantDisponivel;
	/**
	 * Quantidade entrada do lote.
	 *
	 * @var decimal
	 */
	public float $nQuantEntrada;
	/**
	 * Quantidade de saídas do lote.
	 *
	 * @var decimal
	 */
	public float $nQuantSaida;
	/**
	 * Quantidade da entrada do produto menos a saída do produto.
	 *
	 * @var decimal
	 */
	public float $nSaldoLote;
	/**
	 * Quantidade reservada do lote.
	 *
	 * @var decimal
	 */
	public float $nQuantReservada;
	/**
	 * Código agregado do lote.
	 *
	 * @var string
	 */
	public string $cCodAgregado;
	/**
	 * Observação.
	 *
	 * @var string
	 */
	public string $cObs;
}
