<?php

namespace OmieLib\Financas\Contareceber\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contareceber\Boleto;
use OmieLib\Financas\Contareceber\Categorias;
use OmieLib\Financas\Contareceber\Conta_receber_cadastro;
use OmieLib\Financas\Contareceber\Conta_receber_cadastro_chave;
use OmieLib\Financas\Contareceber\Conta_receber_cadastro_response;
use OmieLib\Financas\Contareceber\Conta_receber_cancelar_recebimento;
use OmieLib\Financas\Contareceber\Conta_receber_cancelar_recebimento_resposta;
use OmieLib\Financas\Contareceber\Conta_receber_conciliar_request;
use OmieLib\Financas\Contareceber\Conta_receber_conciliar_response;
use OmieLib\Financas\Contareceber\Conta_receber_lancar_recebimento;
use OmieLib\Financas\Contareceber\Conta_receber_lancar_recebimento_resposta;
use OmieLib\Financas\Contareceber\Conta_receber_lote;
use OmieLib\Financas\Contareceber\Conta_receber_lote_response;
use OmieLib\Financas\Contareceber\Distribuicao;
use OmieLib\Financas\Contareceber\Especifico;
use OmieLib\Financas\Contareceber\Info;
use OmieLib\Financas\Contareceber\LancamentoContaReceberJsonClient;
use OmieLib\Financas\Contareceber\Lancamento_detalhe;
use OmieLib\Financas\Contareceber\LcrChave;
use OmieLib\Financas\Contareceber\Mensal;
use OmieLib\Financas\Contareceber\Rateio_cadastro;
use OmieLib\Financas\Contareceber\Recebimento;
use OmieLib\Financas\Contareceber\Repeticao;
use OmieLib\Financas\Contareceber\Response\LcrListarResponse;
use OmieLib\Financas\Contareceber\Semanal;
use OmieLib\Financas\Contareceber\Status_lote;

/**
 * Solicitação de Listagem de Contas a Receber
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $registros_por_pagina Número de registros retornados
 * @pw_element string $apenas_importado_api DEPRECATED
 * @pw_element string $ordenar_por Ordenar o resultado da página por:<BR><BR>CODIGO - Código do lançamento do Omie;<BR>CODIGO_INTEGRACAO - lançamento interno do seu sistema;<BR>DATA_EMISSAO - Data de Emissão<BR>DATA_INCLUSAO - Data de Inclusão<BR>DATA_ALTERACAO - Data de Alteração<BR>DATA_VENCIMENTO - Data de Vencimento<BR>DATA_PAGAMENTO - Data de Pagamento
 * @pw_element string $ordem_descrescente Indica se a ordem de exibição é decrescente caso seja informado "S".
 * @pw_element string $filtrar_por_data_de Filtrar lançamentos incluídos e/ou alterados até a data
 * @pw_element string $filtrar_por_data_ate Filtrar lançamentos incluídos e/ou alterados até a data
 * @pw_element string $filtrar_apenas_inclusao Filtrar apenas registros incluídos (S/N)
 * @pw_element string $filtrar_apenas_alteracao Filtrar apenas registros alterados (S/N)
 * @pw_element string $filtrar_por_emissao_de Data de alteração inicial (Filtrar os registros a partir da data especificada).<BR>No formato dd/mm/aaaa.
 * @pw_element string $filtrar_por_registro_de Filtra os registros a partir da data
 * @pw_element string $filtrar_por_emissao_ate Data de alteração final (Filtra os registros até a data especificada).<BR>No formato dd/mm/aaaa.
 * @pw_element string $filtrar_por_registro_ate Filtra os registros até a data especificada
 * @pw_element integer $filtrar_conta_corrente Código da Conta Corrente
 * @pw_element string $filtrar_apenas_titulos_em_aberto Filtra os registros exibindos apenas os titulos em aberto
 * @pw_element integer $filtrar_cliente Filtra os registros exibidos por cliente
 * @pw_element string $filtrar_por_status Filtrar por Status
 * @pw_element string $filtrar_por_cpf_cnpj Filtrar os títulos por CPF/CNPJ
 * @pw_element integer $filtrar_por_projeto Código do Projeto.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Detalhes" do Contas a Pagar.<BR><BR>Utilize a tag "codigo" do método "ListarProjetos" da API<BR>http://app.omie.com.br/api/v1/geral/projetos/<BR>para obter essa informação.
 * @pw_element integer $filtrar_por_vendedor Código do Vendedor.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.<BR><BR>Utilize a tag "codigo" do método "ListarVendedores" da API<BR>http://app.omie.com.br/api/v1/geral/vendedores/<BR>para obter essa informação.
 * @pw_element string $exibir_obs Exibir as observações do lançamento (S/N).<BR><BR>Preencher com "S" ou "N".<BR><BR>Default "N"<BR><BR>Preenchimento Opcional.
 * @pw_complex lcrListarRequest
 */
class LcrListarRequest{
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
	 * Ordenar o resultado da página por:<BR><BR>CODIGO - Código do lançamento do Omie;<BR>CODIGO_INTEGRACAO - lançamento interno do seu sistema;<BR>DATA_EMISSAO - Data de Emissão<BR>DATA_INCLUSAO - Data de Inclusão<BR>DATA_ALTERACAO - Data de Alteração<BR>DATA_VENCIMENTO - Data de Vencimento<BR>DATA_PAGAMENTO - Data de Pagamento
	 *
	 * @var string
	 */
	public string $ordenar_por;
	/**
	 * Indica se a ordem de exibição é decrescente caso seja informado "S".
	 *
	 * @var string
	 */
	public string $ordem_descrescente;
	/**
	 * Filtrar lançamentos incluídos e/ou alterados até a data
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
	 * Data de alteração inicial (Filtrar os registros a partir da data especificada).<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $filtrar_por_emissao_de;
	/**
	 * Filtra os registros a partir da data
	 *
	 * @var string
	 */
	public string $filtrar_por_registro_de;
	/**
	 * Data de alteração final (Filtra os registros até a data especificada).<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $filtrar_por_emissao_ate;
	/**
	 * Filtra os registros até a data especificada
	 *
	 * @var string
	 */
	public string $filtrar_por_registro_ate;
	/**
	 * Código da Conta Corrente
	 *
	 * @var integer
	 */
	public int $filtrar_conta_corrente;
	/**
	 * Filtra os registros exibindos apenas os titulos em aberto
	 *
	 * @var string
	 */
	public string $filtrar_apenas_titulos_em_aberto;
	/**
	 * Filtra os registros exibidos por cliente
	 *
	 * @var integer
	 */
	public int $filtrar_cliente;
	/**
	 * Filtrar por Status
	 *
	 * @var string
	 */
	public string $filtrar_por_status;
	/**
	 * Filtrar os títulos por CPF/CNPJ
	 *
	 * @var string
	 */
	public string $filtrar_por_cpf_cnpj;
	/**
	 * Código do Projeto.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Detalhes" do Contas a Pagar.<BR><BR>Utilize a tag "codigo" do método "ListarProjetos" da API<BR>http://app.omie.com.br/api/v1/geral/projetos/<BR>para obter essa informação.
	 *
	 * @var integer
	 */
	public int $filtrar_por_projeto;
	/**
	 * Código do Vendedor.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Pagar.<BR><BR>Utilize a tag "codigo" do método "ListarVendedores" da API<BR>http://app.omie.com.br/api/v1/geral/vendedores/<BR>para obter essa informação.
	 *
	 * @var integer
	 */
	public int $filtrar_por_vendedor;
	/**
	 * Exibir as observações do lançamento (S/N).<BR><BR>Preencher com "S" ou "N".<BR><BR>Default "N"<BR><BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $exibir_obs;
}
