<?php

namespace OmieLib\Produtos\Pedido;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedido\Request\PvpAlterarPedFatRequest;
use OmieLib\Produtos\Pedido\Request\PvpConsultarRequest;
use OmieLib\Produtos\Pedido\Request\PvpDevolverRequest;
use OmieLib\Produtos\Pedido\Request\PvpExcluirRequest;
use OmieLib\Produtos\Pedido\Request\PvpListarRequest;
use OmieLib\Produtos\Pedido\Request\PvpSimularImpRequest;
use OmieLib\Produtos\Pedido\Request\PvpStatusRequest;
use OmieLib\Produtos\Pedido\Request\PvpTrocarEtapaRequest;
use OmieLib\Produtos\Pedido\Response\PvpAlterarPedFatResponse;
use OmieLib\Produtos\Pedido\Response\PvpConsultarResponse;
use OmieLib\Produtos\Pedido\Response\PvpDevolverResponse;
use OmieLib\Produtos\Pedido\Response\PvpExcluirResponse;
use OmieLib\Produtos\Pedido\Response\PvpListarResponse;
use OmieLib\Produtos\Pedido\Response\PvpSimularImpResponse;
use OmieLib\Produtos\Pedido\Response\PvpStatusResponse;
use OmieLib\Produtos\Pedido\Response\PvpTrocarEtapaResponse;

/**
 * Estrutura do Pedido de Vendas de Produtos.
 *
 * @pw_element cabecalho $cabecalho Informações do cabeçalho do pedido.<BR>Preenchimento Obrigatório.
 * @pw_element departamentosArray $departamentos Dados da Aba "Departamentos" do Pedido de Venda.
 * @pw_element frete $frete Dados da Aba "Frete e Outras Despesas" do Pedido de Venda.<BR>Preenchimento Opcional.
 * @pw_element informacoes_adicionais $informacoes_adicionais Dados da Aba "Informações Adicionais" do Pedido de Venda.<BR>Preenchimento Obrigatório.<BR><BR>
 * @pw_element lista_parcelas $lista_parcelas Dados da Aba "Parcelas" do Pedido de Venda.<BR><BR>Preenchimento Obrigatório quando a conteúdo da tag "codigo_parcela" for igual a "999". <BR>Para todos os outros códigos o preenchimento é automático - Não informar essa estrutura.
 * @pw_element observacoes $observacoes Dados da Aba "Observações" do Pedido de Venda.<BR>Preenchimento Opcional.
 * @pw_element detArray $det Dados da Aba "Itens da Venda" do Pedido de Venda.<BR>Preenchimento Obrigatório.
 * @pw_element market_place $market_place Dados para o Market Place.
 * @pw_element total_pedido $total_pedido Valores totais do pedido.<BR>Preenchimento automático - Não informar.
 * @pw_element infoCadastro $infoCadastro Informações complementares do pedido.<BR>Preenchimento automático - Não informar.
 * @pw_element exportacao $exportacao Dados da exportacao
 * @pw_element lancamentos $lancamentos Lançamentos no Conta Corrente relacionados ao Pedido de Vendas taxas,entre outros).<BR><BR>Preenchimento opcional.
 * @pw_element agropecuario $agropecuario Dados para atender NT 2024.003. Informações de Produtos da Agricultura, Pecuária e Produção Florestal
 * @pw_complex pedido_venda_produto
 */
class Pedido_venda_produto{
	/**
	 * Informações do cabeçalho do pedido.<BR>Preenchimento Obrigatório.
	 *
	 * @var Cabecalho
	 */
	public Cabecalho $cabecalho;
	/**
	 * Dados da Aba "Departamentos" do Pedido de Venda.
	 *
	 * @var Departamentos[]
	 */
	public array $departamentos;
	/**
	 * Dados da Aba "Frete e Outras Despesas" do Pedido de Venda.<BR>Preenchimento Opcional.
	 *
	 * @var Frete
	 */
	public Frete $frete;
	/**
	 * Dados da Aba "Informações Adicionais" do Pedido de Venda.<BR>Preenchimento Obrigatório.<BR><BR>
	 *
	 * @var Informacoes_adicionais
	 */
	public Informacoes_adicionais $informacoes_adicionais;
	/**
	 * Dados da Aba "Parcelas" do Pedido de Venda.<BR><BR>Preenchimento Obrigatório quando a conteúdo da tag "codigo_parcela" for igual a "999". <BR>Para todos os outros códigos o preenchimento é automático - Não informar essa estrutura.
	 *
	 * @var Lista_parcelas
	 */
	public Lista_parcelas $lista_parcelas;
	/**
	 * Dados da Aba "Observações" do Pedido de Venda.<BR>Preenchimento Opcional.
	 *
	 * @var Observacoes
	 */
	public Observacoes $observacoes;
	/**
	 * Dados da Aba "Itens da Venda" do Pedido de Venda.<BR>Preenchimento Obrigatório.
	 *
	 * @var Det[]
	 */
	public array $det;
	/**
	 * Dados para o Market Place.
	 *
	 * @var Market_place
	 */
	public Market_place $market_place;
	/**
	 * Valores totais do pedido.<BR>Preenchimento automático - Não informar.
	 *
	 * @var Total_pedido
	 */
	public Total_pedido $total_pedido;
	/**
	 * Informações complementares do pedido.<BR>Preenchimento automático - Não informar.
	 *
	 * @var InfoCadastro
	 */
	public InfoCadastro $infoCadastro;
	/**
	 * Dados da exportacao
	 *
	 * @var Exportacao
	 */
	public Exportacao $exportacao;
	/**
	 * Lançamentos no Conta Corrente relacionados ao Pedido de Vendas taxas,entre outros).<BR><BR>Preenchimento opcional.
	 *
	 * @var Lancamentos
	 */
	public Lancamentos $lancamentos;
	/**
	 * Dados para atender NT 2024.003. Informações de Produtos da Agricultura, Pecuária e Produção Florestal
	 *
	 * @var Agropecuario
	 */
	public Agropecuario $agropecuario;
}
