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
 * Cadastro de Contrato de Serviço
 *
 * @pw_element cabecalho $cabecalho Cabeçalho do Contrato de Serviços
 * @pw_element departamentosArray $departamentos Distribuição por departamento
 * @pw_element infAdic $infAdic Informações Adicionais
 * @pw_element vencTextos $vencTextos Vencimento e Textos NFS-e
 * @pw_element itensContratoArray $itensContrato Itens do Contrato de Serviço
 * @pw_element emailCliente $emailCliente Dados do envio de e-mail do cliente
 * @pw_element observacoes $observacoes Observações do contrato
 * @pw_element despesasReembolsaveis $despesasReembolsaveis Despesas reembolsáveis
 * @pw_element produtosUtilizados $produtosUtilizados Produtos Utilizados no contrato.
 * @pw_element infoCadastro $infoCadastro Informações complementares do contrato.
 * @pw_complex contratoCadastro
 */
class ContratoCadastro{
	/**
	 * Cabeçalho do Contrato de Serviços
	 *
	 * @var Cabecalho
	 */
	public Cabecalho $cabecalho;
	/**
	 * Distribuição por departamento
	 *
	 * @var Departamentos[]
	 */
	public array $departamentos;
	/**
	 * Informações Adicionais
	 *
	 * @var InfAdic
	 */
	public InfAdic $infAdic;
	/**
	 * Vencimento e Textos NFS-e
	 *
	 * @var VencTextos
	 */
	public VencTextos $vencTextos;
	/**
	 * Itens do Contrato de Serviço
	 *
	 * @var ItensContrato[]
	 */
	public array $itensContrato;
	/**
	 * Dados do envio de e-mail do cliente
	 *
	 * @var EmailCliente
	 */
	public EmailCliente $emailCliente;
	/**
	 * Observações do contrato
	 *
	 * @var Observacoes
	 */
	public Observacoes $observacoes;
	/**
	 * Despesas reembolsáveis
	 *
	 * @var DespesasReembolsaveis
	 */
	public DespesasReembolsaveis $despesasReembolsaveis;
	/**
	 * Produtos Utilizados no contrato.
	 *
	 * @var ProdutosUtilizados
	 */
	public ProdutosUtilizados $produtosUtilizados;
	/**
	 * Informações complementares do contrato.
	 *
	 * @var InfoCadastro
	 */
	public InfoCadastro $infoCadastro;
}
