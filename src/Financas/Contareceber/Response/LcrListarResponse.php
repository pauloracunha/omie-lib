<?php

namespace OmieLib\Financas\Contareceber\Response;

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
use OmieLib\Financas\Contareceber\Request\LcrListarRequest;
use OmieLib\Financas\Contareceber\Semanal;
use OmieLib\Financas\Contareceber\Status_lote;

/**
 * Resposta da listagem de Contas a Receber
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $total_de_paginas Total de páginas encontradas.
 * @pw_element integer $registros Número de registros retornados
 * @pw_element integer $total_de_registros Total de registros encontrados.
 * @pw_element conta_receber_cadastroArray $conta_receber_cadastro Cadastro de contas a receber.
 * @pw_complex lcrListarResponse
 */
class LcrListarResponse{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Total de páginas encontradas.
	 *
	 * @var integer
	 */
	public int $total_de_paginas;
	/**
	 * Número de registros retornados
	 *
	 * @var integer
	 */
	public int $registros;
	/**
	 * Total de registros encontrados.
	 *
	 * @var integer
	 */
	public int $total_de_registros;
	/**
	 * Cadastro de contas a receber.
	 *
	 * @var Conta_receber_cadastro[]
	 */
	public array $conta_receber_cadastro;
}
