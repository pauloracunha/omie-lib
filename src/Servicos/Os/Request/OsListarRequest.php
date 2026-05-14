<?php

namespace OmieLib\Servicos\Os\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Os\Cabecalho;
use OmieLib\Servicos\Os\DeducoesIss;
use OmieLib\Servicos\Os\Departamentos;
use OmieLib\Servicos\Os\DespesaReembolsavel;
use OmieLib\Servicos\Os\DespesasReembolsaveis;
use OmieLib\Servicos\Os\DetalhesNfse;
use OmieLib\Servicos\Os\Email;
use OmieLib\Servicos\Os\Eventos;
use OmieLib\Servicos\Os\Filtrar_por_codigo;
use OmieLib\Servicos\Os\Impostos;
use OmieLib\Servicos\Os\InfoCadastro;
use OmieLib\Servicos\Os\InformacoesAdicionais;
use OmieLib\Servicos\Os\ListaOS;
use OmieLib\Servicos\Os\ListaRpsNfse;
use OmieLib\Servicos\Os\Lote_validade;
use OmieLib\Servicos\Os\Mensagens;
use OmieLib\Servicos\Os\Observacoes;
use OmieLib\Servicos\Os\OrdemServicoJsonClient;
use OmieLib\Servicos\Os\OsCadastro;
use OmieLib\Servicos\Os\OsChave;
use OmieLib\Servicos\Os\OsStatus;
use OmieLib\Servicos\Os\Parcelas;
use OmieLib\Servicos\Os\ProdutoUtilizado;
use OmieLib\Servicos\Os\ProdutosUtilizados;
use OmieLib\Servicos\Os\Response\OsListarResponse;
use OmieLib\Servicos\Os\Response\OsObterResponse;
use OmieLib\Servicos\Os\Response\OsStatusResponse;
use OmieLib\Servicos\Os\Response\OsTrocarEtapaResponse;
use OmieLib\Servicos\Os\ServicosPrestados;
use OmieLib\Servicos\Os\Tarefas;
use OmieLib\Servicos\Os\ViaUnica;

/**
 * Solicitação de Listagem de Ordens de Serviço
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $registros_por_pagina Número de registros retornados.
 * @pw_element string $apenas_importado_api DEPRECATED
 * @pw_element string $ordenar_por Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $ordem_decrescente Ordem Crescente ou Decrescente.
 * @pw_element string $filtrar_por_data_de Data de inclusão e/ou alteração inicial.
 * @pw_element string $filtrar_por_data_ate Data de inclusão e/ou alteração final.
 * @pw_element string $filtrar_apenas_inclusao Filtrar apenas registros incluídos (S/N)
 * @pw_element string $filtrar_apenas_alteracao Filtrar apenas registros alterados (S/N)
 * @pw_element filtrar_por_codigoArray $filtrar_por_codigo Lista de códigos de Ordem de Serviço.
 * @pw_element string $filtrar_por_status Status da OS:<BR><BR>F-Faturada<BR>N-Não faturada<BR>C-Cancelada<BR>
 * @pw_element string $filtrar_por_etapa Etapa da Ordem de Serviço.
 * @pw_element integer $filtrar_por_cliente Filtra pelo ID do cliente.
 * @pw_element string $filtrar_por_data_previsao_de Data de previsão inicial
 * @pw_element string $filtrar_por_data_previsao_ate Data de previsão final.
 * @pw_element string $filtrar_por_data_faturamento_de Data de faturamento inicial.
 * @pw_element string $filtrar_por_data_faturamento_ate Data de faturamento final.
 * @pw_element string $filtrar_por_data_cancelamento_de Data de cancelamento inicial.
 * @pw_element string $filtrar_por_data_cancelamento_ate Data de cancelamento final.
 * @pw_element string $ordem_descrescente Ordem Crescente ou Decrescente.
 * @pw_element string $cExibirDespesas Exibir as despesas reembolsáveis (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
 * @pw_element string $cExibirProdutos Exibir os produtos utilizados (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
 * @pw_element string $cTipoFat Tipo de faturamento:<BR><BR>Pode ser: <BR><BR>REC - Recibo<BR>NFS - NFS-e<BR>VUF - Via única não autorizada<BR>VUA - Via única autorizada
 * @pw_complex osListarRequest
 */
class OsListarRequest{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Número de registros retornados.
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
	 * Ordem de exibição dos dados. Padrão: Código.
	 *
	 * @var string
	 */
	public string $ordenar_por;
	/**
	 * Ordem Crescente ou Decrescente.
	 *
	 * @var string
	 */
	public string $ordem_decrescente;
	/**
	 * Data de inclusão e/ou alteração inicial.
	 *
	 * @var string
	 */
	public string $filtrar_por_data_de;
	/**
	 * Data de inclusão e/ou alteração final.
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
	 * Lista de códigos de Ordem de Serviço.
	 *
	 * @var Filtrar_por_codigo[]
	 */
	public array $filtrar_por_codigo;
	/**
	 * Status da OS:<BR><BR>F-Faturada<BR>N-Não faturada<BR>C-Cancelada<BR>
	 *
	 * @var string
	 */
	public string $filtrar_por_status;
	/**
	 * Etapa da Ordem de Serviço.
	 *
	 * @var string
	 */
	public string $filtrar_por_etapa;
	/**
	 * Filtra pelo ID do cliente.
	 *
	 * @var integer
	 */
	public int $filtrar_por_cliente;
	/**
	 * Data de previsão inicial
	 *
	 * @var string
	 */
	public string $filtrar_por_data_previsao_de;
	/**
	 * Data de previsão final.
	 *
	 * @var string
	 */
	public string $filtrar_por_data_previsao_ate;
	/**
	 * Data de faturamento inicial.
	 *
	 * @var string
	 */
	public string $filtrar_por_data_faturamento_de;
	/**
	 * Data de faturamento final.
	 *
	 * @var string
	 */
	public string $filtrar_por_data_faturamento_ate;
	/**
	 * Data de cancelamento inicial.
	 *
	 * @var string
	 */
	public string $filtrar_por_data_cancelamento_de;
	/**
	 * Data de cancelamento final.
	 *
	 * @var string
	 */
	public string $filtrar_por_data_cancelamento_ate;
	/**
	 * Ordem Crescente ou Decrescente.
	 *
	 * @var string
	 */
	public string $ordem_descrescente;
	/**
	 * Exibir as despesas reembolsáveis (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
	 *
	 * @var string
	 */
	public string $cExibirDespesas;
	/**
	 * Exibir os produtos utilizados (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
	 *
	 * @var string
	 */
	public string $cExibirProdutos;
	/**
	 * Tipo de faturamento:<BR><BR>Pode ser: <BR><BR>REC - Recibo<BR>NFS - NFS-e<BR>VUF - Via única não autorizada<BR>VUA - Via única autorizada
	 *
	 * @var string
	 */
	public string $cTipoFat;
}
