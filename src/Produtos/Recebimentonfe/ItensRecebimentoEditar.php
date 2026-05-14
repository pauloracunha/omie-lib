<?php

namespace OmieLib\Produtos\Recebimentonfe;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoAlterarEtapaRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoAlterarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConcAlterarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConcluirRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConsultarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoExcluirRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoListarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoReverterRequest;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoAlterarEtapaResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoAlterarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConcAlterarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConcluirResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConsultarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoExcluirResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoListarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoReverterResponse;

/**
 * Itens da NFe de recebimento
 *
 * @pw_element itensIde $itensIde Identificação do item
 * @pw_element itensAjustes $itensAjustes Ajustes do item da NFe de recebimento
 * @pw_element itensInfoAdicEditar $itensInfoAdicEditar Informações adicionais do item da NFe de recebimento
 * @pw_element itensAtualPreco $itensAtualPreco Informações de atualização do preço de venda
 * @pw_element itensCustoEstoque $itensCustoEstoque Informações do custo
 * @pw_element lote_validadeArray $lote_validade Informações referentes ao lote e validade do produto.<BR><BR>A tag só deve ser informada se o produto possuir controle de lote e se a intenção é informar os lotes "manualmente" por API.
 * @pw_complex itensRecebimentoEditar
 */
class ItensRecebimentoEditar{
	/**
	 * Identificação do item
	 *
	 * @var ItensIde
	 */
	public ItensIde $itensIde;
	/**
	 * Ajustes do item da NFe de recebimento
	 *
	 * @var ItensAjustes
	 */
	public ItensAjustes $itensAjustes;
	/**
	 * Informações adicionais do item da NFe de recebimento
	 *
	 * @var ItensInfoAdicEditar
	 */
	public ItensInfoAdicEditar $itensInfoAdicEditar;
	/**
	 * Informações de atualização do preço de venda
	 *
	 * @var ItensAtualPreco
	 */
	public ItensAtualPreco $itensAtualPreco;
	/**
	 * Informações do custo
	 *
	 * @var ItensCustoEstoque
	 */
	public ItensCustoEstoque $itensCustoEstoque;
	/**
	 * Informações referentes ao lote e validade do produto.<BR><BR>A tag só deve ser informada se o produto possuir controle de lote e se a intenção é informar os lotes "manualmente" por API.
	 *
	 * @var Lote_validade[]
	 */
	public array $lote_validade;
}
