<?php

namespace OmieLib\Servicos\Contrato;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contrato\Request\CsConsultarRequest;
use OmieLib\Servicos\Contrato\Request\CsExcluirItemRequest;
use OmieLib\Servicos\Contrato\Request\CsListarRequest;
use OmieLib\Servicos\Contrato\Response\CsConsultarResponse;
use OmieLib\Servicos\Contrato\Response\CsExcluirItemResponse;
use OmieLib\Servicos\Contrato\Response\CsListarResponse;

/**
 * Produtos utilizados no serviço.
 *
 * @pw_element integer $nIdItemPU (Código interno utilizado apenas na API). <BR>Não informar na inclusão.<BR><BR>Esse código não aparece na tela do Omie.
 * @pw_element string $cAcaoItemPU Pode ser:<BR><BR>"A" - Alterar o item.<BR>"E" - Excluir o item.<BR>"I" - Incluir o item na alteração.
 * @pw_element integer $nCodProdutoPU Código interno do produto.<BR>(utilizado apenas na API).<BR>Esse código não aparece na tela do Omie.
 * @pw_element decimal $nQtdePU Quantidade.<BR>Preenchimento obrigatório
 * @pw_element integer $codigo_local_estoque Código do Local do Estoque.<BR>Preenchimento opcional.
 * @pw_element lote_validadeArray $lote_validade Informações referentes ao lote e validade do produto.<BR><BR>A tag só deve ser informada se o produto possuir controle de lote e se a intenção é informar os lotes "manualmente" por API.
 * @pw_complex produtoUtilizado
 */
class ProdutoUtilizado{
	/**
	 * (Código interno utilizado apenas na API). <BR>Não informar na inclusão.<BR><BR>Esse código não aparece na tela do Omie.
	 *
	 * @var integer
	 */
	public int $nIdItemPU;
	/**
	 * Pode ser:<BR><BR>"A" - Alterar o item.<BR>"E" - Excluir o item.<BR>"I" - Incluir o item na alteração.
	 *
	 * @var string
	 */
	public string $cAcaoItemPU;
	/**
	 * Código interno do produto.<BR>(utilizado apenas na API).<BR>Esse código não aparece na tela do Omie.
	 *
	 * @var integer
	 */
	public int $nCodProdutoPU;
	/**
	 * Quantidade.<BR>Preenchimento obrigatório
	 *
	 * @var decimal
	 */
	public float $nQtdePU;
	/**
	 * Código do Local do Estoque.<BR>Preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
	/**
	 * Informações referentes ao lote e validade do produto.<BR><BR>A tag só deve ser informada se o produto possuir controle de lote e se a intenção é informar os lotes "manualmente" por API.
	 *
	 * @var Lote_validade[]
	 */
	public array $lote_validade;
}
