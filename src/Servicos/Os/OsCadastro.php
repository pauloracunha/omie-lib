<?php

namespace OmieLib\Servicos\Os;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Os\Request\OsListarRequest;
use OmieLib\Servicos\Os\Request\OsObterRequest;
use OmieLib\Servicos\Os\Request\OsStatusRequest;
use OmieLib\Servicos\Os\Request\OsTrocarEtapaRequest;
use OmieLib\Servicos\Os\Response\OsListarResponse;
use OmieLib\Servicos\Os\Response\OsObterResponse;
use OmieLib\Servicos\Os\Response\OsStatusResponse;
use OmieLib\Servicos\Os\Response\OsTrocarEtapaResponse;

/**
 * Cadastro de Ordem de Serviços
 *
 * @pw_element Cabecalho $Cabecalho Cabeçalho da Ordem de Serviço
 * @pw_element InformacoesAdicionais $InformacoesAdicionais Informações adicionais da OS&nbsp;
 * @pw_element Email $Email Informações do E-Mail
 * @pw_element DepartamentosArray $Departamentos Lista de distribuição por departamentos
 * @pw_element ServicosPrestadosArray $ServicosPrestados Lista de Serviços Prestados
 * @pw_element ParcelasArray $Parcelas Permite que o parcelamento seja realizado de forma manual.
 * @pw_element Observacoes $Observacoes Observações da Ordem de Serviço
 * @pw_element InfoCadastro $InfoCadastro Informações do cadastro da Ordem de Serviço.
 * @pw_element despesasReembolsaveis $despesasReembolsaveis Despesas reembolsáveis.
 * @pw_element produtosUtilizados $produtosUtilizados Produtos Utilizados na Ordem de Serviço.
 * @pw_element TarefasArray $Tarefas Lista com as tarefas relacionadas a ordem de serviço.<BR><BR>Retornado apenas no método de consulta e quando preenchida a tag "cIncluirTarefas" como "S".
 * @pw_complex osCadastro
 */
class OsCadastro{
	/**
	 * Cabeçalho da Ordem de Serviço
	 *
	 * @var Cabecalho
	 */
	public Cabecalho $Cabecalho;
	/**
	 * Informações adicionais da OS&nbsp;
	 *
	 * @var InformacoesAdicionais
	 */
	public InformacoesAdicionais $InformacoesAdicionais;
	/**
	 * Informações do E-Mail
	 *
	 * @var Email
	 */
	public Email $Email;
	/**
	 * Lista de distribuição por departamentos
	 *
	 * @var Departamentos[]
	 */
	public array $Departamentos;
	/**
	 * Lista de Serviços Prestados
	 *
	 * @var ServicosPrestados[]
	 */
	public array $ServicosPrestados;
	/**
	 * Permite que o parcelamento seja realizado de forma manual.
	 *
	 * @var Parcelas[]
	 */
	public array $Parcelas;
	/**
	 * Observações da Ordem de Serviço
	 *
	 * @var Observacoes
	 */
	public Observacoes $Observacoes;
	/**
	 * Informações do cadastro da Ordem de Serviço.
	 *
	 * @var InfoCadastro
	 */
	public InfoCadastro $InfoCadastro;
	/**
	 * Despesas reembolsáveis.
	 *
	 * @var DespesasReembolsaveis
	 */
	public DespesasReembolsaveis $despesasReembolsaveis;
	/**
	 * Produtos Utilizados na Ordem de Serviço.
	 *
	 * @var ProdutosUtilizados
	 */
	public ProdutosUtilizados $produtosUtilizados;
	/**
	 * Lista com as tarefas relacionadas a ordem de serviço.<BR><BR>Retornado apenas no método de consulta e quando preenchida a tag "cIncluirTarefas" como "S".
	 *
	 * @var Tarefas[]
	 */
	public array $Tarefas;
}
