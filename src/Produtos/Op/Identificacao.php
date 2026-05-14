<?php

namespace OmieLib\Produtos\Op;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Op\Request\CopAlterarRequest;
use OmieLib\Produtos\Op\Request\CopConcluirRequest;
use OmieLib\Produtos\Op\Request\CopConsultarRequest;
use OmieLib\Produtos\Op\Request\CopExcluirRequest;
use OmieLib\Produtos\Op\Request\CopIncluirRequest;
use OmieLib\Produtos\Op\Request\CopListarRequest;
use OmieLib\Produtos\Op\Request\CopReverterRequest;
use OmieLib\Produtos\Op\Request\CopUpsertRequest;
use OmieLib\Produtos\Op\Response\CopAlterarResponse;
use OmieLib\Produtos\Op\Response\CopConcluirResponse;
use OmieLib\Produtos\Op\Response\CopConsultarResponse;
use OmieLib\Produtos\Op\Response\CopExcluirResponse;
use OmieLib\Produtos\Op\Response\CopIncluirResponse;
use OmieLib\Produtos\Op\Response\CopListarResponse;
use OmieLib\Produtos\Op\Response\CopReverterResponse;
use OmieLib\Produtos\Op\Response\CopUpsertResponse;

/**
 * Cabeçalho da ordem de produção.
 *
 * @pw_element integer $nCodOP Código da ordem de produção.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodIntOP Código de integração da ordem de produção.<BR>(Utilizado em títulos criados via API, não é visualizado na tela)
 * @pw_element string $cNumOP Número da ordem de produção.
 * @pw_element integer $nCodProduto Código do produto.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodIntProd Código do Integração do Produto<BR>(Utilizado para para integração via API, não aparece na tela)
 * @pw_element string $dDtPrevisao Data de previsão da conclusão da produção.
 * @pw_element decimal $nQtde Quantidade a produzir.
 * @pw_element integer $codigo_local_estoque Código do Local do Estoque.<BR><BR>Preenchimento opcional.<BR><BR>Caso não informado assumirá o Local do Estoque padrão.
 * @pw_element lote_validade_op $lote_validade_op Informação do lote.
 * @pw_complex identificacao
 */
class Identificacao{
	/**
	 * Código da ordem de produção.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodOP;
	/**
	 * Código de integração da ordem de produção.<BR>(Utilizado em títulos criados via API, não é visualizado na tela)
	 *
	 * @var string
	 */
	public string $cCodIntOP;
	/**
	 * Número da ordem de produção.
	 *
	 * @var string
	 */
	public string $cNumOP;
	/**
	 * Código do produto.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodProduto;
	/**
	 * Código do Integração do Produto<BR>(Utilizado para para integração via API, não aparece na tela)
	 *
	 * @var string
	 */
	public string $cCodIntProd;
	/**
	 * Data de previsão da conclusão da produção.
	 *
	 * @var string
	 */
	public string $dDtPrevisao;
	/**
	 * Quantidade a produzir.
	 *
	 * @var decimal
	 */
	public float $nQtde;
	/**
	 * Código do Local do Estoque.<BR><BR>Preenchimento opcional.<BR><BR>Caso não informado assumirá o Local do Estoque padrão.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
	/**
	 * Informação do lote.
	 *
	 * @var Lote_validade_op
	 */
	public Lote_validade_op $lote_validade_op;
}
