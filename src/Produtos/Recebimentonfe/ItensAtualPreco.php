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
 * Informações de atualização do preço de venda
 *
 * @pw_element string $cAtualizarAtuPre Quero atualizar automaticamente o preço de venda deste produto no recebimento da compra<BR><BR>Informar "S" ou "N".
 * @pw_element decimal $nPercAtuPre Percentual utilizado para a atualização
 * @pw_element string $cAtualizarMaiorAtuPre Atualizar apenas se o novo preço for maior que o preço de venda atual do produto.<BR><BR>Informar "S" ou "N".
 * @pw_complex itensAtualPreco
 */
class ItensAtualPreco{
	/**
	 * Quero atualizar automaticamente o preço de venda deste produto no recebimento da compra<BR><BR>Informar "S" ou "N".
	 *
	 * @var string
	 */
	public string $cAtualizarAtuPre;
	/**
	 * Percentual utilizado para a atualização
	 *
	 * @var decimal
	 */
	public float $nPercAtuPre;
	/**
	 * Atualizar apenas se o novo preço for maior que o preço de venda atual do produto.<BR><BR>Informar "S" ou "N".
	 *
	 * @var string
	 */
	public string $cAtualizarMaiorAtuPre;
}
