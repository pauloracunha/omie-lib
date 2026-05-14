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
 * Itens da ordem de produção
 *
 * @pw_element integer $nIdProdutoMalha ID do produto da malha
 * @pw_element string $cUtilizarDoEstoque Utilizar os itens que já estão prontos no estoque deste produto<BR><BR>Valores possíveis:<BR><BR>S = Sim <BR>N = Não
 * @pw_element lote_validadeArray $lote_validade Informação do lote.
 * @pw_complex itens
 */
class Itens{
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
	 * Informação do lote.
	 *
	 * @var Lote_validade[]
	 */
	public array $lote_validade;
}
