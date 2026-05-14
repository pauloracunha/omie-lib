<?php

namespace OmieLib\Crm\Oportunidades\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Oportunidades\Cadastros;
use OmieLib\Crm\Oportunidades\Concorrentes;
use OmieLib\Crm\Oportunidades\Envolvidos;
use OmieLib\Crm\Oportunidades\FasesStatus;
use OmieLib\Crm\Oportunidades\Identificacao;
use OmieLib\Crm\Oportunidades\Lista_papeis;
use OmieLib\Crm\Oportunidades\Lista_tickets;
use OmieLib\Crm\Oportunidades\Observacoes;
use OmieLib\Crm\Oportunidades\OportunidadesJsonClient;
use OmieLib\Crm\Oportunidades\OutrasInf;
use OmieLib\Crm\Oportunidades\PrevisaoTemp;
use OmieLib\Crm\Oportunidades\Response\OpAlterarResponse;
use OmieLib\Crm\Oportunidades\Response\OpConsultarResponse;
use OmieLib\Crm\Oportunidades\Response\OpExcluirResponse;
use OmieLib\Crm\Oportunidades\Response\OpIncluirResponse;
use OmieLib\Crm\Oportunidades\Response\OpListarResponse;
use OmieLib\Crm\Oportunidades\Response\OpUpsertResponse;
use OmieLib\Crm\Oportunidades\Tarefas;
use OmieLib\Crm\Oportunidades\Ticket;

/**
 * Solicitação da listagem de oportunidades.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $apenas_importado_api Exibir apenas os registros gerados pela API
 * @pw_element string $ordenar_por Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $ordem_decrescente Se a lista será apresentada em ordem decrescente.
 * @pw_element string $email_vendedor E-Mail do Vendedor
 * @pw_element integer $codigo_vendedor Código do Vendedor.
 * @pw_element string $ano_previsao_inicial Ano de previsão inicial da oportunidade.
 * @pw_element string $ano_previsao_final Ano de previsão final da oportunidade.
 * @pw_element string $mes_previsao_inicial Mês de previsão inicial da oportunidade.
 * @pw_element string $mes_previsao_final Mês de previsão final da oportunidade.
 * @pw_element string $data_inclusao_inicial Data de inclusão inicial da oportunidade.
 * @pw_element string $data_inclusao_final Data de inclusão final da oportunidade.
 * @pw_element string $hora_inclusao_inicial Hora de inclusão inicial.
 * @pw_element string $hora_inclusao_final Hora de inclusão final.
 * @pw_element string $data_alteracao_inicial Data de alteração inicial.
 * @pw_element string $data_alteracao_final Data de alteração final
 * @pw_element string $hora_alteracao_inicial Hora de alteração inicial
 * @pw_element string $hora_alteracao_final Hora de alteração final.
 * @pw_element string $status Status da oportunidade.<BR><BR>Pode ser:<BR><BR>A - Ativo                         <BR>C - Cancelado                     <BR>P - Perdido                       <BR>S - Suspenso                      <BR>V - Conquistado             <BR><BR>Para informar mais de um status utilize virgulas.
 * @pw_element integer $fase Código da fase da oportunidade.
 * @pw_element integer $motivo Código do motivo.
 * @pw_element string $exibir_detalhes Exibe os detalhes da oportunidade.
 * @pw_element string $exibir_apenas_op_vendedor Exibir apenas as oportunidades que pertencem ao vendedor selecionado.<BR><BR>Ativando esse filtro os vendedores com credenciais para visualizar todas as oportunidades passam a se comportam como um usuário comum, que tem acesso apenas as suas próprias oportunidades.<BR>
 * @pw_element string $filtrar_por_descricao Descrição da oportunidade.
 * @pw_element integer $filtrar_por_conta Código da conta.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $exibir_obs Exibir as observações da oportunidade (S/N).<BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
 * @pw_complex opListarRequest
 */
class OpListarRequest{
	/**
	 * Número da página retornada
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $registros_por_pagina;
	/**
	 * Exibir apenas os registros gerados pela API
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
	 * Se a lista será apresentada em ordem decrescente.
	 *
	 * @var string
	 */
	public string $ordem_decrescente;
	/**
	 * E-Mail do Vendedor
	 *
	 * @var string
	 */
	public string $email_vendedor;
	/**
	 * Código do Vendedor.
	 *
	 * @var integer
	 */
	public int $codigo_vendedor;
	/**
	 * Ano de previsão inicial da oportunidade.
	 *
	 * @var string
	 */
	public string $ano_previsao_inicial;
	/**
	 * Ano de previsão final da oportunidade.
	 *
	 * @var string
	 */
	public string $ano_previsao_final;
	/**
	 * Mês de previsão inicial da oportunidade.
	 *
	 * @var string
	 */
	public string $mes_previsao_inicial;
	/**
	 * Mês de previsão final da oportunidade.
	 *
	 * @var string
	 */
	public string $mes_previsao_final;
	/**
	 * Data de inclusão inicial da oportunidade.
	 *
	 * @var string
	 */
	public string $data_inclusao_inicial;
	/**
	 * Data de inclusão final da oportunidade.
	 *
	 * @var string
	 */
	public string $data_inclusao_final;
	/**
	 * Hora de inclusão inicial.
	 *
	 * @var string
	 */
	public string $hora_inclusao_inicial;
	/**
	 * Hora de inclusão final.
	 *
	 * @var string
	 */
	public string $hora_inclusao_final;
	/**
	 * Data de alteração inicial.
	 *
	 * @var string
	 */
	public string $data_alteracao_inicial;
	/**
	 * Data de alteração final
	 *
	 * @var string
	 */
	public string $data_alteracao_final;
	/**
	 * Hora de alteração inicial
	 *
	 * @var string
	 */
	public string $hora_alteracao_inicial;
	/**
	 * Hora de alteração final.
	 *
	 * @var string
	 */
	public string $hora_alteracao_final;
	/**
	 * Status da oportunidade.<BR><BR>Pode ser:<BR><BR>A - Ativo                         <BR>C - Cancelado                     <BR>P - Perdido                       <BR>S - Suspenso                      <BR>V - Conquistado             <BR><BR>Para informar mais de um status utilize virgulas.
	 *
	 * @var string
	 */
	public string $status;
	/**
	 * Código da fase da oportunidade.
	 *
	 * @var integer
	 */
	public int $fase;
	/**
	 * Código do motivo.
	 *
	 * @var integer
	 */
	public int $motivo;
	/**
	 * Exibe os detalhes da oportunidade.
	 *
	 * @var string
	 */
	public string $exibir_detalhes;
	/**
	 * Exibir apenas as oportunidades que pertencem ao vendedor selecionado.<BR><BR>Ativando esse filtro os vendedores com credenciais para visualizar todas as oportunidades passam a se comportam como um usuário comum, que tem acesso apenas as suas próprias oportunidades.<BR>
	 *
	 * @var string
	 */
	public string $exibir_apenas_op_vendedor;
	/**
	 * Descrição da oportunidade.
	 *
	 * @var string
	 */
	public string $filtrar_por_descricao;
	/**
	 * Código da conta.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $filtrar_por_conta;
	/**
	 * Exibir as observações da oportunidade (S/N).<BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
	 *
	 * @var string
	 */
	public string $exibir_obs;
}
