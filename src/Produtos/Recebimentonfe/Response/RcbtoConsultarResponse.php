<?php

namespace OmieLib\Produtos\Recebimentonfe\Response;

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
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoAlterarEtapaRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoAlterarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConcAlterarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConcluirRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConsultarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoExcluirRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoListarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoReverterRequest;
use OmieLib\Produtos\Recebimentonfe\Totais;
use OmieLib\Produtos\Recebimentonfe\Transporte;

/**
 * Resposta de consulta de recebimento de NFe
 *
 * @pw_element cabec $cabec Cabeçalho da NFe de recebimento
 * @pw_element itensRecebimentoArray $itensRecebimento Itens da NFe de recebimento
 * @pw_element infoAdicionais $infoAdicionais Informações adicionais da NFe de recebimento
 * @pw_element transporte $transporte Transporte da NFe de recebimento
 * @pw_element totais $totais Totais da NFe de recebimento
 * @pw_element parcelas $parcelas Parcelas da NFe de recebimento
 * @pw_element departamentosArray $departamentos Departamentos da NFe de recebimento
 * @pw_element categoriasArray $categorias Categorias da NFe de recebimento
 * @pw_element infoCadastro $infoCadastro Informações do cadastro da NFe de recebimento
 * @pw_element observacoes $observacoes Dados da Aba "Observações" do Recebimento de NFe.<BR><BR>Preenchimento opcional.
 * @pw_element cteCfopEntrada $cteCfopEntrada Dados da Aba "CFOP de Entrada e Mais Detalhes" do Recebimento de CT-e.<BR><BR>Preenchimento válido para recebimentos de CT-e.<BR>Preenchimento opcional.
 * @pw_complex rcbtoConsultarResponse
 */
class RcbtoConsultarResponse{
	/**
	 * Cabeçalho da NFe de recebimento
	 *
	 * @var Cabec
	 */
	public Cabec $cabec;
	/**
	 * Itens da NFe de recebimento
	 *
	 * @var ItensRecebimento[]
	 */
	public array $itensRecebimento;
	/**
	 * Informações adicionais da NFe de recebimento
	 *
	 * @var InfoAdicionais
	 */
	public InfoAdicionais $infoAdicionais;
	/**
	 * Transporte da NFe de recebimento
	 *
	 * @var Transporte
	 */
	public Transporte $transporte;
	/**
	 * Totais da NFe de recebimento
	 *
	 * @var Totais
	 */
	public Totais $totais;
	/**
	 * Parcelas da NFe de recebimento
	 *
	 * @var Parcelas
	 */
	public Parcelas $parcelas;
	/**
	 * Departamentos da NFe de recebimento
	 *
	 * @var Departamentos[]
	 */
	public array $departamentos;
	/**
	 * Categorias da NFe de recebimento
	 *
	 * @var Categorias[]
	 */
	public array $categorias;
	/**
	 * Informações do cadastro da NFe de recebimento
	 *
	 * @var InfoCadastro
	 */
	public InfoCadastro $infoCadastro;
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
