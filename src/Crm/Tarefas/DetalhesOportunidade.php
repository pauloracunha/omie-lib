<?php

namespace OmieLib\Crm\Tarefas;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Tarefas\Request\TarefaAlterarRequest;
use OmieLib\Crm\Tarefas\Request\TarefaConsultarRequest;
use OmieLib\Crm\Tarefas\Request\TarefaEmailListarRequest;
use OmieLib\Crm\Tarefas\Request\TarefaIncluirRequest;
use OmieLib\Crm\Tarefas\Request\TarefaListarRequest;
use OmieLib\Crm\Tarefas\Request\TarefaUpsertRequest;
use OmieLib\Crm\Tarefas\Response\TarefaAlterarResponse;
use OmieLib\Crm\Tarefas\Response\TarefaConsultarResponse;
use OmieLib\Crm\Tarefas\Response\TarefaEmailListarResponse;
use OmieLib\Crm\Tarefas\Response\TarefaExcluirResponse;
use OmieLib\Crm\Tarefas\Response\TarefaIncluirResponse;
use OmieLib\Crm\Tarefas\Response\TarefaListarResponse;
use OmieLib\Crm\Tarefas\Response\TarefaUpsertResponse;

/**
 * Detalhes da Oportunidade.
 *
 * @pw_element string $cDesOportunidade Descrição da Oportunidade.
 * @pw_element integer $nCodUsuario Código do usuário vendedor.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cNomUsuario Nome do usuário.
 * @pw_element string $cEmailUsuario E-Mail do usuário.
 * @pw_element string $cDesConta Descrição da Conta
 * @pw_element string $cDDD1Conta DDD do Telefone principal.
 * @pw_element string $cTelefone1Conta Telefone Principal.
 * @pw_element string $cDDD2Conta DDD do Celular.
 * @pw_element string $cTelefone2Conta Telefone secundário.
 * @pw_element string $cEnderecoConta Endereço.
 * @pw_element string $cComplementoConta Complemento do endereço.
 * @pw_element string $cCEPConta CEP.
 * @pw_element string $cBairroConta Bairro.
 * @pw_element string $cCidadeConta Cidade.
 * @pw_element string $cEstadoConta Estado.
 * @pw_element string $cNomeContato Nome do Contato.
 * @pw_complex detalhesOportunidade
 */
class DetalhesOportunidade{
	/**
	 * Descrição da Oportunidade.
	 *
	 * @var string
	 */
	public string $cDesOportunidade;
	/**
	 * Código do usuário vendedor.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodUsuario;
	/**
	 * Nome do usuário.
	 *
	 * @var string
	 */
	public string $cNomUsuario;
	/**
	 * E-Mail do usuário.
	 *
	 * @var string
	 */
	public string $cEmailUsuario;
	/**
	 * Descrição da Conta
	 *
	 * @var string
	 */
	public string $cDesConta;
	/**
	 * DDD do Telefone principal.
	 *
	 * @var string
	 */
	public string $cDDD1Conta;
	/**
	 * Telefone Principal.
	 *
	 * @var string
	 */
	public string $cTelefone1Conta;
	/**
	 * DDD do Celular.
	 *
	 * @var string
	 */
	public string $cDDD2Conta;
	/**
	 * Telefone secundário.
	 *
	 * @var string
	 */
	public string $cTelefone2Conta;
	/**
	 * Endereço.
	 *
	 * @var string
	 */
	public string $cEnderecoConta;
	/**
	 * Complemento do endereço.
	 *
	 * @var string
	 */
	public string $cComplementoConta;
	/**
	 * CEP.
	 *
	 * @var string
	 */
	public string $cCEPConta;
	/**
	 * Bairro.
	 *
	 * @var string
	 */
	public string $cBairroConta;
	/**
	 * Cidade.
	 *
	 * @var string
	 */
	public string $cCidadeConta;
	/**
	 * Estado.
	 *
	 * @var string
	 */
	public string $cEstadoConta;
	/**
	 * Nome do Contato.
	 *
	 * @var string
	 */
	public string $cNomeContato;
}
