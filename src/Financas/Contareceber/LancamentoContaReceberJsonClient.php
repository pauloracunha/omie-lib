<?php

namespace OmieLib\Financas\Contareceber;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contareceber\Request\LcrListarRequest;
use OmieLib\Financas\Contareceber\Response\LcrListarResponse;

/**
 * @service LancamentoContaReceberJsonClient
 * @author omie
 */
class LancamentoContaReceberJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='financas/contareceber/';

	/**
	 * Inclui uma conta a Receber
	 *
	 * @param Conta_receber_cadastro $conta_receber_cadastro Cadastro de contas a receber.
	 * @return Conta_receber_cadastro_response Resposta do Cadastro de Contas a Receber
	 */
	public function IncluirContaReceber(Conta_receber_cadastro $conta_receber_cadastro): Conta_receber_cadastro_response{
		return $this->_Call('IncluirContaReceber',Array(
			$conta_receber_cadastro
		));
	}

	/**
	 * Altera um conta a receber
	 *
	 * @param Conta_receber_cadastro $conta_receber_cadastro Cadastro de contas a receber.
	 * @return Conta_receber_cadastro_response Resposta do Cadastro de Contas a Receber
	 */
	public function AlterarContaReceber(Conta_receber_cadastro $conta_receber_cadastro): Conta_receber_cadastro_response{
		return $this->_Call('AlterarContaReceber',Array(
			$conta_receber_cadastro
		));
	}

	/**
	 * Exclui uma conta a receber
	 *
	 * @param Conta_receber_cadastro_chave $conta_receber_cadastro_chave Chave da conta a a receber
	 * @return Conta_receber_cadastro_response Resposta do Cadastro de Contas a Receber
	 */
	public function ExcluirContaReceber(Conta_receber_cadastro_chave $conta_receber_cadastro_chave): Conta_receber_cadastro_response{
		return $this->_Call('ExcluirContaReceber',Array(
			$conta_receber_cadastro_chave
		));
	}

	/**
	 * Inclui uma distribuição por departamento para uma conta a receber
	 *
	 * @param Rateio_cadastro $rateio_cadastro Cadastro de Distribuição por Departamento
	 * @return Conta_receber_cadastro_chave Chave da conta a a receber
	 */
	public function IncluirDistribuicaoDepartamento(Rateio_cadastro $rateio_cadastro): Conta_receber_cadastro_chave{
		return $this->_Call('IncluirDistribuicaoDepartamento',Array(
			$rateio_cadastro
		));
	}

	/**
	 * Altera a distribuição por departamento de uma conta a receber.
	 *
	 * @param Rateio_cadastro $rateio_cadastro Cadastro de Distribuição por Departamento
	 * @return Conta_receber_cadastro_chave Chave da conta a a receber
	 */
	public function AlterarDistribuicaoDepartamento(Rateio_cadastro $rateio_cadastro): Conta_receber_cadastro_chave{
		return $this->_Call('AlterarDistribuicaoDepartamento',Array(
			$rateio_cadastro
		));
	}

	/**
	 * Exclui a distribuição de departamento da conta a receber.
	 *
	 * @param Conta_receber_cadastro_chave $conta_receber_cadastro_chave Chave da conta a a receber
	 * @return Conta_receber_cadastro_response Resposta do Cadastro de Contas a Receber
	 */
	public function ExcluirDistribuicaoDepartamento(Conta_receber_cadastro_chave $conta_receber_cadastro_chave): Conta_receber_cadastro_response{
		return $this->_Call('ExcluirDistribuicaoDepartamento',Array(
			$conta_receber_cadastro_chave
		));
	}

	/**
	 * Realiza a baixa de um título no conta a receber.
	 *
	 * @param Conta_receber_lancar_recebimento $conta_receber_lancar_recebimento Informações para realizada a Baixa do Contas a Receber.
	 * @return Conta_receber_lancar_recebimento_resposta Resultado da baixa realizada para um lançamento do conta a receber.
	 */
	public function LancarRecebimento(Conta_receber_lancar_recebimento $conta_receber_lancar_recebimento): Conta_receber_lancar_recebimento_resposta{
		return $this->_Call('LancarRecebimento',Array(
			$conta_receber_lancar_recebimento
		));
	}

	/**
	 * Efetua o cancelamento de um recebimento de Contas a Receber.
	 *
	 * @param Conta_receber_cancelar_recebimento $conta_receber_cancelar_recebimento Requisição de cancelamento de lançamento de baixa do recebimento.
	 * @return Conta_receber_cancelar_recebimento_resposta Resposta do cancelamento da baixa.&nbsp;
	 */
	public function CancelarRecebimento(Conta_receber_cancelar_recebimento $conta_receber_cancelar_recebimento): Conta_receber_cancelar_recebimento_resposta{
		return $this->_Call('CancelarRecebimento',Array(
			$conta_receber_cancelar_recebimento
		));
	}

	/**
	 * Efetua a conciliação da baixa
	 *
	 * @param Conta_receber_conciliar_request $conta_receber_conciliar_request Realiza a conciliação do documento
	 * @return Conta_receber_conciliar_response Response da conciliação da Conta a Pagar
	 */
	public function ConciliarRecebimento(Conta_receber_conciliar_request $conta_receber_conciliar_request): Conta_receber_conciliar_response{
		return $this->_Call('ConciliarRecebimento',Array(
			$conta_receber_conciliar_request
		));
	}

	/**
	 * Desconciliar o Recebimento
	 *
	 * @param Conta_receber_conciliar_request $conta_receber_conciliar_request Realiza a conciliação do documento
	 * @return Conta_receber_conciliar_response Response da conciliação da Conta a Pagar
	 */
	public function DesconciliarRecebimento(Conta_receber_conciliar_request $conta_receber_conciliar_request): Conta_receber_conciliar_response{
		return $this->_Call('DesconciliarRecebimento',Array(
			$conta_receber_conciliar_request
		));
	}

	/**
	 * Incluir Lançamentos de contas a receber por lote.
	 *
	 * @param Conta_receber_lote $conta_receber_lote Inclusão de Contas a Receber por Lote
	 * @return Conta_receber_lote_response Resposta do Lançamento de contas a receber por lote&nbsp;
	 */
	public function IncluirContaReceberPorLote(Conta_receber_lote $conta_receber_lote): Conta_receber_lote_response{
		return $this->_Call('IncluirContaReceberPorLote',Array(
			$conta_receber_lote
		));
	}

	/**
	 * Executa o Upsert do Contas a receber
	 *
	 * @param Conta_receber_cadastro $conta_receber_cadastro Cadastro de contas a receber.
	 * @return Conta_receber_cadastro_response Resposta do Cadastro de Contas a Receber
	 */
	public function UpsertContaReceber(Conta_receber_cadastro $conta_receber_cadastro): Conta_receber_cadastro_response{
		return $this->_Call('UpsertContaReceber',Array(
			$conta_receber_cadastro
		));
	}

	/**
	 * Efetua o UPSERT do Contas a Receber por Lote.
	 *
	 * @param Conta_receber_lote $conta_receber_lote Inclusão de Contas a Receber por Lote
	 * @return Conta_receber_lote_response Resposta do Lançamento de contas a receber por lote&nbsp;
	 */
	public function UpsertContaReceberPorLote(Conta_receber_lote $conta_receber_lote): Conta_receber_lote_response{
		return $this->_Call('UpsertContaReceberPorLote',Array(
			$conta_receber_lote
		));
	}

	/**
	 * Consulta uma Conta a Receber
	 *
	 * @param LcrChave $lcrChave Chave de pesquisa do Lançamento de Contas a Receber
	 * @return Conta_receber_cadastro Cadastro de contas a receber.
	 */
	public function ConsultarContaReceber(LcrChave $lcrChave): Conta_receber_cadastro{
		return $this->_Call('ConsultarContaReceber',Array(
			$lcrChave
		));
	}

	/**
	 * Lista as contas a receber cadastradas.
	 *
	 * @param LcrListarRequest $lcrListarRequest Solicitação de Listagem de Contas a Receber
	 * @return LcrListarResponse Resposta da listagem de Contas a Receber
	 */
	public function ListarContasReceber(LcrListarRequest $lcrListarRequest): LcrListarResponse{
		return $this->_Call('ListarContasReceber',Array(
			$lcrListarRequest
		));
	}

	/**
	 * Cancelamento do boleto gerado de uma conta a receber
	 *
	 * @param Conta_receber_cadastro_chave $conta_receber_cadastro_chave Chave da conta a a receber
	 * @return Conta_receber_cadastro_response Resposta do Cadastro de Contas a Receber
	 */
	public function CancelarContaReceber(Conta_receber_cadastro_chave $conta_receber_cadastro_chave): Conta_receber_cadastro_response{
		return $this->_Call('CancelarContaReceber',Array(
			$conta_receber_cadastro_chave
		));
	}
}
