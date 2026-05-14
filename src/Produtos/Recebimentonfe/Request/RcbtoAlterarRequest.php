<?php

namespace OmieLib\Produtos\Recebimentonfe\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Recebimentonfe\Cabec;
use OmieLib\Produtos\Recebimentonfe\Categorias;
use OmieLib\Produtos\Recebimentonfe\CteCfopEntrada;
use OmieLib\Produtos\Recebimentonfe\Departamentos;
use OmieLib\Produtos\Recebimentonfe\Ide;
use OmieLib\Produtos\Recebimentonfe\InfoAdicionais;
use OmieLib\Produtos\Recebimentonfe\InfoCadastro;
use OmieLib\Produtos\Recebimentonfe\ItensAjustes;
use OmieLib\Produtos\Recebimentonfe\ItensAtualPreco;
use OmieLib\Produtos\Recebimentonfe\ItensCOFINS;
use OmieLib\Produtos\Recebimentonfe\ItensCabec;
use OmieLib\Produtos\Recebimentonfe\ItensCustoEstoque;
use OmieLib\Produtos\Recebimentonfe\ItensICMS;
use OmieLib\Produtos\Recebimentonfe\ItensICMSSN;
use OmieLib\Produtos\Recebimentonfe\ItensICMSST;
use OmieLib\Produtos\Recebimentonfe\ItensIPI;
use OmieLib\Produtos\Recebimentonfe\ItensIde;
use OmieLib\Produtos\Recebimentonfe\ItensInfoAdic;
use OmieLib\Produtos\Recebimentonfe\ItensInfoAdicEditar;
use OmieLib\Produtos\Recebimentonfe\ItensPIS;
use OmieLib\Produtos\Recebimentonfe\ItensRecebimento;
use OmieLib\Produtos\Recebimentonfe\ItensRecebimentoEditar;
use OmieLib\Produtos\Recebimentonfe\ItensSitTribEnt;
use OmieLib\Produtos\Recebimentonfe\ItensSitTribICMSSTEnt;
use OmieLib\Produtos\Recebimentonfe\Lote_validade;
use OmieLib\Produtos\Recebimentonfe\Observacoes;
use OmieLib\Produtos\Recebimentonfe\Parcelas;
use OmieLib\Produtos\Recebimentonfe\ParcelasEditar;
use OmieLib\Produtos\Recebimentonfe\ParcelasLista;
use OmieLib\Produtos\Recebimentonfe\ParcelasListaEditar;
use OmieLib\Produtos\Recebimentonfe\RecebimentoNFeJsonClient;
use OmieLib\Produtos\Recebimentonfe\Recebimentos;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoAlterarEtapaResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoAlterarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConcAlterarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConcluirResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConsultarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoExcluirResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoListarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoReverterResponse;
use OmieLib\Produtos\Recebimentonfe\Totais;
use OmieLib\Produtos\Recebimentonfe\Transporte;

/**
 * Solicitação da alteração do recebimento da NFe
 *
 * @pw_element ide $ide Identificação da NFe de recebimento
 * @pw_element parcelasEditar $parcelasEditar Parcelas da NFe de recebimento
 * @pw_element departamentosArray $departamentos Departamentos da NFe de recebimento
 * @pw_element infoAdicionais $infoAdicionais Informações adicionais da NFe de recebimento
 * @pw_element itensRecebimentoEditarArray $itensRecebimentoEditar Itens da NFe de recebimento
 * @pw_element observacoes $observacoes Dados da Aba "Observações" do Recebimento de NFe.<BR><BR>Preenchimento opcional.
 * @pw_element cteCfopEntrada $cteCfopEntrada Dados da Aba "CFOP de Entrada e Mais Detalhes" do Recebimento de CT-e.<BR><BR>Preenchimento válido para recebimentos de CT-e.<BR>Preenchimento opcional.
 * @pw_complex rcbtoAlterarRequest
 */
class RcbtoAlterarRequest{
	/**
	 * Identificação da NFe de recebimento
	 *
	 * @var Ide
	 */
	public Ide $ide;
	/**
	 * Parcelas da NFe de recebimento
	 *
	 * @var ParcelasEditar
	 */
	public ParcelasEditar $parcelasEditar;
	/**
	 * Departamentos da NFe de recebimento
	 *
	 * @var Departamentos[]
	 */
	public array $departamentos;
	/**
	 * Informações adicionais da NFe de recebimento
	 *
	 * @var InfoAdicionais
	 */
	public InfoAdicionais $infoAdicionais;
	/**
	 * Itens da NFe de recebimento
	 *
	 * @var ItensRecebimentoEditar[]
	 */
	public array $itensRecebimentoEditar;
	/**
	 * Dados da Aba "Observações" do Recebimento de NFe.<BR><BR>Preenchimento opcional.
	 *
	 * @var Observacoes
	 */
	public Observacoes $observacoes;
	/**
	 * Dados da Aba "CFOP de Entrada e Mais Detalhes" do Recebimento de CT-e.<BR><BR>Preenchimento válido para recebimentos de CT-e.<BR>Preenchimento opcional.
	 *
	 * @var CteCfopEntrada
	 */
	public CteCfopEntrada $cteCfopEntrada;
}
