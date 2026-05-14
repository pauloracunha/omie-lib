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
 * @pw_element itensCabec $itensCabec Cabeçalho do item da NFe de recebimento
 * @pw_element itensAjustes $itensAjustes Ajustes do item da NFe de recebimento
 * @pw_element itensInfoAdic $itensInfoAdic Informações adicionais do item da NFe de recebimento
 * @pw_element itensICMS $itensICMS Informações do ICMS
 * @pw_element itensICMSST $itensICMSST Informações do ICMS Substituição Tributária
 * @pw_element itensICMSSN $itensICMSSN Informações do ICMS Simples Nacional
 * @pw_element itensIPI $itensIPI Informações do IPI
 * @pw_element itensCOFINS $itensCOFINS Informações do COFINS
 * @pw_element itensPIS $itensPIS Informações do PIS
 * @pw_element itensAtualPreco $itensAtualPreco Informações de atualização do preço de venda
 * @pw_element itensCustoEstoque $itensCustoEstoque Informações do custo
 * @pw_complex itensRecebimento
 */
class ItensRecebimento{
	/**
	 * Cabeçalho do item da NFe de recebimento
	 *
	 * @var ItensCabec
	 */
	public ItensCabec $itensCabec;
	/**
	 * Ajustes do item da NFe de recebimento
	 *
	 * @var ItensAjustes
	 */
	public ItensAjustes $itensAjustes;
	/**
	 * Informações adicionais do item da NFe de recebimento
	 *
	 * @var ItensInfoAdic
	 */
	public ItensInfoAdic $itensInfoAdic;
	/**
	 * Informações do ICMS
	 *
	 * @var ItensICMS
	 */
	public ItensICMS $itensICMS;
	/**
	 * Informações do ICMS Substituição Tributária
	 *
	 * @var ItensICMSST
	 */
	public ItensICMSST $itensICMSST;
	/**
	 * Informações do ICMS Simples Nacional
	 *
	 * @var ItensICMSSN
	 */
	public ItensICMSSN $itensICMSSN;
	/**
	 * Informações do IPI
	 *
	 * @var ItensIPI
	 */
	public ItensIPI $itensIPI;
	/**
	 * Informações do COFINS
	 *
	 * @var ItensCOFINS
	 */
	public ItensCOFINS $itensCOFINS;
	/**
	 * Informações do PIS
	 *
	 * @var ItensPIS
	 */
	public ItensPIS $itensPIS;
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
}
