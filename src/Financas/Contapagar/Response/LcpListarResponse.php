<?php

namespace OmieLib\Financas\Contapagar\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contapagar\Categorias;
use OmieLib\Financas\Contapagar\Cnab_integracao_bancaria;
use OmieLib\Financas\Contapagar\Conta_pagar_cadastro;
use OmieLib\Financas\Contapagar\Conta_pagar_cadastro_chave;
use OmieLib\Financas\Contapagar\Conta_pagar_cadastro_response;
use OmieLib\Financas\Contapagar\Conta_pagar_cancelar_pagamento;
use OmieLib\Financas\Contapagar\Conta_pagar_cancelar_pagamento_resposta;
use OmieLib\Financas\Contapagar\Conta_pagar_lancar_pagamento;
use OmieLib\Financas\Contapagar\Conta_pagar_lancar_pagamento_resposta;
use OmieLib\Financas\Contapagar\Conta_pagar_lote;
use OmieLib\Financas\Contapagar\Conta_pagar_lote_response;
use OmieLib\Financas\Contapagar\Distribuicao;
use OmieLib\Financas\Contapagar\Info;
use OmieLib\Financas\Contapagar\LancamentoContaPagarJsonClient;
use OmieLib\Financas\Contapagar\Pagamento;
use OmieLib\Financas\Contapagar\Request\LcpListarRequest;
use OmieLib\Financas\Contapagar\Servico_tomado;

/**
 * Resposta da listagem de Contas a Pagar
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $total_de_paginas Total de páginas encontradas.
 * @pw_element integer $registros Número de registros retornados
 * @pw_element integer $total_de_registros Total de registros encontrados.
 * @pw_element conta_pagar_cadastroArray $conta_pagar_cadastro Cadastro de contas a pagar.
 * @pw_complex lcpListarResponse
 */
class LcpListarResponse{
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
	 * Cadastro de contas a pagar.
	 *
	 * @var Conta_pagar_cadastro[]
	 */
	public array $conta_pagar_cadastro;
}
