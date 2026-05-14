<?php

namespace OmieLib\Financas\Contapagar;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contapagar\Request\LcpListarRequest;
use OmieLib\Financas\Contapagar\Response\LcpListarResponse;

/**
 * @service LancamentoContaPagarJsonClient
 * @author omie
 */
class LancamentoContaPagarJsonClient extends AbstractOmieJsonClient {
	/**
	 * The WSDL URI
	 *
	 * @var string
	 */
	
	/**
	 * The PHP SoapClient object
	 *
	 * @var object
	 */
	public static $_Server=null;
	/**
	 * The endpoint URI
	 *
	 * @var string
	 */
	public static $_EndPoint='financas/contapagar/';

	/**
	 * Inclui uma conta a Pagar.
	 *
	 * @param Conta_pagar_cadastro $conta_pagar_cadastro Cadastro de contas a pagar.
	 * @return Conta_pagar_cadastro_response Resposta do Cadastro de Contas a Pagar
	 */
	public function IncluirContaPagar(Conta_pagar_cadastro $conta_pagar_cadastro): Conta_pagar_cadastro_response{
		return $this->_Call('IncluirContaPagar',Array(
			$conta_pagar_cadastro
		));
	}

	/**
	 * Altera uma conta a pagar
	 *
	 * @param Conta_pagar_cadastro $conta_pagar_cadastro Cadastro de contas a pagar.
	 * @return Conta_pagar_cadastro_response Resposta do Cadastro de Contas a Pagar
	 */
	public function AlterarContaPagar(Conta_pagar_cadastro $conta_pagar_cadastro): Conta_pagar_cadastro_response{
		return $this->_Call('AlterarContaPagar',Array(
			$conta_pagar_cadastro
		));
	}

	/**
	 * Exclui uma conta a pagar
	 *
	 * @param Conta_pagar_cadastro_chave $conta_pagar_cadastro_chave Chave da conta a pagar
	 * @return Conta_pagar_cadastro_response Resposta do Cadastro de Contas a Pagar
	 */
	public function ExcluirContaPagar(Conta_pagar_cadastro_chave $conta_pagar_cadastro_chave): Conta_pagar_cadastro_response{
		return $this->_Call('ExcluirContaPagar',Array(
			$conta_pagar_cadastro_chave
		));
	}

	/**
	 * Consulta uma conta a pagar
	 *
	 * @param Conta_pagar_cadastro_chave $conta_pagar_cadastro_chave Chave da conta a pagar
	 * @return Conta_pagar_cadastro Cadastro de contas a pagar.
	 */
	public function ConsultarContaPagar(Conta_pagar_cadastro_chave $conta_pagar_cadastro_chave): Conta_pagar_cadastro{
		return $this->_Call('ConsultarContaPagar',Array(
			$conta_pagar_cadastro_chave
		));
	}

	/**
	 * Efetua a baixa de um pagamento do contas a pagar.
	 *
	 * @param Conta_pagar_lancar_pagamento $conta_pagar_lancar_pagamento Informações para realizar a Baixa do Contas a Pagar.
	 * @return Conta_pagar_lancar_pagamento_resposta Resultado da baixa realizada para um lançamento do conta a pagar.
	 */
	public function LancarPagamento(Conta_pagar_lancar_pagamento $conta_pagar_lancar_pagamento): Conta_pagar_lancar_pagamento_resposta{
		return $this->_Call('LancarPagamento',Array(
			$conta_pagar_lancar_pagamento
		));
	}

	/**
	 * Cancela um pagamento realizado no Contas a Pagar
	 *
	 * @param Conta_pagar_cancelar_pagamento $conta_pagar_cancelar_pagamento Cancela um pagamento realizado para um título do Contas a Pagar.
	 * @return Conta_pagar_cancelar_pagamento_resposta Resposta do Cancelamento de um pagamento realizado para um título do Contas a Pagar.
	 */
	public function CancelarPagamento(Conta_pagar_cancelar_pagamento $conta_pagar_cancelar_pagamento): Conta_pagar_cancelar_pagamento_resposta{
		return $this->_Call('CancelarPagamento',Array(
			$conta_pagar_cancelar_pagamento
		));
	}

	/**
	 * Inclusão do contas a pagar por lote
	 *
	 * @param Conta_pagar_lote $conta_pagar_lote Inclusão em Lote de contas a pagar&nbsp;
	 * @return Conta_pagar_lote_response Resposta do Lançamento de contas a pagar por lote&nbsp;
	 */
	public function IncluirContaPagarPorLote(Conta_pagar_lote $conta_pagar_lote): Conta_pagar_lote_response{
		return $this->_Call('IncluirContaPagarPorLote',Array(
			$conta_pagar_lote
		));
	}

	/**
	 * Upsert do Contas a Pagar
	 *
	 * @param Conta_pagar_cadastro $conta_pagar_cadastro Cadastro de contas a pagar.
	 * @return Conta_pagar_cadastro_response Resposta do Cadastro de Contas a Pagar
	 */
	public function UpsertContaPagar(Conta_pagar_cadastro $conta_pagar_cadastro): Conta_pagar_cadastro_response{
		return $this->_Call('UpsertContaPagar',Array(
			$conta_pagar_cadastro
		));
	}

	/**
	 * Efetua o UPSERT do Contas a Pagar por Lote
	 *
	 * @param Conta_pagar_lote $conta_pagar_lote Inclusão em Lote de contas a pagar&nbsp;
	 * @return Conta_pagar_lote_response Resposta do Lançamento de contas a pagar por lote&nbsp;
	 */
	public function UpsertContaPagarPorLote(Conta_pagar_lote $conta_pagar_lote): Conta_pagar_lote_response{
		return $this->_Call('UpsertContaPagarPorLote',Array(
			$conta_pagar_lote
		));
	}

	/**
	 * Listar as Contas a Pagar
	 *
	 * @param LcpListarRequest $lcpListarRequest Solicitação de Listagem de Contas a Pagar
	 * @return LcpListarResponse Resposta da listagem de Contas a Pagar
	 */
	public function ListarContasPagar(LcpListarRequest $lcpListarRequest): LcpListarResponse{
		return $this->_Call('ListarContasPagar',Array(
			$lcpListarRequest
		));
	}
}
