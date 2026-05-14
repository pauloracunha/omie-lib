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
 * Itens do Contrato de Serviço
 *
 * @pw_element itemCabecalho $itemCabecalho Cabeçalho do Item
 * @pw_element itemDescrServ $itemDescrServ Descrição dos Serviços
 * @pw_element itemImpostos $itemImpostos Vencimento e Textos NFS-e
 * @pw_element itemLeiTranspImp $itemLeiTranspImp Lei de Transparência dos Impostos
 * @pw_element itemOutrasInf $itemOutrasInf Outras informações do item do contrato de serviços
 * @pw_element itemViaUnica $itemViaUnica Informações referente ao serviço da NF modelo 21 ou 22.
 * @pw_complex itensContrato
 */
class ItensContrato{
	/**
	 * Cabeçalho do Item
	 *
	 * @var ItemCabecalho
	 */
	public ItemCabecalho $itemCabecalho;
	/**
	 * Descrição dos Serviços
	 *
	 * @var ItemDescrServ
	 */
	public ItemDescrServ $itemDescrServ;
	/**
	 * Vencimento e Textos NFS-e
	 *
	 * @var ItemImpostos
	 */
	public ItemImpostos $itemImpostos;
	/**
	 * Lei de Transparência dos Impostos
	 *
	 * @var ItemLeiTranspImp
	 */
	public ItemLeiTranspImp $itemLeiTranspImp;
	/**
	 * Outras informações do item do contrato de serviços
	 *
	 * @var ItemOutrasInf
	 */
	public ItemOutrasInf $itemOutrasInf;
	/**
	 * Informações referente ao serviço da NF modelo 21 ou 22.
	 *
	 * @var ItemViaUnica
	 */
	public ItemViaUnica $itemViaUnica;
}
