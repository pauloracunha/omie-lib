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
 * Informações referentes ao lote e validade do produto.
 *
 * @pw_element integer $nIdLote Id do Lote do produto.<BR><BR>Obrigatório quando o produto possui controle de lote e o método do consumo do lote está definido como 'Manual' nas configurações..
 * @pw_element decimal $nQtdLote Informe aqui a quantidade do lote para o produto.<BR><BR>É obrigatório quando o produto possui controle de lote e o método do consumo do lote está definido como 'Manual' nas configurações.
 * @pw_element string $cNumLote Número do lote do produto.<BR><BR>Deve ser informado apenas quando a tag [nIdLote] não for informada, com isso, será criado um novo lote a partir do número informado.
 * @pw_element string $cCodAgreg Código de agregação do lote do produto.<BR><BR>Deve ser informado apenas quando a tag [nIdLote] não for informada.
 * @pw_element string $dDataFab Data de fabricação do lote.<BR><BR>Deve ser informado apenas quando a tag [nIdLote] não for informada.<BR><BR>Como default é utilizado a data atual.
 * @pw_element string $dDataVal Data de validade do lote.<BR><BR>Deve ser informado apenas quando a tag [nIdLote] não for informada.
 * @pw_complex lote_validade
 */
class Lote_validade{
	/**
	 * Id do Lote do produto.<BR><BR>Obrigatório quando o produto possui controle de lote e o método do consumo do lote está definido como 'Manual' nas configurações..
	 *
	 * @var integer
	 */
	public int $nIdLote;
	/**
	 * Informe aqui a quantidade do lote para o produto.<BR><BR>É obrigatório quando o produto possui controle de lote e o método do consumo do lote está definido como 'Manual' nas configurações.
	 *
	 * @var decimal
	 */
	public float $nQtdLote;
	/**
	 * Número do lote do produto.<BR><BR>Deve ser informado apenas quando a tag [nIdLote] não for informada, com isso, será criado um novo lote a partir do número informado.
	 *
	 * @var string
	 */
	public string $cNumLote;
	/**
	 * Código de agregação do lote do produto.<BR><BR>Deve ser informado apenas quando a tag [nIdLote] não for informada.
	 *
	 * @var string
	 */
	public string $cCodAgreg;
	/**
	 * Data de fabricação do lote.<BR><BR>Deve ser informado apenas quando a tag [nIdLote] não for informada.<BR><BR>Como default é utilizado a data atual.
	 *
	 * @var string
	 */
	public string $dDataFab;
	/**
	 * Data de validade do lote.<BR><BR>Deve ser informado apenas quando a tag [nIdLote] não for informada.
	 *
	 * @var string
	 */
	public string $dDataVal;
}
