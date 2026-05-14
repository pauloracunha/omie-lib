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
 * Informações da NFe de recebimento
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
 * @pw_complex recebimentos
 */
class Recebimentos{
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
}
