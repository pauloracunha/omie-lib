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
 * Detalhes dos itens da Ordem de Produção
 *
 * @pw_element integer $nIdProdutoMalha ID do produto da malha
 * @pw_element string $cUtilizarDoEstoque Utilizar os itens que já estão prontos no estoque deste produto<BR><BR>Valores possíveis:<BR><BR>S = Sim <BR>N = Não
 * @pw_element decimal $nQtde Quantidade necessária do item.
 * @pw_element integer $codigo_local_estoque Código do local do estoque.
 * @pw_element string $cObs Observação do Item.
 * @pw_element info $info Informações complementares do Item.
 * @pw_complex itensDetalhes
 */
class ItensDetalhes{
	/**
	 * ID do produto da malha
	 *
	 * @var integer
	 */
	public int $nIdProdutoMalha;
	/**
	 * Utilizar os itens que já estão prontos no estoque deste produto<BR><BR>Valores possíveis:<BR><BR>S = Sim <BR>N = Não
	 *
	 * @var string
	 */
	public string $cUtilizarDoEstoque;
	/**
	 * Quantidade necessária do item.
	 *
	 * @var decimal
	 */
	public float $nQtde;
	/**
	 * Código do local do estoque.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
	/**
	 * Observação do Item.
	 *
	 * @var string
	 */
	public string $cObs;
	/**
	 * Informações complementares do Item.
	 *
	 * @var Info
	 */
	public Info $info;
}
