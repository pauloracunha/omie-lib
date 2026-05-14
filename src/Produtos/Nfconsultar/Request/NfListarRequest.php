<?php

namespace OmieLib\Produtos\Nfconsultar\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfconsultar\CBSTot;
use OmieLib\Produtos\Nfconsultar\Categorias;
use OmieLib\Produtos\Nfconsultar\Compl;
use OmieLib\Produtos\Nfconsultar\Departamentos;
use OmieLib\Produtos\Nfconsultar\Det;
use OmieLib\Produtos\Nfconsultar\IBSTot;
use OmieLib\Produtos\Nfconsultar\ICMSTot;
use OmieLib\Produtos\Nfconsultar\ISSQNtot;
use OmieLib\Produtos\Nfconsultar\Ide;
use OmieLib\Produtos\Nfconsultar\Info;
use OmieLib\Produtos\Nfconsultar\ItemPedido;
use OmieLib\Produtos\Nfconsultar\NFConsultarJsonClient;
use OmieLib\Produtos\Nfconsultar\NfCadastro;
use OmieLib\Produtos\Nfconsultar\NfChave;
use OmieLib\Produtos\Nfconsultar\NfDestInt;
use OmieLib\Produtos\Nfconsultar\NfEmitInt;
use OmieLib\Produtos\Nfconsultar\NfProdInt;
use OmieLib\Produtos\Nfconsultar\Pedido;
use OmieLib\Produtos\Nfconsultar\Prod;
use OmieLib\Produtos\Nfconsultar\Rastreabilidade;
use OmieLib\Produtos\Nfconsultar\Response\NfListarResponse;
use OmieLib\Produtos\Nfconsultar\RetTrib;
use OmieLib\Produtos\Nfconsultar\Titulos;
use OmieLib\Produtos\Nfconsultar\Total;

/**
 * Solicitação de Listagem de Notas Fiscais
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $registros_por_pagina Número de registros retornados
 * @pw_element string $apenas_importado_api DEPRECATED
 * @pw_element string $ordenar_por Ordenar o resultado da página por:<BR><BR>CODIGO - Código do lançamento do Omie;<BR>INTEGRACAO - Código do lançamento interno do seu sistema;<BR>DATA_LANCAMENTO - Data do lançamento.
 * @pw_element string $ordem_decrescente Ordem decrescente.
 * @pw_element string $filtrar_por_data_de Filtra os registros a partir da data.
 * @pw_element string $filtrar_por_data_ate Filtrar lançamentos incluídos e/ou alterados até a data
 * @pw_element string $filtrar_apenas_inclusao Filtrar apenas registros incluídos (S/N)
 * @pw_element string $filtrar_apenas_alteracao Filtrar apenas registros alterados (S/N)
 * @pw_element string $filtrar_por_status Status da NF:<BR><BR>N-Não cancelada<BR>C-Cancelada
 * @pw_element string $dEmiInicial Data de Emissão inicial.
 * @pw_element string $hEmiInicial Hora de Emissão inicial.
 * @pw_element string $dEmiFinal Data de Emissão final.
 * @pw_element string $hEmiFinal Hora de Emissão final.
 * @pw_element string $dSaiEntInicial Data de Saida inicial.
 * @pw_element string $dSaiEntFinal Data de Saida final.
 * @pw_element string $dRegInicial Data de Registro inicial.
 * @pw_element string $dRegFinal Data de Registro final.
 * @pw_element string $dCanInicial Data de Cancelamento inicial.
 * @pw_element string $dCanFinal Data de Cancelamento final.
 * @pw_element string $dInutInicial Data de Inutilização inicial.
 * @pw_element string $dInutFinal Data de Inutilização final.
 * @pw_element string $tpNF Tipo de Operação: 0-entrada / 1-saída
 * @pw_element string $tpAmb Tipo de Ambiente = 1-Produção / 2-Homologação
 * @pw_element string $cSerie Série da NF-e
 * @pw_element integer $nNFInicial Número da Nota Fiscal inicial.
 * @pw_element integer $nNFFinal Número da Nota Fiscal final.
 * @pw_element string $cDetalhesPedido Exibe os detalhes do pedido que originou a Nota Fiscal.<BR><BR>Preecher com "S" ou "N".<BR>
 * @pw_element string $cApenasResumo Exibe apenas a resumo da Nota Fiscal.<BR><BR>Preencher com "S" ou "N".<BR>
 * @pw_element string $opPedido Operação do Pedido de venda que originou a NF.<BR><BR>Pode ser:<BR><BR>Vendas<BR>01 Venda de Serviço              <BR>11 Venda de Produto              <BR>12 Venda de Produto pelo PDV     <BR>13 Devolução de Venda            <BR>14 Remessa de Produto            <BR>16 Nota Complementar de Saída    <BR><BR>Compras<BR>21 Compra de Produto             <BR>23 Devolução ao Fornecedor       <BR>24 Retorno de Remessa            <BR>26 Nota Complementar de Entrada  <BR>22 Compra de Produto (Importação)<BR>28 Ordem de Produção
 * @pw_element string $cNumeroPedidoCliente Pesquisa pelo numero do Pedido do Cliente.
 * @pw_element integer $nIdCliente ID do Cliente.
 * @pw_element string $cnpj_cpf CNPJ / CPF.
 * @pw_element string $ordem_descrescente DEPRECATED
 * @pw_complex nfListarRequest
 */
class NfListarRequest{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Número de registros retornados
	 *
	 * @var integer
	 */
	public int $registros_por_pagina;
	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public string $apenas_importado_api;
	/**
	 * Ordenar o resultado da página por:<BR><BR>CODIGO - Código do lançamento do Omie;<BR>INTEGRACAO - Código do lançamento interno do seu sistema;<BR>DATA_LANCAMENTO - Data do lançamento.
	 *
	 * @var string
	 */
	public string $ordenar_por;
	/**
	 * Ordem decrescente.
	 *
	 * @var string
	 */
	public string $ordem_decrescente;
	/**
	 * Filtra os registros a partir da data.
	 *
	 * @var string
	 */
	public string $filtrar_por_data_de;
	/**
	 * Filtrar lançamentos incluídos e/ou alterados até a data
	 *
	 * @var string
	 */
	public string $filtrar_por_data_ate;
	/**
	 * Filtrar apenas registros incluídos (S/N)
	 *
	 * @var string
	 */
	public string $filtrar_apenas_inclusao;
	/**
	 * Filtrar apenas registros alterados (S/N)
	 *
	 * @var string
	 */
	public string $filtrar_apenas_alteracao;
	/**
	 * Status da NF:<BR><BR>N-Não cancelada<BR>C-Cancelada
	 *
	 * @var string
	 */
	public string $filtrar_por_status;
	/**
	 * Data de Emissão inicial.
	 *
	 * @var string
	 */
	public string $dEmiInicial;
	/**
	 * Hora de Emissão inicial.
	 *
	 * @var string
	 */
	public string $hEmiInicial;
	/**
	 * Data de Emissão final.
	 *
	 * @var string
	 */
	public string $dEmiFinal;
	/**
	 * Hora de Emissão final.
	 *
	 * @var string
	 */
	public string $hEmiFinal;
	/**
	 * Data de Saida inicial.
	 *
	 * @var string
	 */
	public string $dSaiEntInicial;
	/**
	 * Data de Saida final.
	 *
	 * @var string
	 */
	public string $dSaiEntFinal;
	/**
	 * Data de Registro inicial.
	 *
	 * @var string
	 */
	public string $dRegInicial;
	/**
	 * Data de Registro final.
	 *
	 * @var string
	 */
	public string $dRegFinal;
	/**
	 * Data de Cancelamento inicial.
	 *
	 * @var string
	 */
	public string $dCanInicial;
	/**
	 * Data de Cancelamento final.
	 *
	 * @var string
	 */
	public string $dCanFinal;
	/**
	 * Data de Inutilização inicial.
	 *
	 * @var string
	 */
	public string $dInutInicial;
	/**
	 * Data de Inutilização final.
	 *
	 * @var string
	 */
	public string $dInutFinal;
	/**
	 * Tipo de Operação: 0-entrada / 1-saída
	 *
	 * @var string
	 */
	public string $tpNF;
	/**
	 * Tipo de Ambiente = 1-Produção / 2-Homologação
	 *
	 * @var string
	 */
	public string $tpAmb;
	/**
	 * Série da NF-e
	 *
	 * @var string
	 */
	public string $cSerie;
	/**
	 * Número da Nota Fiscal inicial.
	 *
	 * @var integer
	 */
	public int $nNFInicial;
	/**
	 * Número da Nota Fiscal final.
	 *
	 * @var integer
	 */
	public int $nNFFinal;
	/**
	 * Exibe os detalhes do pedido que originou a Nota Fiscal.<BR><BR>Preecher com "S" ou "N".<BR>
	 *
	 * @var string
	 */
	public string $cDetalhesPedido;
	/**
	 * Exibe apenas a resumo da Nota Fiscal.<BR><BR>Preencher com "S" ou "N".<BR>
	 *
	 * @var string
	 */
	public string $cApenasResumo;
	/**
	 * Operação do Pedido de venda que originou a NF.<BR><BR>Pode ser:<BR><BR>Vendas<BR>01 Venda de Serviço              <BR>11 Venda de Produto              <BR>12 Venda de Produto pelo PDV     <BR>13 Devolução de Venda            <BR>14 Remessa de Produto            <BR>16 Nota Complementar de Saída    <BR><BR>Compras<BR>21 Compra de Produto             <BR>23 Devolução ao Fornecedor       <BR>24 Retorno de Remessa            <BR>26 Nota Complementar de Entrada  <BR>22 Compra de Produto (Importação)<BR>28 Ordem de Produção
	 *
	 * @var string
	 */
	public string $opPedido;
	/**
	 * Pesquisa pelo numero do Pedido do Cliente.
	 *
	 * @var string
	 */
	public string $cNumeroPedidoCliente;
	/**
	 * ID do Cliente.
	 *
	 * @var integer
	 */
	public int $nIdCliente;
	/**
	 * CNPJ / CPF.
	 *
	 * @var string
	 */
	public string $cnpj_cpf;
	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public string $ordem_descrescente;
}
